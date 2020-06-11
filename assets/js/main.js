$(document).ready(function () {
    $("#navbar-auto-hidden").autoHidingNavbar();
    $(".button-mobile-menu").click(function () {
        $("#mobile-menu-list").animate({width: 'toggle'}, 200);
    });
    $('.all-elements-tooltip').tooltip('hide');


    $('#modal-form-login form').submit(function (e) {
        e.preventDefault();
        var informacion = $('#modal-form-login form').serialize();
        var metodo = $('#modal-form-login form').attr('method');
        var peticion = $('#modal-form-login form').attr('action');

    });

    /*Funcion para enviar datos de formularios con ajax*/
    $('.FormCatElec').submit(function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        var type = $(this).attr('method');
        var url = $(this).attr('action');
        var formType = $(this).attr('data-form');
        jQuery('.error').hide();
        jQuery(".ResFormL").html('');
        jQuery(".ResForm").html('');
        if (formType == "login") {
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function () {
                    $(".ResFormL").html('Iniciando sesión<br><img src="assets/img/loading.gif" class="center-all-contens">');
                },
                error: function () {
                    $(".ResFormL").html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    if (data.error) {
                        jQuery('.error').show();
                        jQuery('.ResFormL').html(data.error);
                    } else {
                        $(".ResFormL").html(data.message + '<br><img src="assets/img/loading.gif" class="center-all-contens">');
                        window.location = '/';
                    }
                }
            });
            return false;
        } else {
            $.ajax({
                type: type,
                url: url,
                data: data,
                beforeSend: function () {
                    $(".ResForm").html('Procesando... <br><img src="assets/img/enviando.gif" class="center-all-contens">');
                },
                error: function () {
                    $(".ResForm").html("Ha ocurrido un error en el sistema");
                },
                success: function (data) {
                    if (data.error) {
                        jQuery('.error').show();
                        jQuery('.ResForm').html(data.error);
                    } else {
                        $(".ResForm").html(data.message + '<br><img src="assets/img/loading.gif" class="center-all-contens">');
                        window.location = '/';
                    }
                }
            });
            return false;
        }


    });

    if ($('#cont_info').length > 0) {
        $('#cont_info').trumbowyg({
            btnsDef: {
                // Create a new dropdown
                image: {
                    dropdown: ['insertImage', 'upload'],
                    ico: 'insertImage'
                },
            },
            // Redefine the button pane
            btns: [
                ['viewHTML'],
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['image'], // Our fresh created dropdown
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ],
            plugins: {
                // Add imagur parameters to upload plugin for demo purposes
                upload: {
                    serverPath: baseUrl + 'crear-contenidos',
                    fileFieldName: 'image',
                    urlPropertyName: 'url'
                }
            }
        });
    }

});
