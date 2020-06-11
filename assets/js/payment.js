$(document).ready(function () {
    if ($("#formpayment").length > 0) {
        $('[name^="PD[type]"]').val('p2p');
        $("#formpayment").validate({
            rules: {
                PD_first_name: {
                    required: true,
                    noSpecials: true,
                },
                PD_doc_num: {
                    required: true,
                    noSpecials: true,
                    documentFormat: '[name^="PD_doc_type"]'
                },
                PD_card_num: {
                    required: true,
                    minlength: 13,
                    maxlength: 19,
                    creditCard: '[name^="PD_franquise"]',
                    validCardNumber: true
                },
                PD_card_code: {
                    required: true,
                    number: true,
                    noSpecials: true,
                    securityCode: '[name^="PD_franquise"]'
                },
                PD_email: {
                    required: true,
                    trueEmail: true
                },
                PD_address: {
                    required: true,
                    noSpecialsAddress: true,
                    maxlength: 80
                },
                PD_exp_month: {
                    required: true,                    
                    CCExp: {
                        month: '#PD_exp_month',
                        year: '#PD_exp_year'
                    }
                }
                , PD_phone: {
                    required: true,
                    number: true,
                    noSpecials: true,
                    minlength: 4,
                    maxlength: 13
                }
            }
        });
                        
        $('[name^="PD_franquise"]').on('change', function () {
            if ($('[name^="PD_card_num"]').val() != '') {
                $('[name^="PD_card_num"]').valid();
            }
            if ($('[name^="PD_card_code"]').val() != '') {
                $('[name^="PD_card_code"]').valid();
            }
        });

        $('[name^="PD_exp_year"]').on('change', function () {
            $('[name^="PD_exp_month"]').valid();
        });



        $('#_submitPayment').click(function (e) {
            if ($("#formpayment").valid()) {
                $('#formpayment').submit();
            } else {
                console.log("No valid");
            }
            return false;
        });
        
        $.validator.messages.required = "Este campo es obligatorio.";

        $.validator.addMethod("specialChars", function (value, element) {
            var regex = new RegExp("^[a-zA-Z0-9]+$");
            var key = value;

            if (!regex.test(key)) {
                return false;
            }
            return true;
        }, "Por favor ingresa los datos como aparecen en tu tarjeta");
        
        $.validator.addMethod("trueEmail", function (value, element) {
            return this.optional(element) || /^(?:[\w\-]+\.?)+[\w\-]@(?:[\w\-]+\.?)*[\w\-](?:\.[a-z]{2,}){1,2}$/i.test(value);
        }, "Por favor, escribe una dirección de correo válida");

        $.validator.addMethod("alphanumericCardNames", function (value, element) {
            return this.optional(element) || /^\w+$/i.test(value.replace(" ", ""));
        }, "Por favor ingresa los datos como aparecen en tu tarjeta");

        $.validator.addMethod("notNumber", function (value, element, param) {
            var reg = /[0-9]/;
            if (reg.test(value)) {
                return false;
            } else {
                return true;
            }
        }, "No son permitidos n&uacute;meros.");

        $.validator.addMethod("noSpecials", function (value, element) {
            return this.optional(element) || /^\w+$/i.test(value.replace(/\s/g, ""));
        }, "Por favor ingresa tus datos sin caracteres especiales");

        $.validator.addMethod("noSpecialsAddress", function (value, element) {
            return this.optional(element) || /^\w+$/i.test(value.replace(/\ /g, ""));
        }, "Por favor ingresa tus datos sin caracteres especiales");

        $.validator.addMethod("noSpecialsEmail", function (value, element) {
            return this.optional(element) || /^\w+$/i.test(value.replace(/\ |@|\.|\-/g, ""));
        }, "Por favor ingresa tus datos sin caracteres especiales");

        $.validator.addMethod("documentFormat", function (value, element, param) {
            switch ($(param).val()) {
                case "CC":
                    return this.optional(element) || /^[1-9]\d{4,9}$/i.test(value);
                    break;
                case "NIT":
                    return this.optional(element) || /^[1-9]\d{6,8}\d?$/i.test(value);
                    break;
                case "NT":
                    return this.optional(element) || /^[1-9]\d{9}$/i.test(value);
                    break;
                case "LI":
                case "PPS":
                case "PS":
                    return this.optional(element) || /^\w{4,12}$/i.test(value);
                    break;
                case "CE":
                    return this.optional(element) || /^[a-zA-Z]*[1-9]\d{3,7}$/i.test(value);
                    break;
                case "TI":
                    return this.optional(element) || /^\d{2}[0-1][0-9][0-3][0-9]\d{5}$/i.test(value);
                    break;
                default:
                    return true;
                    break;
            }
        }, "El formato del documento no corresponde");
        $.validator.addMethod("documentFormat2", function (value, element, param) {
            switch ($(param).val()) {
                case "NT":
                    return this.optional(element) || /^[1-9]\d{9}$/i.test(value);
                    break;
                default:
                    return true;
                    break;
            }
        }, "El nit debe tener digito de verificación");
        
        $.validator.addMethod('CCExp', function (value, element, params) {
            var minMonth = new Date().getMonth() + 1;
            var minYear = new Date().getFullYear();
            var month = parseInt($(params.month).val(), 10);
            var year = parseInt($(params.year).val(), 10);

            return (!month || !year || year > minYear || (year === minYear && month >= minMonth));
        }, 'La fecha de expiracion no es valida.');

        $.validator.addMethod("creditCard", function (value, element, param) {
            switch ($(param).val()) {
                case "AM":
                    return this.optional(element) || /^3[47][0-9]{13}$/i.test(value);
                    break;
                case "DN":
                    return this.optional(element) || /^3(0[0-5]|[68][0-9])[0-9]{11,13}$/i.test(value);
                    break;
                case "VS":
                    return this.optional(element) || /^4([0-9]{12}|[0-9]{15})$/i.test(value);
                    break;
                case "MC":
                    return this.optional(element) || /^5[1-5][0-9]{14}$/i.test(value);
                    break;
                default:
                    return true;
                    break;
            }
        }, "El número de la tarjeta no corresponde a la franquicia");

        $.validator.addMethod("validCardNumber", function (value, element) {
            if (value.length == 0)
                return false;
            var numexpr = new RegExp("^[0-9]{13,19}\$");
            if (!value.match(numexpr))
                return false;
            var sum = 0,
                    mul = 1;
            var l = value.length;
            for (var i = 0; i < l; i++) {
                var digit = value.substring(l - i - 1, l - i);
                var tproduct = parseInt(digit, 10) * mul;
                if (tproduct >= 10)
                    sum += (tproduct % 10) + 1;
                else
                    sum += tproduct;
                if (mul == 1)
                    mul++;
                else
                    mul--;
            }
            return ((sum % 10) == 0);
        }, "Número de tarjeta de crédito no es válida");

        $.validator.addMethod("initialCreditCardNumber", function (value, element, param) {
            switch ($(param).val()) {
                case "AM":
                    return this.optional(element) || /^[3]\d/i.test(value);
                    break;
                case "DN":
                    return this.optional(element) || /^[3]\d/i.test(value);
                    break;
                case "VS":
                    return this.optional(element) || /^[4]\d/i.test(value);
                    break;
                case "MC":
                    return this.optional(element) || /^[5]\d/i.test(value);
                    break;
                default:
                    return true;
                    break;
            }
        }, "El número de la tarjeta no corresponde a la franquicia");

        $.validator.addMethod("ajaxAutocomplete", function (value, element) {
            var id = $(element).attr('id').replace('Validate', '');
            if (($("#" + id).val() == '') || (value.indexOf("(" + $("#" + id).val() + ")") < 0)) {
                return false;
            } else {
                return true;
            }
        }, "Debe seleccionar una opción de la lista");        

        $.validator.addMethod("securityCode", function (value, element, param) {
            switch ($(param).val()) {
                case "AM":
                    return this.optional(element) || /^[0-9]\d{3}$/i.test(value);
                    break;
                case "":
                    return true;
                    break;
                default:
                    return this.optional(element) || /^[0-9]\d{2}$/i.test(value);
                    break;
            }
        }, "Longitud del código de seguridad incorrecto");

        $.validator.addMethod("notRepeated", function (value, element) {
            var prefix = $(element).attr('id').split('doc_num');
            var compares = $('[id^="' + prefix[0] + 'doc_num"]');
            for (var i = 0; i < compares.length; i++) {
                if (($(compares[i]).val() == value) && ($(compares[i]).attr('id') != prefix[0] + "doc_num" + prefix[1])) {
                    return false;
                }
            }
            return true;
        }, "No se pueden repetir documentos");

        $.validator.addMethod("gdsMaxLength", function (value, element, param) {
            var totalLength = 1 + value.length + $(param[0]).val().length;
            if (totalLength > param[1]) {
                $(param[0]).addClass('error');
                return false;
            } else {
                if ($(element).hasClass('error')) {
                    $(element).removeClass('error');
                    $(param[0]).removeClass('error');
                    $(param[0]).valid();
                }
                return true;
            }
        }, $.validator.format("Ha superado el máximo de {1} caractéres entre nombre y apellido del pasajero. Podrá¡ reducirla usando unicamente el primer nombre y el primer apellido como en el documento de viaje."));
        
        

    }
});

