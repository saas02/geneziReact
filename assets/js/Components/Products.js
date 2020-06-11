import React, { useDebugValue } from 'react';
import { botonCarrito, formatNumber, loadImages } from './../carrito';

const obtainImage = ( images ) => {
    const image = images.split(';');
    return image[0];
}

const PrecioPromo = ( precio, inpromo ) => {
    const  precios  = precio;
    const  inpromos  = inpromo;
    if(inpromos != '' && inpromos > 0){        
        const precioPromo = precios - (precios * (inpromos/100));
        return   (
            <div>                
                <p>COP <strike>{ formatNumber(precios) }</strike></p>                                        
                <font color="red"><p>COP { formatNumber(precioPromo) }</p></font>
            </div>
        )
    }else{
        return   (
            <p>COP { formatNumber(precios) }</p>
        )                            
    }        
}

const Products = ( { product }, index ) => { 
    const  products  = product;
    return (
        <div>
            <div className="col-xs-12 col-sm-6 col-md-3" >
                <div className="thumbnail"> 
                    { 
                        (products.inpromo != '' && products.inpromo > 0) 
                        ? 
                            <div className="products_ribbon"><span>{ products.inpromo }%</span></div> 
                        : 
                            <div/>   
                    }
                    <img 
                        className="imgSize productImg" 
                        data-img= { products.codigoprod } 
                        data-toggle="modal" data-target=".modal-detail" 
                        onClick={ (e) => {                                    
                            loadImages(products.codigoprod);
                        } }
                        src = {"/assets/img-products/"+ products.codigoprod +"/"+ obtainImage( products.imagen ) }
                    />        
                    <div className="caption">
                        <h3>{ products.nombreprod }</h3>
                        <p>{ products.marca }</p>  
                        {
                            (products.color != '')                                
                            ?
                                <p>Color: { products.color }</p>
                            :
                                <p></p> 
                        }                                                
                        {
                            PrecioPromo( products.precio, products.inpromo )
                        }                        
                        <p className="text-center">    
                            <a 
                                href= { "/detalle/" + products.codigoprodurl }
                                className="btn btn-primary btn-sm" >
                                    <i className="fa fa-plus">
                                    </i>&nbsp; 
                                    Detalles
                            </a>&nbsp;&nbsp;                
                            <button value = { products.codigoprod } 
                                className="btn btn-success btn-sm botonCarrito"
                                onClick={ (e) => {                                    
                                    botonCarrito(event.target.value);
                                } }
                            >
                            <i className="fa fa-shopping-cart">
                            </i>&nbsp; 
                            Añadir
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            {
                ( (index % 4) === 0) ? <div className="clearfix"></div> : <div/>
            }
            
        </div>
    )
};
 
 export default Products;