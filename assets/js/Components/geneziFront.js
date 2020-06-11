import React, { Component } from 'react';
import ReactDOM from 'react-dom'; 
import Products from './Products';
import Loader from 'react-loader-spinner'
import "react-loader-spinner/dist/loader/css/react-spinner-loader.css"

class GeneziFront extends Component {
    constructor() {
        super();

        this.state = {
            products: []
        };
    }

    componentDidMount() {
        fetch('/productos_creados')
            .then(response => response.json())
                .then(products => {
                    this.setState({
                        products
                    });
                }
            );
    }

    


    render() {
        return (
            <div>
                { 
                    (this.state.products != '')
                        ?
                        this.state.products.map((product, index) => <Products key = {index} product = { product } />)                        
                        :                        
                        <Loader
                            type="TailSpin"
                            color="#000"
                            height={200}
                            width={300}                            
                        >                            
                        </Loader>                        
                }
            </div>
            
        );
    }
}

export default GeneziFront;