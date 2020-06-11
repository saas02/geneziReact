export function formatNumber(num) {
    return "$ "+num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
}

export function botonCarrito (dataInfo) {        
    carUpdateShop(dataInfo, false); 
};

export function loadImages (data){           
    $.ajax({
        type: 'POST',
        url: '/productos-imagenes',
        data: { product: data },
        beforeSend: function(){                    
            $(".imgFormL").html('Cargando....<br><img src="assets/img/loading.gif" class="center-all-contens">');
        },
        error: function() {                    
            $(".imgFormL").html("Ha ocurrido un error en el sistema");
        },
        success: function (data) {                    
            if(data.error){
                jQuery('.error').show();
                jQuery('.imgFormL').html(data.error);
            }else{
                var information = JSON.parse(data.message);
                var images = information.imagenes.split(';');                    
                var codigo = information.codigo;
                var descripcion = information.descripcion;
                $('.imgTittle').html(information.nombre);
                
                var html = '<div id="myCarousel" class="carousel slide" data-ride="carousel">';
                    html += '<ol class="carousel-indicators">';
                    html += '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                    html += '<li data-target="#myCarousel" data-slide-to="1"></li>';
                    html += '<li data-target="#myCarousel" data-slide-to="2"></li>';
                    html += '</ol>';  

                    html += '<div class="carousel-inner">';
                    var htmlPicture = '';
                    var active = '';
                    for(var i = 0; i < images.length; i++){                                                    
                        active = (i==0) ? 'active': '';
                        htmlPicture += '<div class="item '+active+'">';
                        htmlPicture += '<img src="'+baseUrl+'assets/img-products/'+codigo+'/'+images[i]+'" alt="Los Angeles">'
                        htmlPicture += '</div>';                            
                    }    
                    html += htmlPicture;
                    html += '</div>';


                    html += '<a class="left carousel-control" href="#myCarousel" data-slide="prev">';
                    html += '<span class="glyphicon glyphicon-chevron-left"></span>';
                    html += '<span class="sr-only">Previous</span>';
                    html += '</a>';
                    html += '<a class="right carousel-control" href="#myCarousel" data-slide="next">';
                    html += '<span class="glyphicon glyphicon-chevron-right"></span>';
                    html += '<span class="sr-only">Next</span>';
                    html += '</a></div>';
                    
                    //html += '<div class="descripcion-product"><b>Descripcion del producto:</b> <br>'+descripcion+'</div>'
                $(".imgFormL").html(html);                    
            }                                        
        }
    });
}

var carUpdateShop = function(dataInfo, deleteInfo){        
        
    $.ajax({
        type: 'POST',
        url: '/carrito',
        data: {dataInfo: dataInfo, deleteInfo: deleteInfo, carShoping : localStorage.getItem('carShoping')},
        error: function() {
            $("#container-carrito-compras").html("Ha ocurrido un error en el sistema");
        },
        success: function (data) {
            localStorage.setItem('carShoping', data.message);
            if(deleteInfo){
                carLoadShop(data.message);
            }else{
                $("#container-carrito-compras").hide();  
                $('.modal-carrito').modal('show');                    
                setTimeout(function(){$('.modal-carrito').modal('hide');}, 1000);
            }                                           
        }
    });
};

var carLoadShop = function(carShoping){        
    $.ajax({
        type: 'POST',
        url: '/cargar-carrito',
        data: { carShoping : carShoping },            
        error: function() {               
            $("#load_car").remove();
            $("#res-form-del-prod").html("Ha ocurrido un error en el sistema");
        },
        success: function (data) {                
            $("#load_car").remove();
            $(".file-car").remove();
            var columns = '';
            var total = 0;
            
            if(data.message){
                for(var i = 0; i < data.message.length; i++){
                    columns += '<tr class="file-car file-item-car_'+data.message[i].codigo+'">';
                        columns += '<td>'+data.message[i].nombre+'</td>';
                        columns += '<td>'+formatNumber(data.message[i].precio)+'</td>';
                        columns += '<td><button value="'+data.message[i].codigo+'" class="btn btn-danger btn-sm carDelete"><i class="fa fa-trash"></i>&nbsp; Eliminar</button>';
                    columns += '</tr>';
                    total = parseInt(total) + parseInt(data.message[i].precio);
                }
                columns += '<tr class="file-car"><td>Subtotal</td><td>'+formatNumber(total)+'</td></tr>';
            }else{
                columns += '<tr class="file-car">';
                columns += '<td>No hay registros</td>';
                columns += '<td></td>';
                columns += '<td></td>';
                columns += '</tr>';                    
            }
                            
            $(".table-car").html(columns);
            $(".carDelete").click(function(){
                var dataInfo = $(this).val();                    
                $('.file-item-car_'+dataInfo).remove();
                carUpdateShop(dataInfo, true);
            });
        }
    });
};

$(document).ready(function() {

    $(".carrito-button-nav").click(function(){
        $("#carrito-compras-tienda").append('<div id="load_car">Cargando <br><img src="assets/img/enviando.gif" class="center-all-contens"></div>');
        $("#container-carrito-compras").animate({height: 'toggle'},200);
        carLoadShop(localStorage.getItem('carShoping'));
    });                
    
    $(".botonCarrito").click(function(){        
        var dataInfo = $(this).val();   
        carUpdateShop(dataInfo, false);        
    });
    
    $(".carDelete").click(function(){
        $(".carDelete").remove();
        $(".btn").attr("disabled", true);
        var dataInfo = ($(this).val() != '') ? $(this).val() : $(this).data('cod');
        var iteration = $(this).data('iteration');        
        $('.message').show();
        $('.message').html('Cargando....<br><img src="assets/img/loading.gif" class="center-all-contens">');
        $('.prod_'+iteration).remove();
        carUpdateShop(dataInfo, true);
        location.reload();
    });
    
    $('.productImg').click(function(e){
        e.preventDefault();
        var data = $(this).data('img');
        loadImages (data);            
        //return false;
    });
    
    

});
