
jQuery(document).ready(function () {
    $('#store-links a:first').tab('show');
    calcPrice();
    if ($('#formorder').length > 0) {
        $("#formorder").validate({
            rules: {
                cant_prod: {
                    required: true,
                    number: true,
                    min: 1
                }
            }
        });

        $('.cant_prod').blur(function () {            
            calcPrice();
        });                

    }
    
    function calcPrice(){                  
        var total = 0;        
        var price = 0;                            
        
        $('.cant_prod').each(function () {
            if(!isNaN($(this).val()) && $(this).val() != '') {
                price = parseInt($(this).val()) * parseInt($(this).data('price'));
            }            
            var iteration = $(this).attr('id').split('_');            
            $('#cant_prod_price_'+iteration[2]).text(formatNumber(price)); 
            if(!isNaN($(this).val()) && $(this).val() != '') {
                total = parseInt(total) + (parseInt($(this).val()) * parseInt($(this).data('price')));
            }
        });

        $('#cant_total_price').text(formatNumber(total));
    }
    
    function formatNumber(num) {
        return "$ "+num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
    }
        
});


