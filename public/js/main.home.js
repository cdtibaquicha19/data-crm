/*
*
* SEO 202206
* Luis Arellano
* reducir al minimo requerido el Main
* separar por modulos o clases
* 04-07-2022
* modulo original main.js
*
*/
var url_app = detect_platform();
$(document).ready(function () {
    $("#flagIsOld").val(0);
    var settings = {
        key_site_captcha: '6LdGdPkaAAAAAICNuY4FEbRr0tAkDg9I_CgSI3Cf',
    };
    var url_domain = '';
    if (window.location.hostname == 'pruebas.datacrm.la') {
        url_domain = 'https://pruebas.datacrm.la/mrivera/webpage/public/';
    } else {
        url_domain = 'https://www.datacrm.com/';
    }

    //
    // blog.blade.php
    // detail.blade.php
    // 

    if ($('#items').length > 0) {
        
        var itemList = [];
        var items = $('#items').attr('data');
    
        
        var json;
        json = JSON.parse(items);
        // json = JSON.parse('{!! $itemsSearch !!}')
        for (var i in json) {
            itemList.push(i);
        }

        $('#search').autocomplete({
            source: itemList,
            select: function (e, ui) {
                if (ui.item.value) {
                    location = json[ui.item.value];
                }
            },
            response: function (event, ui) {
                if (ui.content.length === 0) {
                    var noResult = { value: "", label: "No hay resultados relacionados" };
                    ui.content.push(noResult);
                }
            }
        });
    }

    //Cargar por defecto los precios del pai­s actual

    var country;
    var countryCode = $('#countryCode').val();
    country = (countryCode) ? countryCode : $("#country").val();
    country = country ? country : 'co';

    //Funcion para capturar buyer_name y documento_identidad y rellenar nombre y nit en formPagos
    $("#telefono").on('change', function () {
        var phone = $(this).val();
        $("#phone").val(phone);
    });

    $("#ciudad").on('change', function () {
        var city = $(this).val();
        $("#city").val(city);
    });

    $("#usuarios").on('change', function () {
        var user = $(this).val();
        $("#user").val(user);
    });

    $("#nombre").on('change', function () {
        var name = $(this).val();
        $("#name").val(name);
    });


    $(".average_sale").on('change', function () {
        var average_sale = $(this).val();
        $("#average_sale").val(average_sale);
    });
    

    $("#buyer_name").on('change', function () {
        var buyer = $(this).val();
        $("#nombre").val(buyer);
    });

    $("#check_db_capacity").on("change", function () {
        $("#usuariosPayu").trigger("change");
    });

    $("#check_docs_capacity").on("change", function () {
        $("#usuariosPayu").trigger("change");
    });

    $("#check_accompaniment").on("change", function () {
        $("#usuariosPayu").trigger("change");
    });

    window.addEventListener("resize", resize);    
    window.addEventListener("load", resize);

});

number_format = function (number, decimals, dec_point, thousands_sep) {
    number = number.toFixed(decimals);

    var nstr = number.toString();
    nstr += '';
    x = nstr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? dec_point + x[1] : '';
    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

    return x1 + x2;
}

function resize() {
    let  miOperacion = jQuery('#captchaNumberOne').val() + " + " + jQuery('#captchaNumberTwo').val();

    if ($(window).width() <= 425) {
        jQuery('.titlePagoModal').css('font-size', '1.2rem');
        jQuery('.radioPagos').css('text-align', 'left');
        jQuery("#formPagos div.col-6").each(function () {
            $(this).addClass('col-12');
        });
        jQuery('#captcha').attr("placeholder","Resuelve " + miOperacion);
    } else {
        jQuery('.titlePagoModal').css('font-size', '2rem');
        jQuery('.radioPagos').css('text-align', 'center');
        jQuery("#formPagos div.col-6").each(function () {
            $(this).removeClass('col-12');
        });
        // jQuery('#captcha').attr("placeholder","Resuelve la operación matemática " + miOperacion);

    }
}

function isFloat(valor) {
    if (!/^([0-9])*[,]?[0-9]*$/.test(valor)) {
        return true;
    } else {
        return false;
    }
}

function isMobile() {
    if ($("#flag_crm").length) window.location = $('#flag_crm').val();
}

function detect_platform() {
    userAgent = navigator.userAgent || navigator.vendor || window.opera;
    url_app = null;
    if (/android/i.test(userAgent)) {
        url_app = "https://play.google.com/store/apps/details?id=com.datacrm.application";
    }

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        url_app = "https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8";
    }
    $("#descarga_app").attr("href", url_app ? url_app : '');
    return url_app;
}

function cambiar_idioma(e) {
    window.location = e.target.value;
}

function validationTokenCaptcha(token) {
    $("#tokenCaptcha").val(token);
    $("#popup_1.modalDemo").submit();
}