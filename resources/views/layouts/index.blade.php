<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.datacrm.com/front/images/favicon.ico">
    <title>CRM Móvil para la administración de ventas</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome') }}" rel="stylesheet">

    <meta name="description"
        content="Accede desde tu móvil a toda la información de tus clientes y contáctalos rápidamente con nuestra App de CRM para Android y iOS ¡Descárgala!">
    <meta property="og:locale" content="es_ES">
    <meta property="og:type" content="article">
    <meta property="og:title" content="CRM Móvil para la administración de ventas">
    <meta property="og:description"
        content="Accede desde tu móvil a toda la información de tus clientes y contáctalos rápidamente con nuestra App de CRM para Android y iOS ¡Descárgala!">
    <meta property="og:url" content="https://www.datacrm.com/crm-movil/">
    <meta property="og:site_name" content="$site[&#39;mobile_title_meta&#39;] ?? &#39;&#39;">
    <meta property="og:image" content="https://www.datacrm.com/front/images/miniaturas/CRM_Movil.webp">
    <meta property="og:image:alt" content="CRM Móvil para la administración de ventas">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
        content="Accede desde tu móvil a toda la información de tus clientes y contáctalos rápidamente con nuestra App de CRM para Android y iOS ¡Descárgala!">
    <meta name="twitter:title" content="CRM Móvil para la administración de ventas">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
<body>

    <div class="container-fluid" style="margin: 0px; padding: 0px;">
        <!-- mobile -->

        <div id="mySidenav" class="sidenav text-center">
            <nav class="home-background  navbar navbar-expand-lg navbar-light bg-dark"
                style="display: flex !important; padding-left: 0px !important">
                <div class="d-inline-block" style="margin-top: 10px !important;">
                    <button class="navbar-toggler d-lg-none d-inline-block txt-white" onclick="closeNav()"
                        style="border-style: none;">
                        <i class="fas fa-times fa-x" style="font-size: 25px;"></i>
                    </button>
                    <a href="https://www.datacrm.com/">
                        <picture>
                            <source media="(min-width: 100px)"
                                srcset="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}">
                            <img src="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}" alt="DataCRM"
                                width="60%" height="58" class="img-logo img-fluid" loading="lazy"
                                style="margin-bottom: 10px !important;">
                        </picture>
                    </a>
                </div>
                <!--
                <button class="modalPruebaGratis btn btn-outline-light myNavbarFont mr-1" data-toggle="modal" data-target="#modalPruebaGratis" >
                    <b>Prueba Gratisdddd</b>
                </button>
                -->
            </nav>
            <div class="row pt-3">
                <div class="wrapper-menu">
                    <ul class="mainMenu myItem">
                        <li class="item">
                            <a class="btn test" data-toggle="collapse"
                                href="https://www.datacrm.com/crm-movil/#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample" style=" font-weight: 500;">
                                Productos
                                <i class="fa-solid fa-chevron-down myIcon" aria-hidden="true" style="float: right;"></i>
                            </a>
                            <script>
                                var myLink = $('.test');
                                myLink.on('click', function() {
                                    $('.myIcon').toggleClass("fa-chevron-down");
                                    $('.myIcon').toggleClass("fa-chevron-up", true);
                                });
                            </script>
                            <div class="collapse" id="collapseExample">
                                <ul class="nav text-left myItem2" style="padding-left: 5px;">
                                    <li class="nav-item "><a class="nav-link txt-black"
                                            href="https://www.datacrm.com/software-crm">Software CRM</a></li>
                                    <li class="nav-item "><a class="nav-link txt-black"
                                            href="https://www.datacrm.com/sector">CRM por Sector</a></li>
                                    <li class="nav-item "><a class="nav-link txt-black"
                                            href="https://www.datacrm.com/crm-movil">CRM Móvil</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="item">
                            <a href="https://www.datacrm.com/precios/" class="btn">Planes</a>
                        </li>
                        <li class="item">
                            <a href="https://www.datacrm.com/contactenos/" class="btn">Contáctanos</a>
                        </li>
                        <li class="item">
                            <a href="https://www.datacrm.com/partners/" class="btn">Partners</a>
                        </li>
                        <li class="item">
                            <a href="https://ayuda.datacrm.com/" target="_blank" class="btn">Centro de Ayuda</a>
                        </li>
                        <li class="item">
                            <a href="https://www.datacrm.com/udatacrm/" target="_blank" class="btn">U. DataCRM</a>
                        </li>

                        <li class="item">
                            <a href="https://www.datacrm.com/crm-movil/#"
                                class="modalPruebaGratis3 btn  myNavbarFont mr-1 btnspecial btn-orange"
                                data-toggle="modal" data-target="#modalPruebaGratis3"
                                style="background-color: #f58756;">
                                <strong>Prueba Gratis</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <a class="typ-os-regular txt-blackgray myNavbarFont" href="https://www.datacrm.com/iniciar-sesion"
                        style=" font-weight: 500;">

                        Iniciar sesión
                    </a>
                </div>
            </div>

        </div>



        <div class="home-background " style="width: 100%; height:4.5rem; position: fixed; z-index: 1000;">

            <nav class="navbar navbar-expand-md px-5 py-1 navbar-fixed mobile-nav justify-content-between">
                <div class="d-md-inline-block ">
                    <button class="navbar-toggler d-lg-none mr-3 d-inline-block" onclick="openNav()">
                        <!-- <img src="https://www.datacrm.com/front/images/barswhite 44x34.webp" alt="barswhite" width="44" height="34"> -->
                        <img src="{{ asset('images/barswhite66x49.webp') }}" class="img-fluid" alt="barswhite"
                            width="46" height="29">
                    </button>

                    <div class=" d-none d-lg-block">
                        <a href="https://www.datacrm.com/">
                            <picture>
                                <!-- <source srcset="https://www.datacrm.com/front/images/Logodata_Horizontalblanco180x58.png"> -->
                                <img src="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}" alt="DataCRM"
                                    width="180" height="58" class="img-logo" loading="lazy">
                            </picture>
                        </a>
                    </div>
                    <div class="d-sd-block d-lg-none" style="float: right;">
                        <a href="https://www.datacrm.com/">
                            <picture>
                                <img src="{{ asset('images/Logodata_Horizontalblanco210x65.webp') }}" alt="DataCRM"
                                    width="140" height="38" class="img-logo mt-2" loading="lazy"
                                    style="width: 120px !important;">
                            </picture>
                        </a>
                    </div>
                </div>

                <ul class="navbar-nav ">
                    <li class="nav-item typ-montserrat">

                        <a class="text-white text-decoration-n mx-2  myNavbarFont " id="navele01"
                            href="https://www.datacrm.com/software-crm/" style="font-weight: bold;">
                            Software CRM
                        </a>

                        <a class="text-white text-decoration-n mx-2  myNavbarFont " id="navele02"
                            href="https://www.datacrm.com/precios/" style="font-weight: bold;">
                            Planes
                        </a>

                        <a class="text-white text-decoration-n mx-2  myNavbarFont "
                            href="https://www.datacrm.com/contactenos/" style="font-weight: bold;">
                            Contáctanos
                        </a>
                        <button
                            class="modalPruebaGratis3
                            btn
                            btn-typea
                            mx-2
                            myNavbarFont
                            myButtonNav
                            btn-sm
                            btn-free"
                            data-toggle="modal" data-target="#modalPruebaGratis3" style="color: #FF884D;">
                            <b>Prueba Gratis</b>
                        </button>

                        <a class="btn txt-white mx-2 myNavbarFont" href="https://www.datacrm.com/iniciar-sesion/"
                            style="font-weight: bold;">
                            <i class="fa-regular fa-circle-user"></i> Acceder
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="container p-0  pt-3">
            <div class="row mt-5 section-resize section-init-movil">
                <div class="col-lg-8 col-md-8 col-12 pt-4 section-init-movil-child">

                    <h1 class="text-uppercase mt-5 pt-5 myTitleBlue typ-montserrat fs-h2">
                        Software CRM móvil
                    </h1>
                    <h2 class="typ-os-regular  f-sz-sm mt-4">
                        <b>¡Información actualizada con DataCRM a donde vayas!</b>
                    </h2>
                    <p class="typ-os-regular txt-black f-sz-sm mt-4">
                        Trabaja remotamente con un sencillo diseño pensado para ayudar a tus tareas básicas diarias sin
                        necesidad de estar frente al escritorio.
                    </p>

                    <p class="typ-os-regular txt-black f-sz-sm mt-2">
                        Ten a la mano la información de tus contactos, realiza actividades y gestiona tus negocios desde
                        el celular en cualquier lugar con nuestra Aplicación móvil.
                    </p>

                    <p class="typ-os-regular txt-black f-sz-m mt-2">
                        ¡Descárgala Ahora!
                    </p>
                    <div class="row">
                        <div class="col-12 text-md-left">
                            <div class="row">
                                <div class="col-12 text-sm-left">
                                    <a href="https://play.google.com/store/apps/details?id=com.datacrm.application"
                                        target="_blank">
                                        <picture>
                                            <source type="image/webp"
                                                data-srcset="{{ asset('images/home_banner_app_playstore.webp') }}"
                                                srcset="{{ asset('images/home_banner_app_playstore.webp') }}">
                                            <img data-src="{{ asset('images/home_banner_app_playstore.webp') }}"
                                                alt="play store" width="150" height="60"
                                                class="effect-zoom ml-md-2 my-1 img-fluid lazyloaded" id="myImg"
                                                src="{{ asset('images/home_banner_app_playstore.webp') }}">
                                        </picture>
                                    </a>
                                    <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8"
                                        target="_blank" class="ml-3">
                                        <picture>
                                            <source type="image/webp"
                                                data-srcset="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp"
                                                srcset="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp">
                                            <img data-src="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp"
                                                alt="istore" width="150" height="60"
                                                class="effect-zoom mr-md-2 my-1 img-fluid lazyloaded" id="myImg"
                                                src="./CRM Móvil para la administración de ventas_files/home_banner_app_appstore.webp">
                                        </picture>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5 ">
                    <picture>
                        <source type="image/webp"
                            srcset="https://www.datacrm.com/front/images/mobile/mejor_app_de_CRM.webp">
                        <img src="./CRM Móvil para la administración de ventas_files/mejor_app_de_CRM.webp"
                            alt="mejor_app_de_CRM" width="418" height="520" class="img-fluid center-img"
                            style="margin-top: 40px;">
                    </picture>
                </div>
            </div>

        </div>
        <!-- negocios -->
        <div class="myDivBlue1 myDivDiagonalLeftA">
            <div class="container p-0   section-resize mt-5  myDivDiagonalLeftB">

                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
                        <h2 class="mt-5 txt-white  ft-h2 br-wd typ-montserrat myTitleWhite">
                            <span class="span-border-b-w">
                                Negocios
                            </span>
                        </h2>
                        <p class="typ-os-regular txt-white f-sz-m mt-3">
                            Lleva el control de tus negocios consolidados por fases de venta,&nbsp; haz el respectivo
                            seguimiento&nbsp; utilizando las herramientas que te brinda la App y gana más ventas.
                        </p>
                        <button
                            class="modalPruebaGratis3 btn btn-orange text-uppercase f-sz-m my-3 p-2 px-4 effect-zoom"
                            data-toggle="modal" data-target="#modalPruebaGratis3">
                            <b>Prueba esta funcionalidad</b>
                        </button>
                        <div class="space"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 order-1 order-lg-2" style="aling:center">
                        <picture>
                            <source type="image/webp"
                                srcset="https://www.datacrm.com/front/images/mobile/aplicacion_de_CRM_movil_para_ventas.webp">
                            <source type="image/png"
                                srcset="https://www.datacrm.com/front/images/mobile/aplicacion_de_CRM_movil_para_ventas.webp">
                            <img src="./CRM Móvil para la administración de ventas_files/aplicacion_de_CRM_movil_para_ventas.webp"
                                alt="aplicacion_de_CRM_movil_para_ventas" width="289" height="443"
                                class="img-fluid">
                        </picture>
                        <div class="space hide-mobile"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- actividades -->

        <div class="container p-0 pb-5 section-resize">
            <div class="row mb-4 mx-5">
                <div class="col-lg-4 col-md-6 col-12 mt-5" style="align=center">
                    <picture>
                        <source type="image/webp"
                            srcset="https://www.datacrm.com/front/images/mobile/Calendario_en_crm_movil.webp">
                        <img src="./CRM Móvil para la administración de ventas_files/Calendario_en_crm_movil.webp"
                            alt="Calendario_en_crm_movil" width="251" height="409" class="img-fluid">
                    </picture>
                </div>
                <div class="col-lg-8 col-md-6 col-12 px-5 text-right">
                    <h2 class=" mt-5 txt-orange  ft-h2 br-wd text-right font-weight-bold">
                        <span class="">Actividades</span>
                    </h2>
                    <p class="typ-os-regular txt-black f-sz-sm my-4">
                        Con DataCRM Móvil, podrás tener el&nbsp; <br>
                        control de tus actividades a donde vayas. <br>
                        &nbsp;Aprovécha los colores de la interfaz &nbsp; <br>
                        y no perderás de vista ninguna llamada, <br>
                        &nbsp;reunión o tarea con tus clientes.
                    </p>
                    <div class="text-right">
                        <a href="https://play.google.com/store/apps/details?id=com.datacrm.application"
                            target="_blank">
                            <picture>
                                <source type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/home/home_banner_app_playstore.webp"
                                    srcset="https://www.datacrm.com/front/images/home/home_banner_app_playstore.webp">
                                <img data-src="https://www.datacrm.com/front/images/home/home_banner_app_playstore.webp"
                                    alt="play store" width="150" height="60"
                                    class="effect-zoom ml-md-2 my-1 img-fluid lazyloaded" id="myImg"
                                    src="./CRM Móvil para la administración de ventas_files/home_banner_app_playstore.webp">
                            </picture>
                        </a>
                        <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank"
                            class="ml-3">
                            <picture>
                                <source type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp"
                                    srcset="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp">
                                <img data-src="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp"
                                    alt="istore" width="150" height="60"
                                    class="effect-zoom mr-md-2 my-1 img-fluid lazyloaded" id="myImg"
                                    src="./CRM Móvil para la administración de ventas_files/home_banner_app_appstore.webp">
                            </picture>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Vista global -->

        <div class="myDivGreen1 myDivDiagonalRightA">
            <div class="container  mt-5 MB-5 section-resize myDivDiagonalRightB" id="">

                <div class="container section-resize p-0">

                    <div class="row mb-4 mx-4">
                        <div class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
                            <h2 class="mt-5 txt-white typ-montserrat ft-h2 br-wd font-weight-bold">
                                <span class="">
                                    Vista global
                                </span>
                            </h2>
                            <p class="typ-os-regular txt-white f-sz-m mt-3">
                                Observa la información de tus Clientes<br>
                                y Contactos desde tu celular. <br>
                                <br>
                                &nbsp;Al ingresar a cada uno de ellos podrás ver&nbsp; <br>
                                en detalle la cronología de todo lo que ha <br>
                                &nbsp;sucedido en el proceso de ventas
                            </p>

                            <button class="modalPruebaGratis3 btn btn-blue f-sz-m my-3 p-2 px-4 effect-zoom"
                                data-toggle="modal" data-target="#modalPruebaGratis3">
                                <b>¡Me interesa!</b>
                            </button>


                            <div class="space"></div>
                            <div class="space"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 order-1 order-lg-2 text-center">

                            <picture>
                                <source type="image/webp"
                                    srcset="https://www.datacrm.com/front/images/mobile/seguimiento_a_clientes_desde_crm_movil.webp">
                                <img src="./CRM Móvil para la administración de ventas_files/seguimiento_a_clientes_desde_crm_movil.webp"
                                    width="347" height="423" alt="seguimiento_a_clientes_desde_crm_movil"
                                    class="img-fluid">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contacto -->

        <div class="container p-0 pb-5 section-resize">
            <div class="row mb-4 mx-5">
                <div class="col-lg-4 col-md-6 col-12 mt-5 ">
                    <picture>
                        <source type="image/webp"
                            srcset="https://www.datacrm.com/front/images/mobile/recordatorios_app_crm.webp">
                        <img src="./CRM Móvil para la administración de ventas_files/recordatorios_app_crm.webp"
                            alt="recordatorios_app_crm" width="237" height="415" class="img-fluid">
                    </picture>
                </div>
                <div class="col-lg-8 col-md-6 col-12 px-5">
                    <div class="space hide-mobile"></div>
                    <h2 class=" mt-5 txt-orange typ-montserrat ft-h2 br-wd text-right font-weight-bold">
                        <span class="">Contacto</span>
                    </h2>
                    <p class="typ-os-regular txt-black f-sz-sm my-4 text-right">
                        Contacta fácilmente a tus clientes, ya sea&nbsp;
                        <br>
                        por llamada, correo o WhatsApp.&nbsp;
                        <br><br>
                        Adjunta documentos, fotografías
                        <br>
                        &nbsp;y añade comentarios a tus
                        <br>
                        negocios de la manera más sencilla
                    </p>
                    <div class="text-right">
                        <a href="https://play.google.com/store/apps/details?id=com.datacrm.application"
                            target="_blank">
                            <picture>
                                <source type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/home/home_banner_app_playstore.webp"
                                    srcset="https://www.datacrm.com/front/images/home/home_banner_app_playstore.webp">
                                <img data-src="https://www.datacrm.com/front/images/home/home_banner_app_playstore.webp"
                                    alt="play store" width="150" height="60"
                                    class="effect-zoom ml-md-2 my-1 img-fluid lazyloaded" id="myImg"
                                    src="./CRM Móvil para la administración de ventas_files/home_banner_app_playstore.webp">
                            </picture>
                        </a>
                        <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank"
                            class="ml-3">
                            <picture>
                                <source type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp"
                                    srcset="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp">
                                <img data-src="https://www.datacrm.com/front/images/home/home_banner_app_appstore.webp"
                                    alt="istore" width="150" height="60"
                                    class="effect-zoom mr-md-2 my-1 img-fluid lazyloaded" id="myImg"
                                    src="./CRM Móvil para la administración de ventas_files/home_banner_app_appstore.webp">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cotizaciones -->

        <div class="myDivBlue1 myDivDiagonalLeftA">
            <div class="container p-0  mt-5  myDivDiagonalLeftB">

                <div class="row mb-4 mx-4">
                    <div class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
                        <h2 class=" mt-5 txt-white ft-h2 br-wd font-weight-bold"><span class="">
                                Cotizaciones
                            </span>
                        </h2>
                        <p class="typ-os-regular txt-white f-sz-m mt-3">
                            Crea cotizaciones desde DataCRM móvil,
                            <br>
                            expórtalas en PDF y envíalas por el canal
                            <br>
                            que desees. ¡Ahorra más tiempo en la
                            <br>
                            &nbsp;gestión de tus ventas con nuestra App!
                        </p>
                        <button class="modalPruebaGratis3 btn btn-orange f-sz-m px-4 my-3 p-2 effect-zoom"
                            data-toggle="modal" data-target="#modalPruebaGratis3">
                            <b>¡Lo necesito!</b>
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 order-1 order-lg-2">
                        <picture>
                            <source type="image/webp"
                                srcset="https://www.datacrm.com/front/images/mobile/cotizador_desde_celular.webp">
                            <img src="./CRM Móvil para la administración de ventas_files/cotizador_desde_celular.webp"
                                alt="cotizador_desde_celular" width="316" height="418" class="img-fluid ">
                        </picture>
                        <div class="space hide-mobile"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- informacion actualizada  -->

        <div class="container p-0 pt-3">
            <div class="row  mt-5 section-resize section-init-movil">
                <div class="col-lg-7 col-md-7 col-12 pt-4 text-center order-2 order-lg-1">
                    <div class="space"></div>
                    <div class="space"></div>
                    <picture>
                        <source type="image/webp"
                            srcset="https://www.datacrm.com/front/images/mobile/tour_crm_movil.webp">
                        <img src="./CRM Móvil para la administración de ventas_files/tour_crm_movil.webp"
                            alt="crm-movil" width="74" height="73" class="img-fluid">
                    </picture>
                    <h2 class="typ-os-regular txt-black ft-h4 mt-4">
                        <b>¿Tienes dudas respecto al funcionamiento de la aplicación móvil?</b>
                    </h2>

                    <p class="typ-os-regular  mt-4" style="font-size: 1.5rem !important">
                        Programemos una presentación
                        <a href="https://api.whatsapp.com/send?phone=+573014765478&amp;text=%C2%A1Hola,%20Alejandra!%20Estaba%20visitando%20su%20sitio%20web%20y%20quisiera%20solicitar%20una%20asesor%C3%ADa"
                            target="_blank">Aqui</a>
                    </p>

                    <div class="space hide-mobile"></div>
                    <div class="space"></div>
                    <hr class="hr-silver">
                </div>
                <div class="col-lg-5 col-md-5 col-12 mt-5 order-1 order-lg-2" style="align=center">
                    <picture>
                        <source type="image/webp"
                            srcset="https://www.datacrm.com/front/images/mobile/crm_para_Android_iOS.webp">
                        <img src="./CRM Móvil para la administración de ventas_files/crm_para_Android_iOS.webp"
                            alt="crm_para_Android_iOS" width="396" height="513" class="img-fluid">
                    </picture>
                </div>
            </div>

        </div>

        <div class="container mt-5" id="myHomeSeccion">

            <div class="row pt-4">

                <div class="col-12 text-center">

                    <h2 class="myTitleBlue  typ-montserrat ft-h2">
                        Un CRM reconocido
                    </h2>

                </div>

                <div class="col-12 text-center">

                    <p class=" mt-5 typ-os-regular  txt-black  f-sz-m-home">
                        Las empresas prefieren DataCRM al ser referente <br> entre los mejores software de CRM en
                        Latinoamérica.
                    </p>

                </div>
                <div class="container">

                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-2 text-center">
                            <picture>
                                <source media="(max-width: 320px)" type="image/webp"
                                    data-srcset="{{ asset('images/El_mejor_CRM_del _año_320x337.webp') }}"
                                    srcset="{{ asset('images/El_mejor_CRM_del _año_320x337.webp') }}">
                                <source media="(min-width: 321px)" type="image/webp"
                                    data-srcset="{{ asset('images/El_mejor_CRM_del _año_320x337.webp') }}"
                                    srcset="{{ asset('images/El_mejor_CRM_del _año_320x337.webp') }}">
                                <img data-src="{{ asset('images/El_mejor_CRM_del _año_320x337.webp') }}"
                                    alt="El_mejor_CRM_del _año" class="img-fluid mt-5 lazyloaded" loading="lazy"
                                    width="150" height="158"
                                    src="{{ asset('images/El_mejor_CRM_del _año_320x337.webp') }}">
                            </picture>
                        </div>
                        <div class="col-sm-2 text-center">
                            <picture>

                                <source type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/reconocido/El_CRM_más_usado.webp"
                                    srcset="https://www.datacrm.com/front/images/reconocido/El_CRM_más_usado.webp">
                                <img data-src="https://www.datacrm.com/front/images/reconocido/El_CRM_más_usado.webp"
                                    alt="El_CRM_más_usado" class="img-fluid mt-5 lazyloaded" loading="lazy"
                                    width="150" height="100"
                                    src="./CRM Móvil para la administración de ventas_files/El_CRM_más_usado.webp">
                            </picture>
                        </div>
                        <div class="col-sm-2 text-center">
                            <picture>
                                <source media="(max-width: 320px)" type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/reconocido/Sistema_CRM_mejor_calificadp_320x286.webp"
                                    srcset="https://www.datacrm.com/front/images/reconocido/Sistema_CRM_mejor_calificadp_320x286.webp">
                                <source media="(min-width: 321px)" type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/reconocido/Sistema_CRM_mejor_calificadp.webp"
                                    srcset="https://www.datacrm.com/front/images/reconocido/Sistema_CRM_mejor_calificadp.webp">
                                <img data-src="https://www.datacrm.com/front/images/reconocido/Sistema_CRM_mejor_calificadp.webp"
                                    alt="Sistema_CRM_mejor_calificadp" class="img-fluid mt-5 lazyloaded"
                                    loading="lazy" width="150" height="134"
                                    src="./CRM Móvil para la administración de ventas_files/Sistema_CRM_mejor_calificadp.webp">
                            </picture>
                        </div>
                        <div class="col-sm-2 text-center">
                            <picture>
                                <source media="(max-width: 320px)" type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/reconocido/El_mejor_sistema_CRM_320x287.webp"
                                    srcset="https://www.datacrm.com/front/images/reconocido/El_mejor_sistema_CRM_320x287.webp">
                                <source media="(min-width: 321px)" type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/reconocido/El_mejor_sistema_CRM.webp"
                                    srcset="https://www.datacrm.com/front/images/reconocido/El_mejor_sistema_CRM.webp">
                                <img data-src="https://www.datacrm.com/front/images/reconocido/El_mejor_sistema_CRM.webp"
                                    alt="El_mejor_sistema_CRM" class="img-fluid mt-5 lazyloaded" loading="lazy"
                                    width="150" height="135"
                                    src="./CRM Móvil para la administración de ventas_files/El_mejor_sistema_CRM.webp">
                            </picture>
                        </div>
                        <div class="col-sm-2 text-center">
                            <picture>
                                <source media="(max-width: 320px)" type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/reconocido/sistema_CRM_líder_320x259.webp"
                                    srcset="https://www.datacrm.com/front/images/reconocido/sistema_CRM_líder_320x259.webp">
                                <source media="(min-width: 321px)" type="image/webp"
                                    data-srcset="https://www.datacrm.com/front/images/reconocido/sistema_CRM_líder.webp"
                                    srcset="https://www.datacrm.com/front/images/reconocido/sistema_CRM_líder.webp">
                                <img data-src="https://www.datacrm.com/front/images/reconocido/sistema_CRM_líder.webp"
                                    alt="sistema_CRM_líder" class="img-fluid mt-5 lazyloaded" loading="lazy"
                                    width="150" height="121"
                                    src="./CRM Móvil para la administración de ventas_files/sistema_CRM_líder.webp">
                            </picture>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="space"></div>

        <div class="container p-0">
            <div class="container pt-5" id="myTestimonialsSeccion2">
                <div class="row justify-content-center section-resize">
                    <div class="row">
                        <div class="col-12">
                            <h2
                                class="mt-3 typ-montserrat  myTitleBlue ft-h2 justify-content-center text-center align-items-center ">
                                ¿Por qué las empresas en Latinoamérica nos prefieren?
                            </h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">

                        <div class="col-10 col-lg-4 mt-4">
                            <div class="myText">
                                <p class="col-12 txt-gray typ-os-regular mt-4 text-left ">
                                    <i class="fa-sharp fa-solid fa-quote-left myQuoteLeft"></i> La organización y
                                    control es de vital importancia para Infórmese y es precisamente aquí donde DataCRM
                                    proporciona una potente solución, gracias a sus indicadores gerenciales
                                    personalizados y a la posibilidad de generar reportes confiables, precisos y
                                    rápidos.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="{{ asset('images/informese_caso-exito-datacrm-121x60.webp') }}">
                                        <img src="{{ asset('images/informese_caso-exito-datacrm-121x60.webp') }}"
                                            alt="Informese" width="121" height="60"
                                            class="my-2 img-fluid center-img  sombraDerecha ls-is-cached lazyloaded"
                                            loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-6 text-left">
                                    <p>
                                        <b>Sergio Gutiérrez</b> <br>Gerente
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-10 col-lg-4 mt-4">
                            <div class="myText">
                                <p class="col-12 txt-gray typ-os-regular mt-4 text-left ">
                                    <i class="fa-sharp fa-solid fa-quote-left myQuoteLeft"></i> Para Vibra es de gran
                                    importancia la organización del área de ventas, al dar respuestas más rápidas y
                                    eficientes a sus prospectos, logrando mayores cierres en el mes. Igualmente,
                                    ayudamos a la atención oportuna de sus clientes, categorizando las peticiones,
                                    quejas y reclamos mediante el área de servicio al cliente.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="https://www.datacrm.com/front/images/radiopolis_caso exito datacrm 113x56.webp">
                                        <img src="./CRM Móvil para la administración de ventas_files/radiopolis_caso exito datacrm 113x56.png"
                                            alt="Radiopolis" width="121" height="60"
                                            class="my-2 img-fluid center-img  sombraDerecha ls-is-cached lazyloaded"
                                            loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-6 text-left">
                                    <p class="">
                                        <br>Gerente Comercial
                                    </p>

                                </div>
                            </div>
                        </div>


                        <div class="col-10 col-lg-4 mt-4">
                            <div class="myText">
                                <p class="col-12 txt-gray typ-os-regular mt-4 text-left ">
                                    <i class="fa-sharp fa-solid fa-quote-left myQuoteLeft"></i> La herramienta fue
                                    diseñada para nuestro proceso. Lo recomiendo porque da la facilidad de adaptar todos
                                    los procesos a la herramienta y mejorar el seguimiento a cada uno de los
                                    comerciales. Nos ha ayudado a mejorar la gestión con los clientes.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="https://www.datacrm.com/front/images/Toxement_caso exito datacrm 121x60.webp">
                                        <img src="./CRM Móvil para la administración de ventas_files/Toxement_caso exito datacrm 121x60.png"
                                            alt="Radiopolis" width="121" height="60"
                                            class="my-2 img-fluid center-img  sombraDerecha ls-is-cached lazyloaded"
                                            loading="lazy">
                                    </picture>
                                </div>
                                <div class="col-6 text-left">
                                    <p class="">
                                        <b>Marcela Quimbayo</b> <br>Analista Comercial
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>



                <div class="row justify-content-center">

                    <div class="col-md-5 col-12  text-center text-wrap">

                        <button
                            onclick="window.open(&#39;https://www.youtube.com/watch?v=cUdjkC3ttwc&amp;list=PLZoqtUmy_3owJFjAsUAvyWIlwww-HsPWp&amp;index=10&#39;, &#39;_blank&#39;)"
                            class="typ-montserrat txt-orange btn f-sz-m myBtnOrangeOutline effect-zoom br-wd myButtonTesttimonial  text-center align-items-center"
                            style="margin-top: 4rem !important">
                            <p class="text-wrap pt-3">
                                <b> Nuestros clientes opinan <i class="fa-brands fa-youtube f-sz-m"></i></b>
                            </p>
                        </button>
                    </div>
                </div>


            </div>

            <div class="row section-resize">
                <div class="col-12 my-2">
                    <hr class="bg-hr">
                </div>
            </div>

            <div class="row pt-2 mb-5 section-resize">
                <div class="container mt-4 p-0" id="myHomeSeccion11">
                    <div class="row pt-2 justify-content-center mb-5 mx-auto">
                        <div class="myHorizontalLine  mt-4"></div>

                        <div class="col-12 text-center px-5 justify-content-center mt-4">
                            <p class=" mt-3 txt-blackgray typ-os-regular  f-sz-m  myBold">
                                ÚNETE A MILES DE USUARIOS EN COLOMBIA, MÉXICO Y TODA LATINOAMÉRICA QUE HAN REVOLUCIONADO
                                LA FORMA EN LA QUE HACEN SUS VENTAS CON <span class="txt-greenblue">DATACRM</span>
                            </p>
                        </div>

                        <div class="myHorizontalLine  mt-4"></div>

                        <div class="col-12 mt-4 text-center">
                            <button href="#"
                                class="btn myBtnBlue typ-montserrat px-4 f-sz-m mt-3 effect-zoom p-2"
                                data-toggle="modal" data-target="#modalPruebaGratis3">
                                <b>¡Lo necesito!</b>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        <footer class="home-background container-fluid mt-5">
            <div class="container">
                <div class="row m-0 pt-5 justify-content-center">
                    <div class="col-lg-2 col-md-12 col-sm-6 col-12 pl-5 div-footer">
                        <a href="https://www.datacrm.com/">

                            <picture>
                                <source type="image/webp"
                                    data-srcset="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}"
                                    srcset="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}">
                                <img src="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}"
                                    alt="DataCRM" class="img-fluid w-100 img-footer-logo lazyloaded" loading="lazy"
                                    width="180" height="58">
                            </picture>
                        </a>

                        <p class="typ-os-regular f-sz-s m-0 mt-4 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/nosotros/" class="txt-white">Nosotros
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/contactenos/" class="txt-white">Contáctanos
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/partners/" class="txt-white">Partners</a>
                        </p>
                    </div>



                    <div class="col-lg-2 col-md-12 col-sm-6 col-12 pl-5 pt-3 div-footer">
                        <p class="txt-white f-sz-sm typ-montserrat myBold">Producto</p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mt-4 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/sector/" class="txt-white">
                                CRM por Sector
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/precios/" class="txt-white">
                                Planes
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mb-2 mb-lg-0 pb-1 pb-lg-1">

                            <a href="https://www.datacrm.com/software-crm/" class="txt-white">
                                Funciones
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mb-2 mb-lg-0 pb-1 pb-lg-1">

                            <a href="https://www.datacrm.com/crm-movil/" class="txt-white">
                                CRM Móvil
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a target="_blank" href="https://api.datacrm.la/?version=latest" class="txt-white">
                                API DataCRM
                            </a>
                        </p>
                    </div>


                    <div class="col-lg-2 col-md-12 col-sm-6 col-12 pl-5 pt-3 div-footer">
                        <p class="txt-white f-sz-sm typ-montserrat myBold">Países</p>
                        <p class="typ-os-regular f-sz-s txt-white mt-4 mb-2 mb-lg-0 pb-1 pb-lg-1">

                            <a href="https://www.datacrm.com/crm-colombia/" class="txt-white">CRM Colombia
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/crm-mexico/" class="txt-white">
                                CRM México
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/crm-chile/" class="txt-white">
                                CRM Chile
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/crm-costarica/" class="txt-white">
                                CRM Costa Rica
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/crm-ecuador/" class="txt-white">
                                CRM Ecuador
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/crm-panama/" class="txt-white">
                                CRM Panamá
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/crm-peru/" class="txt-white">
                                CRM Perú
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/crm-espana/" class="txt-white">
                                CRM España
                            </a>
                        </p>
                    </div>


                    <div class="col-lg-2 col-md-12 col-sm-6 col-12 pl-5 pt-3 div-footer">
                        <p class="txt-white f-sz-sm typ-montserrat myBold">Capacítate</p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mt-4 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://ayuda.datacrm.com/es/" target="_blank" class="txt-white">
                                Centro de Ayuda
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/udatacrm/public/" target="_blank" class="txt-white">
                                U. DataCRM
                            </a>
                        </p>
                        <p class="typ-os-regular f-sz-s txt-white m-0 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/blog/" class="txt-white">Blog
                            </a>
                        </p>
                    </div>

                    <!-- site_apps -->

                    <div class="col-lg-4 col-md-12 col-sm-6 col-12 pl-5 pt-3 div-footer">
                        <p class="txt-white f-sz-sm typ-montserrat myBold">Apps Disponibles</p>
                        <div class="row justify-content-start">
                            <div class="col-12 col-xl-5">
                                <a href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8" target="_blank">
                                    <picture>
                                        <source type="image/webp"
                                            data-srcset="https://www.datacrm.com/front/images/home/app_store_125x37.png"
                                            srcset="https://www.datacrm.com/front/images/home/app_store_125x37.png">
                                        <img src="./CRM Móvil para la administración de ventas_files/app_store_125x37.webp"
                                            alt="Apple Store" width="125" height="37"
                                            class="effect-zoom mr-md-2 my-1 lazyloaded" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                            <div style="margin-top: 5px;" class="col-12 col-xl-5">
                                <a href="https://play.google.com/store/apps/details?id=com.datacrm.application"
                                    target="_blank">
                                    <picture>
                                        <source type="image/webp"
                                            data-srcset="https://www.datacrm.com/front/images/home/play_store_125x37.png"
                                            srcset="https://www.datacrm.com/front/images/home/play_store_125x37.png">
                                        <img src="./CRM Móvil para la administración de ventas_files/play_store_125x37.webp"
                                            alt="Play Store" width="125" height="37"
                                            class="effect-zoom lazyloaded" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <hr class="bg-hr-typea">
                    </div>
                </div>
                <!-- Pie de Pagina -->
                <div>
                    <div class="row d-none d-lg-block">
                        <div class="col-2 my-4" style="display: inline-flex;">
                            <picture>
                                <source type="image/webp"
                                    data-srcset="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}"
                                    srcset="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}">
                                <img src="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}"
                                    alt="Logo Data CRM" width="180" height="58"
                                    class="img-fluid w-100 img-footer-logo lazyloaded" loading="lazy">
                            </picture>
                        </div>
                        <div class="col-7 my-4 px-0 py-0" style="display: inline-flex;">
                            <span class="txt-white f-sz-sx typ-os-regular"> DataCRM Soluciones S.A.S.</span>
                            <span class="txt-greenblue f-sz-sx">/</span>
                            <a href="https://www.datacrm.com/politicas/" class="txt-white f-sz-s typ-os-regular">
                                Política de Protección de Datos
                            </a>
                            <span class="txt-greenblue f-sz-sx">/</span>
                            <a href="https://www.datacrm.com/terminos/" class="txt-white f-sz-s typ-os-regular">
                                Términos y Condiciones
                            </a>
                            <span class="txt-greenbluef-sz-sx">/</span>
                            <a href="https://www.datacrm.com/ans/" class="txt-white f-sz-s typ-os-regular"> ANS </a>
                        </div>
                        <div class="col-2 my-4" style="display: inline-flex;">

                            <a href="https://www.facebook.com/DataCRM.Soluciones/" aria-label="facebook"
                                target="_blank" style="font-size: 0px;">
                                <i class="fa-brands fa-facebook mySocialMediaIcon"></i>
                            </a>
                            <a href="https://www.instagram.com/datacrm_/" aria-label="instagram" target="_blank"
                                style="font-size: 0px;">
                                <i class="fa-brands fa-instagram mySocialMediaIcon"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/datacrm/" aria-label="linkedin" target="_blank"
                                style="font-size: 0px;">
                                <i class="fa-brands fa-linkedin mySocialMediaIcon"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UClTE-HkTpHMkoCvcP-6i2Sw/" aria-label="youtube"
                                target="_blank" style="font-size: 0px;">
                                <i class="fa-brands fa-youtube mySocialMediaIcon"></i>
                            </a>


                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row d-lg-none d-block  pl-4 justify-content-center">
                        <div class="col-12 my-4">
                            <picture>
                                <source type="image/webp"
                                    data-srcset="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}">
                                <img src="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}"
                                    alt="DataCRM" width="180" height="58"
                                    class="img-fluid w-100 img-footer-logo lazyload" loading="lazy">
                            </picture>

                        </div>
                        <div class="col-12 mb-1">
                            <span class="txt-white f-sz-sx typ-os-regular"> DataCRM Soluciones S.A.S.</span>
                        </div>

                        <div class="col-12 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/politicas/" class="txt-white f-sz-s typ-os-regular">
                                Política de Protección de Datos
                            </a>

                        </div>

                        <div class="col-12 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/terminos/" class="txt-white f-sz-s typ-os-regular">
                                Términos y Condiciones
                            </a>
                        </div>

                        <div class="col-12 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <a href="https://www.datacrm.com/ans/" class="txt-white f-sz-s typ-os-regular"> ANS </a>
                        </div>

                        <div class="col-12 my-4 mb-2 mb-lg-0 pb-1 pb-lg-1">
                            <div>
                                <a href="https://www.facebook.com/DataCRM.Soluciones/" aria-label="facebook"
                                    target="_blank">
                                    <i class="fa-brands fa-facebook mySocialMediaIcon"></i>
                                </a>
                                <a href="https://www.instagram.com/datacrm_/" aria-label="instagram" target="_blank">
                                    <i class="fa-brands fa-instagram mySocialMediaIcon"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/datacrm/" aria-label="linkedin"
                                    target="_blank">
                                    <i class="fa-brands fa-linkedin mySocialMediaIcon"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UClTE-HkTpHMkoCvcP-6i2Sw/"
                                    aria-label="youtube" target="_blank">
                                    <i class="fa-brands fa-youtube mySocialMediaIcon"></i>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </footer>



        <script src="{{ asset('js/jQuery.js') }}"></script>


        <div class="modal fade" id="modalPruebaGratis3" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-lg justify-content-center text-center align-items-center" role="document"
                style="max-width: 80rem !important;">
                <div class="modal-content col-12 p-2 mb-2" id="modalcontent1"
                    style=" border-radius: 30px; padding-bottom: 3rem !important;">
                    <div class="modal-header mb-0"
                        style="border: 0px solid rgba(0, 0, 0, 0.2); padding-bottom: 0px; padding-top: 0px;">
                        <button type="button" class="close btn-close btn-close-white" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true" style="font-size: 30px !important;">x</span>
                            <!-- <i class="fas fa-times fa-x" style="font-size: 25px;"></i>   -->
                        </button>
                    </div>

                    <p class="text-center typ-montserrat ft-h3 font-weight-bold txt-greenblue">
                        Genera más negociaciones con DataCRM
                    </p>


                    <p class="text-center m-0 typ-montserrat f-sz-sx txt-gray">
                        Prueba 100% gratis durante 15 días y sin registrar tu tarjeta de crédito
                    </p>
                    <div class="row" style="min-height:2rem;">
                        <div class="col-lg-6">
                            <span class="myinvalid" style="display: none; color: red;">
                                *Diligencia los datos obligatorios
                            </span>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-lg-6 col">

                            <div style="min-height: 80%; max-height: 80%;">
                                <form id="api_popup_demo" class="modalDemo needs-validation"
                                    action="https://www.datacrm.com/crm-movil/" method="POST" novalidate="">
                                    <input type="hidden" name="_token"
                                        value="6u7xG4yUtFAUKtOiDSTVeVHtJtzu4BmtkPQUNYoo">
                                    <input type="hidden" value="" name="ad_gclib" id="ad_gclib">
                                    <div class="alert alert-danger hide" id="errorsFormDemo">
                                        <ul>

                                        </ul>
                                    </div>

                                    <div class="row justify-content-center">
                                        <!-- nombre y apellido -->
                                        <div class="col-12 col-md-10">
                                            <div class="form-group">
                                                <input type="text" name="nombreapellidos" value=""
                                                    id="nombreapellidos"
                                                    class="text-left typ-os-regular txt-gray  f-sz-s form-control myBorderRadius pl-4"
                                                    placeholder="Nombre y apellido" required="">

                                            </div>
                                        </div>

                                        <!-- compañia -->
                                        <div class="col-12 col-md-10" style="aling:left">
                                            <div class="form-group">
                                                <input type="text" name="company" value="" id="company"
                                                    class="text-left typ-os-regular txt-gray f-sz-s pt-0 form-control myBorderRadius pl-4"
                                                    maxlength="40" onkeyup="countChars(this);" placeholder="Compañía"
                                                    required="">
                                            </div>
                                        </div>

                                        <!-- email -->
                                        <div class="col-12 col-md-10">
                                            <div class="form-group">
                                                <input type="text" name="email" value="" id="email"
                                                    class="text-left typ-os-regular txt-gray  form-control f-sz-s myBorderRadius pl-4"
                                                    placeholder="Correo electrónico empresarial" required="">
                                            </div>
                                        </div>

                                        <!-- telefono  -->
                                        <div class="col-12 col-md-10">
                                            <div class="form-group">
                                                <div
                                                    class="iti iti--allow-dropdown iti--separate-dial-code iti--show-flags">
                                                    <div class="iti__flag-container">
                                                        <div class="iti__selected-flag" role="combobox"
                                                            aria-haspopup="listbox"
                                                            aria-controls="iti-0__country-listbox"
                                                            aria-expanded="false" aria-label="Telephone country code"
                                                            tabindex="0" title="Colombia">
                                                            <div class="iti__flag iti__co"></div>
                                                            <div class="iti__selected-dial-code">+57</div>
                                                            <div class="iti__arrow"></div>
                                                        </div>
                                                        <ul class="iti__country-list iti__hide"
                                                            id="iti-0__country-listbox" role="listbox"
                                                            aria-label="List of countries">
                                                            <li class="iti__country iti__preferred iti__active"
                                                                tabindex="-1" id="iti-0__item-co-preferred"
                                                                role="option" data-dial-code="57"
                                                                data-country-code="co" aria-selected="true">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__co"></div>
                                                                </div><span
                                                                    class="iti__country-name">Colombia</span><span
                                                                    class="iti__dial-code">+57</span>
                                                            </li>
                                                            <li class="iti__country iti__preferred" tabindex="-1"
                                                                id="iti-0__item-mx-preferred" role="option"
                                                                data-dial-code="52" data-country-code="mx"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mx"></div>
                                                                </div><span class="iti__country-name">Mexico
                                                                    (México)</span><span
                                                                    class="iti__dial-code">+52</span>
                                                            </li>
                                                            <li class="iti__divider" role="separator"
                                                                aria-disabled="true"></li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-af" role="option"
                                                                data-dial-code="93" data-country-code="af"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__af"></div>
                                                                </div><span class="iti__country-name">Afghanistan
                                                                    (‫افغانستان‬‎)</span><span
                                                                    class="iti__dial-code">+93</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-al" role="option"
                                                                data-dial-code="355" data-country-code="al"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__al"></div>
                                                                </div><span class="iti__country-name">Albania
                                                                    (Shqipëri)</span><span
                                                                    class="iti__dial-code">+355</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-dz" role="option"
                                                                data-dial-code="213" data-country-code="dz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__dz"></div>
                                                                </div><span class="iti__country-name">Algeria
                                                                    (‫الجزائر‬‎)</span><span
                                                                    class="iti__dial-code">+213</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-as" role="option" data-dial-code="1"
                                                                data-country-code="as" aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__as"></div>
                                                                </div><span class="iti__country-name">American
                                                                    Samoa</span><span class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ad" role="option"
                                                                data-dial-code="376" data-country-code="ad"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ad"></div>
                                                                </div><span
                                                                    class="iti__country-name">Andorra</span><span
                                                                    class="iti__dial-code">+376</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ao" role="option"
                                                                data-dial-code="244" data-country-code="ao"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ao"></div>
                                                                </div><span
                                                                    class="iti__country-name">Angola</span><span
                                                                    class="iti__dial-code">+244</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ai" role="option" data-dial-code="1"
                                                                data-country-code="ai" aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ai"></div>
                                                                </div><span
                                                                    class="iti__country-name">Anguilla</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ag" role="option" data-dial-code="1"
                                                                data-country-code="ag" aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ag"></div>
                                                                </div><span class="iti__country-name">Antigua and
                                                                    Barbuda</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ar" role="option"
                                                                data-dial-code="54" data-country-code="ar"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ar"></div>
                                                                </div><span
                                                                    class="iti__country-name">Argentina</span><span
                                                                    class="iti__dial-code">+54</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-am" role="option"
                                                                data-dial-code="374" data-country-code="am"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__am"></div>
                                                                </div><span class="iti__country-name">Armenia
                                                                    (Հայաստան)</span><span
                                                                    class="iti__dial-code">+374</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-aw" role="option"
                                                                data-dial-code="297" data-country-code="aw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__aw"></div>
                                                                </div><span class="iti__country-name">Aruba</span><span
                                                                    class="iti__dial-code">+297</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ac" role="option"
                                                                data-dial-code="247" data-country-code="ac"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ac"></div>
                                                                </div><span class="iti__country-name">Ascension
                                                                    Island</span><span
                                                                    class="iti__dial-code">+247</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-au" role="option"
                                                                data-dial-code="61" data-country-code="au"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__au"></div>
                                                                </div><span
                                                                    class="iti__country-name">Australia</span><span
                                                                    class="iti__dial-code">+61</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-at" role="option"
                                                                data-dial-code="43" data-country-code="at"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__at"></div>
                                                                </div><span class="iti__country-name">Austria
                                                                    (Österreich)</span><span
                                                                    class="iti__dial-code">+43</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-az" role="option"
                                                                data-dial-code="994" data-country-code="az"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__az"></div>
                                                                </div><span class="iti__country-name">Azerbaijan
                                                                    (Azərbaycan)</span><span
                                                                    class="iti__dial-code">+994</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bs" role="option"
                                                                data-dial-code="1" data-country-code="bs"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bs"></div>
                                                                </div><span
                                                                    class="iti__country-name">Bahamas</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bh" role="option"
                                                                data-dial-code="973" data-country-code="bh"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bh"></div>
                                                                </div><span class="iti__country-name">Bahrain
                                                                    (‫البحرين‬‎)</span><span
                                                                    class="iti__dial-code">+973</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bd" role="option"
                                                                data-dial-code="880" data-country-code="bd"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bd"></div>
                                                                </div><span class="iti__country-name">Bangladesh
                                                                    (বাংলাদেশ)</span><span
                                                                    class="iti__dial-code">+880</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bb" role="option"
                                                                data-dial-code="1" data-country-code="bb"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bb"></div>
                                                                </div><span
                                                                    class="iti__country-name">Barbados</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-by" role="option"
                                                                data-dial-code="375" data-country-code="by"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__by"></div>
                                                                </div><span class="iti__country-name">Belarus
                                                                    (Беларусь)</span><span
                                                                    class="iti__dial-code">+375</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-be" role="option"
                                                                data-dial-code="32" data-country-code="be"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__be"></div>
                                                                </div><span class="iti__country-name">Belgium
                                                                    (België)</span><span
                                                                    class="iti__dial-code">+32</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bz" role="option"
                                                                data-dial-code="501" data-country-code="bz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bz"></div>
                                                                </div><span
                                                                    class="iti__country-name">Belize</span><span
                                                                    class="iti__dial-code">+501</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bj" role="option"
                                                                data-dial-code="229" data-country-code="bj"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bj"></div>
                                                                </div><span class="iti__country-name">Benin
                                                                    (Bénin)</span><span
                                                                    class="iti__dial-code">+229</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bm" role="option"
                                                                data-dial-code="1" data-country-code="bm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bm"></div>
                                                                </div><span
                                                                    class="iti__country-name">Bermuda</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bt" role="option"
                                                                data-dial-code="975" data-country-code="bt"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bt"></div>
                                                                </div><span class="iti__country-name">Bhutan
                                                                    (འབྲུག)</span><span
                                                                    class="iti__dial-code">+975</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bo" role="option"
                                                                data-dial-code="591" data-country-code="bo"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bo"></div>
                                                                </div><span
                                                                    class="iti__country-name">Bolivia</span><span
                                                                    class="iti__dial-code">+591</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ba" role="option"
                                                                data-dial-code="387" data-country-code="ba"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ba"></div>
                                                                </div><span class="iti__country-name">Bosnia and
                                                                    Herzegovina (Босна и Херцеговина)</span><span
                                                                    class="iti__dial-code">+387</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bw" role="option"
                                                                data-dial-code="267" data-country-code="bw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bw"></div>
                                                                </div><span
                                                                    class="iti__country-name">Botswana</span><span
                                                                    class="iti__dial-code">+267</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-br" role="option"
                                                                data-dial-code="55" data-country-code="br"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__br"></div>
                                                                </div><span class="iti__country-name">Brazil
                                                                    (Brasil)</span><span
                                                                    class="iti__dial-code">+55</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-io" role="option"
                                                                data-dial-code="246" data-country-code="io"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__io"></div>
                                                                </div><span class="iti__country-name">British Indian
                                                                    Ocean Territory</span><span
                                                                    class="iti__dial-code">+246</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-vg" role="option"
                                                                data-dial-code="1" data-country-code="vg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__vg"></div>
                                                                </div><span class="iti__country-name">British Virgin
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bn" role="option"
                                                                data-dial-code="673" data-country-code="bn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bn"></div>
                                                                </div><span
                                                                    class="iti__country-name">Brunei</span><span
                                                                    class="iti__dial-code">+673</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bg" role="option"
                                                                data-dial-code="359" data-country-code="bg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bg"></div>
                                                                </div><span class="iti__country-name">Bulgaria
                                                                    (България)</span><span
                                                                    class="iti__dial-code">+359</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bf" role="option"
                                                                data-dial-code="226" data-country-code="bf"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bf"></div>
                                                                </div><span class="iti__country-name">Burkina
                                                                    Faso</span><span
                                                                    class="iti__dial-code">+226</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bi" role="option"
                                                                data-dial-code="257" data-country-code="bi"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bi"></div>
                                                                </div><span class="iti__country-name">Burundi
                                                                    (Uburundi)</span><span
                                                                    class="iti__dial-code">+257</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-kh" role="option"
                                                                data-dial-code="855" data-country-code="kh"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__kh"></div>
                                                                </div><span class="iti__country-name">Cambodia
                                                                    (កម្ពុជា)</span><span
                                                                    class="iti__dial-code">+855</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cm" role="option"
                                                                data-dial-code="237" data-country-code="cm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cm"></div>
                                                                </div><span class="iti__country-name">Cameroon
                                                                    (Cameroun)</span><span
                                                                    class="iti__dial-code">+237</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ca" role="option"
                                                                data-dial-code="1" data-country-code="ca"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ca"></div>
                                                                </div><span
                                                                    class="iti__country-name">Canada</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cv" role="option"
                                                                data-dial-code="238" data-country-code="cv"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cv"></div>
                                                                </div><span class="iti__country-name">Cape Verde (Kabu
                                                                    Verdi)</span><span
                                                                    class="iti__dial-code">+238</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bq" role="option"
                                                                data-dial-code="599" data-country-code="bq"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bq"></div>
                                                                </div><span class="iti__country-name">Caribbean
                                                                    Netherlands</span><span
                                                                    class="iti__dial-code">+599</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ky" role="option"
                                                                data-dial-code="1" data-country-code="ky"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ky"></div>
                                                                </div><span class="iti__country-name">Cayman
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cf" role="option"
                                                                data-dial-code="236" data-country-code="cf"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cf"></div>
                                                                </div><span class="iti__country-name">Central African
                                                                    Republic (République centrafricaine)</span><span
                                                                    class="iti__dial-code">+236</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-td" role="option"
                                                                data-dial-code="235" data-country-code="td"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__td"></div>
                                                                </div><span class="iti__country-name">Chad
                                                                    (Tchad)</span><span
                                                                    class="iti__dial-code">+235</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cl" role="option"
                                                                data-dial-code="56" data-country-code="cl"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cl"></div>
                                                                </div><span
                                                                    class="iti__country-name">Chile</span><span
                                                                    class="iti__dial-code">+56</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cn" role="option"
                                                                data-dial-code="86" data-country-code="cn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cn"></div>
                                                                </div><span class="iti__country-name">China
                                                                    (中国)</span><span class="iti__dial-code">+86</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cx" role="option"
                                                                data-dial-code="61" data-country-code="cx"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cx"></div>
                                                                </div><span class="iti__country-name">Christmas
                                                                    Island</span><span
                                                                    class="iti__dial-code">+61</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cc" role="option"
                                                                data-dial-code="61" data-country-code="cc"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cc"></div>
                                                                </div><span class="iti__country-name">Cocos (Keeling)
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+61</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-co" role="option"
                                                                data-dial-code="57" data-country-code="co"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__co"></div>
                                                                </div><span
                                                                    class="iti__country-name">Colombia</span><span
                                                                    class="iti__dial-code">+57</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-km" role="option"
                                                                data-dial-code="269" data-country-code="km"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__km"></div>
                                                                </div><span class="iti__country-name">Comoros (‫جزر
                                                                    القمر‬‎)</span><span
                                                                    class="iti__dial-code">+269</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cd" role="option"
                                                                data-dial-code="243" data-country-code="cd"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cd"></div>
                                                                </div><span class="iti__country-name">Congo (DRC)
                                                                    (Jamhuri ya Kidemokrasia ya Kongo)</span><span
                                                                    class="iti__dial-code">+243</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cg" role="option"
                                                                data-dial-code="242" data-country-code="cg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cg"></div>
                                                                </div><span class="iti__country-name">Congo (Republic)
                                                                    (Congo-Brazzaville)</span><span
                                                                    class="iti__dial-code">+242</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ck" role="option"
                                                                data-dial-code="682" data-country-code="ck"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ck"></div>
                                                                </div><span class="iti__country-name">Cook
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+682</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cr" role="option"
                                                                data-dial-code="506" data-country-code="cr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cr"></div>
                                                                </div><span class="iti__country-name">Costa
                                                                    Rica</span><span
                                                                    class="iti__dial-code">+506</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-hr" role="option"
                                                                data-dial-code="385" data-country-code="hr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__hr"></div>
                                                                </div><span class="iti__country-name">Croatia
                                                                    (Hrvatska)</span><span
                                                                    class="iti__dial-code">+385</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cu" role="option"
                                                                data-dial-code="53" data-country-code="cu"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cu"></div>
                                                                </div><span class="iti__country-name">Cuba</span><span
                                                                    class="iti__dial-code">+53</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cw" role="option"
                                                                data-dial-code="599" data-country-code="cw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cw"></div>
                                                                </div><span
                                                                    class="iti__country-name">Curaçao</span><span
                                                                    class="iti__dial-code">+599</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cy" role="option"
                                                                data-dial-code="357" data-country-code="cy"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cy"></div>
                                                                </div><span class="iti__country-name">Cyprus
                                                                    (Κύπρος)</span><span
                                                                    class="iti__dial-code">+357</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-cz" role="option"
                                                                data-dial-code="420" data-country-code="cz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__cz"></div>
                                                                </div><span class="iti__country-name">Czech Republic
                                                                    (Česká republika)</span><span
                                                                    class="iti__dial-code">+420</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ci" role="option"
                                                                data-dial-code="225" data-country-code="ci"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ci"></div>
                                                                </div><span class="iti__country-name">Côte
                                                                    d’Ivoire</span><span
                                                                    class="iti__dial-code">+225</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-dk" role="option"
                                                                data-dial-code="45" data-country-code="dk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__dk"></div>
                                                                </div><span class="iti__country-name">Denmark
                                                                    (Danmark)</span><span
                                                                    class="iti__dial-code">+45</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-dj" role="option"
                                                                data-dial-code="253" data-country-code="dj"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__dj"></div>
                                                                </div><span
                                                                    class="iti__country-name">Djibouti</span><span
                                                                    class="iti__dial-code">+253</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-dm" role="option"
                                                                data-dial-code="1" data-country-code="dm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__dm"></div>
                                                                </div><span
                                                                    class="iti__country-name">Dominica</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-do" role="option"
                                                                data-dial-code="1" data-country-code="do"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__do"></div>
                                                                </div><span class="iti__country-name">Dominican
                                                                    Republic (República Dominicana)</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ec" role="option"
                                                                data-dial-code="593" data-country-code="ec"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ec"></div>
                                                                </div><span
                                                                    class="iti__country-name">Ecuador</span><span
                                                                    class="iti__dial-code">+593</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-eg" role="option"
                                                                data-dial-code="20" data-country-code="eg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__eg"></div>
                                                                </div><span class="iti__country-name">Egypt
                                                                    (‫مصر‬‎)</span><span
                                                                    class="iti__dial-code">+20</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sv" role="option"
                                                                data-dial-code="503" data-country-code="sv"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sv"></div>
                                                                </div><span class="iti__country-name">El
                                                                    Salvador</span><span
                                                                    class="iti__dial-code">+503</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gq" role="option"
                                                                data-dial-code="240" data-country-code="gq"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gq"></div>
                                                                </div><span class="iti__country-name">Equatorial
                                                                    Guinea (Guinea Ecuatorial)</span><span
                                                                    class="iti__dial-code">+240</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-er" role="option"
                                                                data-dial-code="291" data-country-code="er"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__er"></div>
                                                                </div><span
                                                                    class="iti__country-name">Eritrea</span><span
                                                                    class="iti__dial-code">+291</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ee" role="option"
                                                                data-dial-code="372" data-country-code="ee"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ee"></div>
                                                                </div><span class="iti__country-name">Estonia
                                                                    (Eesti)</span><span
                                                                    class="iti__dial-code">+372</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sz" role="option"
                                                                data-dial-code="268" data-country-code="sz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sz"></div>
                                                                </div><span
                                                                    class="iti__country-name">Eswatini</span><span
                                                                    class="iti__dial-code">+268</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-et" role="option"
                                                                data-dial-code="251" data-country-code="et"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__et"></div>
                                                                </div><span
                                                                    class="iti__country-name">Ethiopia</span><span
                                                                    class="iti__dial-code">+251</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-fk" role="option"
                                                                data-dial-code="500" data-country-code="fk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__fk"></div>
                                                                </div><span class="iti__country-name">Falkland Islands
                                                                    (Islas Malvinas)</span><span
                                                                    class="iti__dial-code">+500</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-fo" role="option"
                                                                data-dial-code="298" data-country-code="fo"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__fo"></div>
                                                                </div><span class="iti__country-name">Faroe Islands
                                                                    (Føroyar)</span><span
                                                                    class="iti__dial-code">+298</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-fj" role="option"
                                                                data-dial-code="679" data-country-code="fj"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__fj"></div>
                                                                </div><span class="iti__country-name">Fiji</span><span
                                                                    class="iti__dial-code">+679</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-fi" role="option"
                                                                data-dial-code="358" data-country-code="fi"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__fi"></div>
                                                                </div><span class="iti__country-name">Finland
                                                                    (Suomi)</span><span
                                                                    class="iti__dial-code">+358</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-fr" role="option"
                                                                data-dial-code="33" data-country-code="fr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__fr"></div>
                                                                </div><span
                                                                    class="iti__country-name">France</span><span
                                                                    class="iti__dial-code">+33</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gf" role="option"
                                                                data-dial-code="594" data-country-code="gf"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gf"></div>
                                                                </div><span class="iti__country-name">French Guiana
                                                                    (Guyane française)</span><span
                                                                    class="iti__dial-code">+594</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pf" role="option"
                                                                data-dial-code="689" data-country-code="pf"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pf"></div>
                                                                </div><span class="iti__country-name">French Polynesia
                                                                    (Polynésie française)</span><span
                                                                    class="iti__dial-code">+689</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ga" role="option"
                                                                data-dial-code="241" data-country-code="ga"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ga"></div>
                                                                </div><span
                                                                    class="iti__country-name">Gabon</span><span
                                                                    class="iti__dial-code">+241</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gm" role="option"
                                                                data-dial-code="220" data-country-code="gm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gm"></div>
                                                                </div><span
                                                                    class="iti__country-name">Gambia</span><span
                                                                    class="iti__dial-code">+220</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ge" role="option"
                                                                data-dial-code="995" data-country-code="ge"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ge"></div>
                                                                </div><span class="iti__country-name">Georgia
                                                                    (საქართველო)</span><span
                                                                    class="iti__dial-code">+995</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-de" role="option"
                                                                data-dial-code="49" data-country-code="de"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__de"></div>
                                                                </div><span class="iti__country-name">Germany
                                                                    (Deutschland)</span><span
                                                                    class="iti__dial-code">+49</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gh" role="option"
                                                                data-dial-code="233" data-country-code="gh"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gh"></div>
                                                                </div><span class="iti__country-name">Ghana
                                                                    (Gaana)</span><span
                                                                    class="iti__dial-code">+233</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gi" role="option"
                                                                data-dial-code="350" data-country-code="gi"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gi"></div>
                                                                </div><span
                                                                    class="iti__country-name">Gibraltar</span><span
                                                                    class="iti__dial-code">+350</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gr" role="option"
                                                                data-dial-code="30" data-country-code="gr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gr"></div>
                                                                </div><span class="iti__country-name">Greece
                                                                    (Ελλάδα)</span><span
                                                                    class="iti__dial-code">+30</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gl" role="option"
                                                                data-dial-code="299" data-country-code="gl"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gl"></div>
                                                                </div><span class="iti__country-name">Greenland
                                                                    (Kalaallit Nunaat)</span><span
                                                                    class="iti__dial-code">+299</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gd" role="option"
                                                                data-dial-code="1" data-country-code="gd"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gd"></div>
                                                                </div><span
                                                                    class="iti__country-name">Grenada</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gp" role="option"
                                                                data-dial-code="590" data-country-code="gp"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gp"></div>
                                                                </div><span
                                                                    class="iti__country-name">Guadeloupe</span><span
                                                                    class="iti__dial-code">+590</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gu" role="option"
                                                                data-dial-code="1" data-country-code="gu"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gu"></div>
                                                                </div><span class="iti__country-name">Guam</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gt" role="option"
                                                                data-dial-code="502" data-country-code="gt"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gt"></div>
                                                                </div><span
                                                                    class="iti__country-name">Guatemala</span><span
                                                                    class="iti__dial-code">+502</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gg" role="option"
                                                                data-dial-code="44" data-country-code="gg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gg"></div>
                                                                </div><span
                                                                    class="iti__country-name">Guernsey</span><span
                                                                    class="iti__dial-code">+44</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gn" role="option"
                                                                data-dial-code="224" data-country-code="gn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gn"></div>
                                                                </div><span class="iti__country-name">Guinea
                                                                    (Guinée)</span><span
                                                                    class="iti__dial-code">+224</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gw" role="option"
                                                                data-dial-code="245" data-country-code="gw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gw"></div>
                                                                </div><span class="iti__country-name">Guinea-Bissau
                                                                    (Guiné Bissau)</span><span
                                                                    class="iti__dial-code">+245</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gy" role="option"
                                                                data-dial-code="592" data-country-code="gy"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gy"></div>
                                                                </div><span
                                                                    class="iti__country-name">Guyana</span><span
                                                                    class="iti__dial-code">+592</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ht" role="option"
                                                                data-dial-code="509" data-country-code="ht"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ht"></div>
                                                                </div><span
                                                                    class="iti__country-name">Haiti</span><span
                                                                    class="iti__dial-code">+509</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-hn" role="option"
                                                                data-dial-code="504" data-country-code="hn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__hn"></div>
                                                                </div><span
                                                                    class="iti__country-name">Honduras</span><span
                                                                    class="iti__dial-code">+504</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-hk" role="option"
                                                                data-dial-code="852" data-country-code="hk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__hk"></div>
                                                                </div><span class="iti__country-name">Hong Kong
                                                                    (香港)</span><span
                                                                    class="iti__dial-code">+852</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-hu" role="option"
                                                                data-dial-code="36" data-country-code="hu"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__hu"></div>
                                                                </div><span class="iti__country-name">Hungary
                                                                    (Magyarország)</span><span
                                                                    class="iti__dial-code">+36</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-is" role="option"
                                                                data-dial-code="354" data-country-code="is"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__is"></div>
                                                                </div><span class="iti__country-name">Iceland
                                                                    (Ísland)</span><span
                                                                    class="iti__dial-code">+354</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-in" role="option"
                                                                data-dial-code="91" data-country-code="in"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__in"></div>
                                                                </div><span class="iti__country-name">India
                                                                    (भारत)</span><span
                                                                    class="iti__dial-code">+91</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-id" role="option"
                                                                data-dial-code="62" data-country-code="id"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__id"></div>
                                                                </div><span
                                                                    class="iti__country-name">Indonesia</span><span
                                                                    class="iti__dial-code">+62</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ir" role="option"
                                                                data-dial-code="98" data-country-code="ir"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ir"></div>
                                                                </div><span class="iti__country-name">Iran
                                                                    (‫ایران‬‎)</span><span
                                                                    class="iti__dial-code">+98</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-iq" role="option"
                                                                data-dial-code="964" data-country-code="iq"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__iq"></div>
                                                                </div><span class="iti__country-name">Iraq
                                                                    (‫العراق‬‎)</span><span
                                                                    class="iti__dial-code">+964</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ie" role="option"
                                                                data-dial-code="353" data-country-code="ie"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ie"></div>
                                                                </div><span
                                                                    class="iti__country-name">Ireland</span><span
                                                                    class="iti__dial-code">+353</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-im" role="option"
                                                                data-dial-code="44" data-country-code="im"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__im"></div>
                                                                </div><span class="iti__country-name">Isle of
                                                                    Man</span><span class="iti__dial-code">+44</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-il" role="option"
                                                                data-dial-code="972" data-country-code="il"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__il"></div>
                                                                </div><span class="iti__country-name">Israel
                                                                    (‫ישראל‬‎)</span><span
                                                                    class="iti__dial-code">+972</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-it" role="option"
                                                                data-dial-code="39" data-country-code="it"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__it"></div>
                                                                </div><span class="iti__country-name">Italy
                                                                    (Italia)</span><span
                                                                    class="iti__dial-code">+39</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-jm" role="option"
                                                                data-dial-code="1" data-country-code="jm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__jm"></div>
                                                                </div><span
                                                                    class="iti__country-name">Jamaica</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-jp" role="option"
                                                                data-dial-code="81" data-country-code="jp"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__jp"></div>
                                                                </div><span class="iti__country-name">Japan
                                                                    (日本)</span><span class="iti__dial-code">+81</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-je" role="option"
                                                                data-dial-code="44" data-country-code="je"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__je"></div>
                                                                </div><span
                                                                    class="iti__country-name">Jersey</span><span
                                                                    class="iti__dial-code">+44</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-jo" role="option"
                                                                data-dial-code="962" data-country-code="jo"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__jo"></div>
                                                                </div><span class="iti__country-name">Jordan
                                                                    (‫الأردن‬‎)</span><span
                                                                    class="iti__dial-code">+962</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-kz" role="option"
                                                                data-dial-code="7" data-country-code="kz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__kz"></div>
                                                                </div><span class="iti__country-name">Kazakhstan
                                                                    (Казахстан)</span><span
                                                                    class="iti__dial-code">+7</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ke" role="option"
                                                                data-dial-code="254" data-country-code="ke"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ke"></div>
                                                                </div><span
                                                                    class="iti__country-name">Kenya</span><span
                                                                    class="iti__dial-code">+254</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ki" role="option"
                                                                data-dial-code="686" data-country-code="ki"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ki"></div>
                                                                </div><span
                                                                    class="iti__country-name">Kiribati</span><span
                                                                    class="iti__dial-code">+686</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-xk" role="option"
                                                                data-dial-code="383" data-country-code="xk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__xk"></div>
                                                                </div><span
                                                                    class="iti__country-name">Kosovo</span><span
                                                                    class="iti__dial-code">+383</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-kw" role="option"
                                                                data-dial-code="965" data-country-code="kw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__kw"></div>
                                                                </div><span class="iti__country-name">Kuwait
                                                                    (‫الكويت‬‎)</span><span
                                                                    class="iti__dial-code">+965</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-kg" role="option"
                                                                data-dial-code="996" data-country-code="kg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__kg"></div>
                                                                </div><span class="iti__country-name">Kyrgyzstan
                                                                    (Кыргызстан)</span><span
                                                                    class="iti__dial-code">+996</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-la" role="option"
                                                                data-dial-code="856" data-country-code="la"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__la"></div>
                                                                </div><span class="iti__country-name">Laos
                                                                    (ລາວ)</span><span
                                                                    class="iti__dial-code">+856</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-lv" role="option"
                                                                data-dial-code="371" data-country-code="lv"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__lv"></div>
                                                                </div><span class="iti__country-name">Latvia
                                                                    (Latvija)</span><span
                                                                    class="iti__dial-code">+371</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-lb" role="option"
                                                                data-dial-code="961" data-country-code="lb"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__lb"></div>
                                                                </div><span class="iti__country-name">Lebanon
                                                                    (‫لبنان‬‎)</span><span
                                                                    class="iti__dial-code">+961</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ls" role="option"
                                                                data-dial-code="266" data-country-code="ls"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ls"></div>
                                                                </div><span
                                                                    class="iti__country-name">Lesotho</span><span
                                                                    class="iti__dial-code">+266</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-lr" role="option"
                                                                data-dial-code="231" data-country-code="lr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__lr"></div>
                                                                </div><span
                                                                    class="iti__country-name">Liberia</span><span
                                                                    class="iti__dial-code">+231</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ly" role="option"
                                                                data-dial-code="218" data-country-code="ly"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ly"></div>
                                                                </div><span class="iti__country-name">Libya
                                                                    (‫ليبيا‬‎)</span><span
                                                                    class="iti__dial-code">+218</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-li" role="option"
                                                                data-dial-code="423" data-country-code="li"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__li"></div>
                                                                </div><span
                                                                    class="iti__country-name">Liechtenstein</span><span
                                                                    class="iti__dial-code">+423</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-lt" role="option"
                                                                data-dial-code="370" data-country-code="lt"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__lt"></div>
                                                                </div><span class="iti__country-name">Lithuania
                                                                    (Lietuva)</span><span
                                                                    class="iti__dial-code">+370</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-lu" role="option"
                                                                data-dial-code="352" data-country-code="lu"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__lu"></div>
                                                                </div><span
                                                                    class="iti__country-name">Luxembourg</span><span
                                                                    class="iti__dial-code">+352</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mo" role="option"
                                                                data-dial-code="853" data-country-code="mo"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mo"></div>
                                                                </div><span class="iti__country-name">Macau
                                                                    (澳門)</span><span
                                                                    class="iti__dial-code">+853</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mg" role="option"
                                                                data-dial-code="261" data-country-code="mg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mg"></div>
                                                                </div><span class="iti__country-name">Madagascar
                                                                    (Madagasikara)</span><span
                                                                    class="iti__dial-code">+261</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mw" role="option"
                                                                data-dial-code="265" data-country-code="mw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mw"></div>
                                                                </div><span
                                                                    class="iti__country-name">Malawi</span><span
                                                                    class="iti__dial-code">+265</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-my" role="option"
                                                                data-dial-code="60" data-country-code="my"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__my"></div>
                                                                </div><span
                                                                    class="iti__country-name">Malaysia</span><span
                                                                    class="iti__dial-code">+60</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mv" role="option"
                                                                data-dial-code="960" data-country-code="mv"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mv"></div>
                                                                </div><span
                                                                    class="iti__country-name">Maldives</span><span
                                                                    class="iti__dial-code">+960</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ml" role="option"
                                                                data-dial-code="223" data-country-code="ml"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ml"></div>
                                                                </div><span class="iti__country-name">Mali</span><span
                                                                    class="iti__dial-code">+223</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mt" role="option"
                                                                data-dial-code="356" data-country-code="mt"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mt"></div>
                                                                </div><span
                                                                    class="iti__country-name">Malta</span><span
                                                                    class="iti__dial-code">+356</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mh" role="option"
                                                                data-dial-code="692" data-country-code="mh"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mh"></div>
                                                                </div><span class="iti__country-name">Marshall
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+692</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mq" role="option"
                                                                data-dial-code="596" data-country-code="mq"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mq"></div>
                                                                </div><span
                                                                    class="iti__country-name">Martinique</span><span
                                                                    class="iti__dial-code">+596</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mr" role="option"
                                                                data-dial-code="222" data-country-code="mr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mr"></div>
                                                                </div><span class="iti__country-name">Mauritania
                                                                    (‫موريتانيا‬‎)</span><span
                                                                    class="iti__dial-code">+222</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mu" role="option"
                                                                data-dial-code="230" data-country-code="mu"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mu"></div>
                                                                </div><span class="iti__country-name">Mauritius
                                                                    (Moris)</span><span
                                                                    class="iti__dial-code">+230</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-yt" role="option"
                                                                data-dial-code="262" data-country-code="yt"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__yt"></div>
                                                                </div><span
                                                                    class="iti__country-name">Mayotte</span><span
                                                                    class="iti__dial-code">+262</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mx" role="option"
                                                                data-dial-code="52" data-country-code="mx"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mx"></div>
                                                                </div><span class="iti__country-name">Mexico
                                                                    (México)</span><span
                                                                    class="iti__dial-code">+52</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-fm" role="option"
                                                                data-dial-code="691" data-country-code="fm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__fm"></div>
                                                                </div><span
                                                                    class="iti__country-name">Micronesia</span><span
                                                                    class="iti__dial-code">+691</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-md" role="option"
                                                                data-dial-code="373" data-country-code="md"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__md"></div>
                                                                </div><span class="iti__country-name">Moldova
                                                                    (Republica Moldova)</span><span
                                                                    class="iti__dial-code">+373</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mc" role="option"
                                                                data-dial-code="377" data-country-code="mc"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mc"></div>
                                                                </div><span
                                                                    class="iti__country-name">Monaco</span><span
                                                                    class="iti__dial-code">+377</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mn" role="option"
                                                                data-dial-code="976" data-country-code="mn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mn"></div>
                                                                </div><span class="iti__country-name">Mongolia
                                                                    (Монгол)</span><span
                                                                    class="iti__dial-code">+976</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-me" role="option"
                                                                data-dial-code="382" data-country-code="me"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__me"></div>
                                                                </div><span class="iti__country-name">Montenegro (Crna
                                                                    Gora)</span><span
                                                                    class="iti__dial-code">+382</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ms" role="option"
                                                                data-dial-code="1" data-country-code="ms"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ms"></div>
                                                                </div><span
                                                                    class="iti__country-name">Montserrat</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ma" role="option"
                                                                data-dial-code="212" data-country-code="ma"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ma"></div>
                                                                </div><span class="iti__country-name">Morocco
                                                                    (‫المغرب‬‎)</span><span
                                                                    class="iti__dial-code">+212</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mz" role="option"
                                                                data-dial-code="258" data-country-code="mz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mz"></div>
                                                                </div><span class="iti__country-name">Mozambique
                                                                    (Moçambique)</span><span
                                                                    class="iti__dial-code">+258</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mm" role="option"
                                                                data-dial-code="95" data-country-code="mm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mm"></div>
                                                                </div><span class="iti__country-name">Myanmar (Burma)
                                                                    (မြန်မာ)</span><span
                                                                    class="iti__dial-code">+95</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-na" role="option"
                                                                data-dial-code="264" data-country-code="na"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__na"></div>
                                                                </div><span class="iti__country-name">Namibia
                                                                    (Namibië)</span><span
                                                                    class="iti__dial-code">+264</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-nr" role="option"
                                                                data-dial-code="674" data-country-code="nr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__nr"></div>
                                                                </div><span
                                                                    class="iti__country-name">Nauru</span><span
                                                                    class="iti__dial-code">+674</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-np" role="option"
                                                                data-dial-code="977" data-country-code="np"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__np"></div>
                                                                </div><span class="iti__country-name">Nepal
                                                                    (नेपाल)</span><span
                                                                    class="iti__dial-code">+977</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-nl" role="option"
                                                                data-dial-code="31" data-country-code="nl"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__nl"></div>
                                                                </div><span class="iti__country-name">Netherlands
                                                                    (Nederland)</span><span
                                                                    class="iti__dial-code">+31</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-nc" role="option"
                                                                data-dial-code="687" data-country-code="nc"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__nc"></div>
                                                                </div><span class="iti__country-name">New Caledonia
                                                                    (Nouvelle-Calédonie)</span><span
                                                                    class="iti__dial-code">+687</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-nz" role="option"
                                                                data-dial-code="64" data-country-code="nz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__nz"></div>
                                                                </div><span class="iti__country-name">New
                                                                    Zealand</span><span
                                                                    class="iti__dial-code">+64</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ni" role="option"
                                                                data-dial-code="505" data-country-code="ni"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ni"></div>
                                                                </div><span
                                                                    class="iti__country-name">Nicaragua</span><span
                                                                    class="iti__dial-code">+505</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ne" role="option"
                                                                data-dial-code="227" data-country-code="ne"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ne"></div>
                                                                </div><span class="iti__country-name">Niger
                                                                    (Nijar)</span><span
                                                                    class="iti__dial-code">+227</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ng" role="option"
                                                                data-dial-code="234" data-country-code="ng"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ng"></div>
                                                                </div><span
                                                                    class="iti__country-name">Nigeria</span><span
                                                                    class="iti__dial-code">+234</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-nu" role="option"
                                                                data-dial-code="683" data-country-code="nu"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__nu"></div>
                                                                </div><span class="iti__country-name">Niue</span><span
                                                                    class="iti__dial-code">+683</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-nf" role="option"
                                                                data-dial-code="672" data-country-code="nf"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__nf"></div>
                                                                </div><span class="iti__country-name">Norfolk
                                                                    Island</span><span
                                                                    class="iti__dial-code">+672</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-kp" role="option"
                                                                data-dial-code="850" data-country-code="kp"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__kp"></div>
                                                                </div><span class="iti__country-name">North Korea (조선
                                                                    민주주의 인민 공화국)</span><span
                                                                    class="iti__dial-code">+850</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mk" role="option"
                                                                data-dial-code="389" data-country-code="mk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mk"></div>
                                                                </div><span class="iti__country-name">North Macedonia
                                                                    (Северна Македонија)</span><span
                                                                    class="iti__dial-code">+389</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mp" role="option"
                                                                data-dial-code="1" data-country-code="mp"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mp"></div>
                                                                </div><span class="iti__country-name">Northern Mariana
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-no" role="option"
                                                                data-dial-code="47" data-country-code="no"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__no"></div>
                                                                </div><span class="iti__country-name">Norway
                                                                    (Norge)</span><span
                                                                    class="iti__dial-code">+47</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-om" role="option"
                                                                data-dial-code="968" data-country-code="om"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__om"></div>
                                                                </div><span class="iti__country-name">Oman
                                                                    (‫عُمان‬‎)</span><span
                                                                    class="iti__dial-code">+968</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pk" role="option"
                                                                data-dial-code="92" data-country-code="pk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pk"></div>
                                                                </div><span class="iti__country-name">Pakistan
                                                                    (‫پاکستان‬‎)</span><span
                                                                    class="iti__dial-code">+92</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pw" role="option"
                                                                data-dial-code="680" data-country-code="pw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pw"></div>
                                                                </div><span
                                                                    class="iti__country-name">Palau</span><span
                                                                    class="iti__dial-code">+680</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ps" role="option"
                                                                data-dial-code="970" data-country-code="ps"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ps"></div>
                                                                </div><span class="iti__country-name">Palestine
                                                                    (‫فلسطين‬‎)</span><span
                                                                    class="iti__dial-code">+970</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pa" role="option"
                                                                data-dial-code="507" data-country-code="pa"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pa"></div>
                                                                </div><span class="iti__country-name">Panama
                                                                    (Panamá)</span><span
                                                                    class="iti__dial-code">+507</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pg" role="option"
                                                                data-dial-code="675" data-country-code="pg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pg"></div>
                                                                </div><span class="iti__country-name">Papua New
                                                                    Guinea</span><span
                                                                    class="iti__dial-code">+675</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-py" role="option"
                                                                data-dial-code="595" data-country-code="py"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__py"></div>
                                                                </div><span
                                                                    class="iti__country-name">Paraguay</span><span
                                                                    class="iti__dial-code">+595</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pe" role="option"
                                                                data-dial-code="51" data-country-code="pe"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pe"></div>
                                                                </div><span class="iti__country-name">Peru
                                                                    (Perú)</span><span
                                                                    class="iti__dial-code">+51</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ph" role="option"
                                                                data-dial-code="63" data-country-code="ph"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ph"></div>
                                                                </div><span
                                                                    class="iti__country-name">Philippines</span><span
                                                                    class="iti__dial-code">+63</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pl" role="option"
                                                                data-dial-code="48" data-country-code="pl"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pl"></div>
                                                                </div><span class="iti__country-name">Poland
                                                                    (Polska)</span><span
                                                                    class="iti__dial-code">+48</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pt" role="option"
                                                                data-dial-code="351" data-country-code="pt"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pt"></div>
                                                                </div><span
                                                                    class="iti__country-name">Portugal</span><span
                                                                    class="iti__dial-code">+351</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pr" role="option"
                                                                data-dial-code="1" data-country-code="pr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pr"></div>
                                                                </div><span class="iti__country-name">Puerto
                                                                    Rico</span><span class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-qa" role="option"
                                                                data-dial-code="974" data-country-code="qa"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__qa"></div>
                                                                </div><span class="iti__country-name">Qatar
                                                                    (‫قطر‬‎)</span><span
                                                                    class="iti__dial-code">+974</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ro" role="option"
                                                                data-dial-code="40" data-country-code="ro"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ro"></div>
                                                                </div><span class="iti__country-name">Romania
                                                                    (România)</span><span
                                                                    class="iti__dial-code">+40</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ru" role="option"
                                                                data-dial-code="7" data-country-code="ru"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ru"></div>
                                                                </div><span class="iti__country-name">Russia
                                                                    (Россия)</span><span
                                                                    class="iti__dial-code">+7</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-rw" role="option"
                                                                data-dial-code="250" data-country-code="rw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__rw"></div>
                                                                </div><span
                                                                    class="iti__country-name">Rwanda</span><span
                                                                    class="iti__dial-code">+250</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-re" role="option"
                                                                data-dial-code="262" data-country-code="re"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__re"></div>
                                                                </div><span class="iti__country-name">Réunion (La
                                                                    Réunion)</span><span
                                                                    class="iti__dial-code">+262</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-bl" role="option"
                                                                data-dial-code="590" data-country-code="bl"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__bl"></div>
                                                                </div><span class="iti__country-name">Saint
                                                                    Barthélemy</span><span
                                                                    class="iti__dial-code">+590</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sh" role="option"
                                                                data-dial-code="290" data-country-code="sh"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sh"></div>
                                                                </div><span class="iti__country-name">Saint
                                                                    Helena</span><span
                                                                    class="iti__dial-code">+290</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-kn" role="option"
                                                                data-dial-code="1" data-country-code="kn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__kn"></div>
                                                                </div><span class="iti__country-name">Saint Kitts and
                                                                    Nevis</span><span class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-lc" role="option"
                                                                data-dial-code="1" data-country-code="lc"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__lc"></div>
                                                                </div><span class="iti__country-name">Saint
                                                                    Lucia</span><span class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-mf" role="option"
                                                                data-dial-code="590" data-country-code="mf"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__mf"></div>
                                                                </div><span class="iti__country-name">Saint Martin
                                                                    (Saint-Martin (partie française))</span><span
                                                                    class="iti__dial-code">+590</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-pm" role="option"
                                                                data-dial-code="508" data-country-code="pm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__pm"></div>
                                                                </div><span class="iti__country-name">Saint Pierre and
                                                                    Miquelon (Saint-Pierre-et-Miquelon)</span><span
                                                                    class="iti__dial-code">+508</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-vc" role="option"
                                                                data-dial-code="1" data-country-code="vc"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__vc"></div>
                                                                </div><span class="iti__country-name">Saint Vincent
                                                                    and the Grenadines</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ws" role="option"
                                                                data-dial-code="685" data-country-code="ws"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ws"></div>
                                                                </div><span
                                                                    class="iti__country-name">Samoa</span><span
                                                                    class="iti__dial-code">+685</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sm" role="option"
                                                                data-dial-code="378" data-country-code="sm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sm"></div>
                                                                </div><span class="iti__country-name">San
                                                                    Marino</span><span
                                                                    class="iti__dial-code">+378</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sa" role="option"
                                                                data-dial-code="966" data-country-code="sa"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sa"></div>
                                                                </div><span class="iti__country-name">Saudi Arabia
                                                                    (‫المملكة العربية السعودية‬‎)</span><span
                                                                    class="iti__dial-code">+966</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sn" role="option"
                                                                data-dial-code="221" data-country-code="sn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sn"></div>
                                                                </div><span class="iti__country-name">Senegal
                                                                    (Sénégal)</span><span
                                                                    class="iti__dial-code">+221</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-rs" role="option"
                                                                data-dial-code="381" data-country-code="rs"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__rs"></div>
                                                                </div><span class="iti__country-name">Serbia
                                                                    (Србија)</span><span
                                                                    class="iti__dial-code">+381</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sc" role="option"
                                                                data-dial-code="248" data-country-code="sc"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sc"></div>
                                                                </div><span
                                                                    class="iti__country-name">Seychelles</span><span
                                                                    class="iti__dial-code">+248</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sl" role="option"
                                                                data-dial-code="232" data-country-code="sl"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sl"></div>
                                                                </div><span class="iti__country-name">Sierra
                                                                    Leone</span><span
                                                                    class="iti__dial-code">+232</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sg" role="option"
                                                                data-dial-code="65" data-country-code="sg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sg"></div>
                                                                </div><span
                                                                    class="iti__country-name">Singapore</span><span
                                                                    class="iti__dial-code">+65</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sx" role="option"
                                                                data-dial-code="1" data-country-code="sx"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sx"></div>
                                                                </div><span class="iti__country-name">Sint
                                                                    Maarten</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sk" role="option"
                                                                data-dial-code="421" data-country-code="sk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sk"></div>
                                                                </div><span class="iti__country-name">Slovakia
                                                                    (Slovensko)</span><span
                                                                    class="iti__dial-code">+421</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-si" role="option"
                                                                data-dial-code="386" data-country-code="si"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__si"></div>
                                                                </div><span class="iti__country-name">Slovenia
                                                                    (Slovenija)</span><span
                                                                    class="iti__dial-code">+386</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sb" role="option"
                                                                data-dial-code="677" data-country-code="sb"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sb"></div>
                                                                </div><span class="iti__country-name">Solomon
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+677</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-so" role="option"
                                                                data-dial-code="252" data-country-code="so"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__so"></div>
                                                                </div><span class="iti__country-name">Somalia
                                                                    (Soomaaliya)</span><span
                                                                    class="iti__dial-code">+252</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-za" role="option"
                                                                data-dial-code="27" data-country-code="za"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__za"></div>
                                                                </div><span class="iti__country-name">South
                                                                    Africa</span><span
                                                                    class="iti__dial-code">+27</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-kr" role="option"
                                                                data-dial-code="82" data-country-code="kr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__kr"></div>
                                                                </div><span class="iti__country-name">South Korea
                                                                    (대한민국)</span><span
                                                                    class="iti__dial-code">+82</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ss" role="option"
                                                                data-dial-code="211" data-country-code="ss"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ss"></div>
                                                                </div><span class="iti__country-name">South Sudan
                                                                    (‫جنوب السودان‬‎)</span><span
                                                                    class="iti__dial-code">+211</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-es" role="option"
                                                                data-dial-code="34" data-country-code="es"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__es"></div>
                                                                </div><span class="iti__country-name">Spain
                                                                    (España)</span><span
                                                                    class="iti__dial-code">+34</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-lk" role="option"
                                                                data-dial-code="94" data-country-code="lk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__lk"></div>
                                                                </div><span class="iti__country-name">Sri Lanka (ශ්‍රී
                                                                    ලංකාව)</span><span
                                                                    class="iti__dial-code">+94</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sd" role="option"
                                                                data-dial-code="249" data-country-code="sd"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sd"></div>
                                                                </div><span class="iti__country-name">Sudan
                                                                    (‫السودان‬‎)</span><span
                                                                    class="iti__dial-code">+249</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sr" role="option"
                                                                data-dial-code="597" data-country-code="sr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sr"></div>
                                                                </div><span
                                                                    class="iti__country-name">Suriname</span><span
                                                                    class="iti__dial-code">+597</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sj" role="option"
                                                                data-dial-code="47" data-country-code="sj"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sj"></div>
                                                                </div><span class="iti__country-name">Svalbard and Jan
                                                                    Mayen</span><span
                                                                    class="iti__dial-code">+47</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-se" role="option"
                                                                data-dial-code="46" data-country-code="se"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__se"></div>
                                                                </div><span class="iti__country-name">Sweden
                                                                    (Sverige)</span><span
                                                                    class="iti__dial-code">+46</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ch" role="option"
                                                                data-dial-code="41" data-country-code="ch"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ch"></div>
                                                                </div><span class="iti__country-name">Switzerland
                                                                    (Schweiz)</span><span
                                                                    class="iti__dial-code">+41</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-sy" role="option"
                                                                data-dial-code="963" data-country-code="sy"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__sy"></div>
                                                                </div><span class="iti__country-name">Syria
                                                                    (‫سوريا‬‎)</span><span
                                                                    class="iti__dial-code">+963</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-st" role="option"
                                                                data-dial-code="239" data-country-code="st"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__st"></div>
                                                                </div><span class="iti__country-name">São Tomé and
                                                                    Príncipe (São Tomé e Príncipe)</span><span
                                                                    class="iti__dial-code">+239</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tw" role="option"
                                                                data-dial-code="886" data-country-code="tw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tw"></div>
                                                                </div><span class="iti__country-name">Taiwan
                                                                    (台灣)</span><span
                                                                    class="iti__dial-code">+886</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tj" role="option"
                                                                data-dial-code="992" data-country-code="tj"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tj"></div>
                                                                </div><span
                                                                    class="iti__country-name">Tajikistan</span><span
                                                                    class="iti__dial-code">+992</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tz" role="option"
                                                                data-dial-code="255" data-country-code="tz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tz"></div>
                                                                </div><span
                                                                    class="iti__country-name">Tanzania</span><span
                                                                    class="iti__dial-code">+255</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-th" role="option"
                                                                data-dial-code="66" data-country-code="th"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__th"></div>
                                                                </div><span class="iti__country-name">Thailand
                                                                    (ไทย)</span><span
                                                                    class="iti__dial-code">+66</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tl" role="option"
                                                                data-dial-code="670" data-country-code="tl"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tl"></div>
                                                                </div><span
                                                                    class="iti__country-name">Timor-Leste</span><span
                                                                    class="iti__dial-code">+670</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tg" role="option"
                                                                data-dial-code="228" data-country-code="tg"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tg"></div>
                                                                </div><span class="iti__country-name">Togo</span><span
                                                                    class="iti__dial-code">+228</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tk" role="option"
                                                                data-dial-code="690" data-country-code="tk"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tk"></div>
                                                                </div><span
                                                                    class="iti__country-name">Tokelau</span><span
                                                                    class="iti__dial-code">+690</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-to" role="option"
                                                                data-dial-code="676" data-country-code="to"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__to"></div>
                                                                </div><span
                                                                    class="iti__country-name">Tonga</span><span
                                                                    class="iti__dial-code">+676</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tt" role="option"
                                                                data-dial-code="1" data-country-code="tt"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tt"></div>
                                                                </div><span class="iti__country-name">Trinidad and
                                                                    Tobago</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tn" role="option"
                                                                data-dial-code="216" data-country-code="tn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tn"></div>
                                                                </div><span class="iti__country-name">Tunisia
                                                                    (‫تونس‬‎)</span><span
                                                                    class="iti__dial-code">+216</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tr" role="option"
                                                                data-dial-code="90" data-country-code="tr"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tr"></div>
                                                                </div><span class="iti__country-name">Turkey
                                                                    (Türkiye)</span><span
                                                                    class="iti__dial-code">+90</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tm" role="option"
                                                                data-dial-code="993" data-country-code="tm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tm"></div>
                                                                </div><span
                                                                    class="iti__country-name">Turkmenistan</span><span
                                                                    class="iti__dial-code">+993</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tc" role="option"
                                                                data-dial-code="1" data-country-code="tc"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tc"></div>
                                                                </div><span class="iti__country-name">Turks and Caicos
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-tv" role="option"
                                                                data-dial-code="688" data-country-code="tv"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__tv"></div>
                                                                </div><span
                                                                    class="iti__country-name">Tuvalu</span><span
                                                                    class="iti__dial-code">+688</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-vi" role="option"
                                                                data-dial-code="1" data-country-code="vi"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__vi"></div>
                                                                </div><span class="iti__country-name">U.S. Virgin
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ug" role="option"
                                                                data-dial-code="256" data-country-code="ug"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ug"></div>
                                                                </div><span
                                                                    class="iti__country-name">Uganda</span><span
                                                                    class="iti__dial-code">+256</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ua" role="option"
                                                                data-dial-code="380" data-country-code="ua"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ua"></div>
                                                                </div><span class="iti__country-name">Ukraine
                                                                    (Україна)</span><span
                                                                    class="iti__dial-code">+380</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ae" role="option"
                                                                data-dial-code="971" data-country-code="ae"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ae"></div>
                                                                </div><span class="iti__country-name">United Arab
                                                                    Emirates (‫الإمارات العربية المتحدة‬‎)</span><span
                                                                    class="iti__dial-code">+971</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-gb" role="option"
                                                                data-dial-code="44" data-country-code="gb"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__gb"></div>
                                                                </div><span class="iti__country-name">United
                                                                    Kingdom</span><span
                                                                    class="iti__dial-code">+44</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-us" role="option"
                                                                data-dial-code="1" data-country-code="us"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__us"></div>
                                                                </div><span class="iti__country-name">United
                                                                    States</span><span
                                                                    class="iti__dial-code">+1</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-uy" role="option"
                                                                data-dial-code="598" data-country-code="uy"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__uy"></div>
                                                                </div><span
                                                                    class="iti__country-name">Uruguay</span><span
                                                                    class="iti__dial-code">+598</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-uz" role="option"
                                                                data-dial-code="998" data-country-code="uz"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__uz"></div>
                                                                </div><span class="iti__country-name">Uzbekistan
                                                                    (Oʻzbekiston)</span><span
                                                                    class="iti__dial-code">+998</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-vu" role="option"
                                                                data-dial-code="678" data-country-code="vu"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__vu"></div>
                                                                </div><span
                                                                    class="iti__country-name">Vanuatu</span><span
                                                                    class="iti__dial-code">+678</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-va" role="option"
                                                                data-dial-code="39" data-country-code="va"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__va"></div>
                                                                </div><span class="iti__country-name">Vatican City
                                                                    (Città del Vaticano)</span><span
                                                                    class="iti__dial-code">+39</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ve" role="option"
                                                                data-dial-code="58" data-country-code="ve"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ve"></div>
                                                                </div><span
                                                                    class="iti__country-name">Venezuela</span><span
                                                                    class="iti__dial-code">+58</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-vn" role="option"
                                                                data-dial-code="84" data-country-code="vn"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__vn"></div>
                                                                </div><span class="iti__country-name">Vietnam (Việt
                                                                    Nam)</span><span class="iti__dial-code">+84</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-wf" role="option"
                                                                data-dial-code="681" data-country-code="wf"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__wf"></div>
                                                                </div><span class="iti__country-name">Wallis and
                                                                    Futuna (Wallis-et-Futuna)</span><span
                                                                    class="iti__dial-code">+681</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-eh" role="option"
                                                                data-dial-code="212" data-country-code="eh"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__eh"></div>
                                                                </div><span class="iti__country-name">Western Sahara
                                                                    (‫الصحراء الغربية‬‎)</span><span
                                                                    class="iti__dial-code">+212</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ye" role="option"
                                                                data-dial-code="967" data-country-code="ye"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ye"></div>
                                                                </div><span class="iti__country-name">Yemen
                                                                    (‫اليمن‬‎)</span><span
                                                                    class="iti__dial-code">+967</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-zm" role="option"
                                                                data-dial-code="260" data-country-code="zm"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__zm"></div>
                                                                </div><span
                                                                    class="iti__country-name">Zambia</span><span
                                                                    class="iti__dial-code">+260</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-zw" role="option"
                                                                data-dial-code="263" data-country-code="zw"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__zw"></div>
                                                                </div><span
                                                                    class="iti__country-name">Zimbabwe</span><span
                                                                    class="iti__dial-code">+263</span>
                                                            </li>
                                                            <li class="iti__country iti__standard" tabindex="-1"
                                                                id="iti-0__item-ax" role="option"
                                                                data-dial-code="358" data-country-code="ax"
                                                                aria-selected="false">
                                                                <div class="iti__flag-box">
                                                                    <div class="iti__flag iti__ax"></div>
                                                                </div><span class="iti__country-name">Åland
                                                                    Islands</span><span
                                                                    class="iti__dial-code">+358</span>
                                                            </li>
                                                        </ul>
                                                    </div><input type="tel" name="telefono" value=""
                                                        id="telefono"
                                                        class="text-left typ-os-regular txt-gray  form-control f-sz-s myBorderRadius pl-4"
                                                        placeholder="Telefono" required="" autocomplete="off"
                                                        data-intl-tel-input-id="0" style="padding-left: 83px;">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- sector -->
                                        <div class="col-12 col-md-10" align="left">
                                            <div class="form-group">
                                                <select name="sector" id="sector"
                                                    style="text-align-last:left;height: 85%;background-color: white;"
                                                    class="text-left typ-os-regular txt-gray f-sz-s form-control myBorderRadius pl-4 mySector"
                                                    placeholder="Sector" required="">

                                                    <option class="text-left f-sz-s" value="">Sector</option>

                                                    <option class="text-left f-sz-s"
                                                        value="Marketing / Publicidad / Comunicación">
                                                        Marketing / Publicidad / Comunicación
                                                    </option>

                                                    <option class="text-left f-sz-s"
                                                        value="Tecnología / Telecomunicaciones">
                                                        Tecnología / Telecomunicaciones
                                                    </option>

                                                    <option class="text-left f-sz-s"
                                                        value="Servicios / Consultor / Financiero / Jurídico">
                                                        Servicios / Consultor / Financiero / Jurídico
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Turismo">
                                                        Turismo
                                                    </option>

                                                    <option class="text-left f-sz-s"
                                                        value="Construcción / Inmobiliaria">
                                                        Construcción / Inmobiliaria
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Comercialización">
                                                        Comercialización
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Fabricantes">
                                                        Fabricantes
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Salud">
                                                        Salud
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Logística / Transporte">
                                                        Logística / Transporte
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Educación">
                                                        Educación
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Maquinaria">
                                                        Maquinaria
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Soy Estudiante">
                                                        Soy Estudiante
                                                    </option>

                                                    <option class="text-left f-sz-s" value="Otros">
                                                        Otros
                                                    </option>

                                                </select>
                                            </div>
                                        </div>


                                        <!-- cuantas   personas utilizaran DataCRM -->

                                        <div class="col-12 col-md-10" align="left">
                                            <div class="form-group">
                                                <select name="personas" id="personas"
                                                    style="text-align-last:left;height: 85%;background-color: white;"
                                                    class="text-left typ-os-regular txt-gray mt-2 f-sz-s form-control myBorderRadius pl-4"
                                                    required="">
                                                    <option value="">¿Cuántas personas utilizarán DataCRM?
                                                    </option>
                                                    <option class="text-left" value="1">1 a 2</option>
                                                    <option class="text-left" value="3">3 a 9</option>
                                                    <option class="text-left" value="10">10 a 50</option>
                                                    <option class="text-left" value="50">Más de 50</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-12 col-md-6" align="center">
                                            <!-- Boton comencemos -->
                                            <button type="submit"
                                                class="btn
                                                    p-2
                                                    typ-os-regular
                                                    f-sz-sm
                                                    mt-3
                                                    btn-orange
                                                    effect-zoom
                                                    form-control
                                                    ">
                                                <b>¡Comencemos!</b>
                                            </button>
                                        </div>
                                        <input type="hidden" name="city3" value="" id="city3">
                                        <input type="hidden" name="countryName3" value="Colombia"
                                            id="countryName3">

                                    </div>
                                </form>
                            </div>
                            <div style="min-height: 10%; max-height: 10%;">
                                <div class="col-12 mt-4 justify-content-center text-center align-items-center">
                                    <p class="typ-os-regular f-sz-s">
                                        Al comenzar gratis aceptas nuestros

                                        <!-- Politicas de privacidad -->

                                        <a href="https://www.datacrm.com/politicas/"
                                            class="txt-greenblue f-sz-sx typ-os-regula" target="_blank"
                                            style="font-weight: 600;">
                                            Políticas de Privacidad
                                        </a>

                                        y

                                        <!-- Terminos de servicio -->
                                        <a href="https://www.datacrm.com/terminos/"
                                            class="txt-greenblue f-sz-sx typ-os-regular" target="_blank"
                                            style="font-weight: 600;">
                                            Terminos de Servicio
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 d-none d-lg-block" style="border-left: 1px solid gray;">

                            <div style="min-height: 80%; max-height: 80%;">
                                <p class="typ-montserrat f-sz-m txt-greenblue font-weight-bold ">
                                    ¿Qué encontrarás en esta prueba gratuita?
                                </p>
                                <ul class="f-sz-sm myList text-left" id="myList">
                                    <li>
                                        <div class="row" style="max-height: 2rem !important;">
                                            <div class="col-1">
                                                <i class="fa-solid fa-circle-check txt-greenblue f-sz-mx"></i>
                                            </div>
                                            <div class="col">
                                                <p>Integración nativa con Whatsapp</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row mt-4">
                                            <div class="col-1">
                                                <i class="fa-solid fa-circle-check txt-greenblue f-sz-mx"></i>
                                            </div>
                                            <div class="col">
                                                Páginas de aterrizaje (Landing pages)
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row mt-4">
                                            <div class="col-1">
                                                <i class="fa-solid fa-circle-check txt-greenblue f-sz-mx"></i>
                                            </div>
                                            <div class="col">
                                                Plantillas de cotización personalizadas
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row mt-4">
                                            <div class="col-1">
                                                <i class="fa-solid fa-circle-check txt-greenblue f-sz-mx"></i>
                                            </div>
                                            <div class="col">
                                                Indicadores en tiempo real para garantizar la efectividad de tu equipo
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div style="min-height: 10%; max-height: 10%;">
                                <div style="margin-bottom: -2rem;"
                                    class="col-12 justify-content-center text-center align-items-center mt-4">
                                    <!-- ¿Ya tienes una cuenta?  -->
                                    <span class="typ-os-regular f-sz-s">
                                        <p class="">
                                            ¿Ya tienes una cuenta?
                                            <br>
                                            <!-- Inicia sesión -->
                                            <a href="https://www.datacrm.com/iniciar-sesion" target="_blank"
                                                class="txt-greenblue f-sz-s font-weight-bold"
                                                style="text-decoration-line: underline;">

                                                Inicia sesión aquí
                                            </a>
                                        </p>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>






                <div class="modal-content myModelMail mx-auto p-3 justify-content-center text-center align-items-center"
                    id="modalemail2" style="display: none;">

                    <div class="modal-header pt-0 pb-0">


                        <button type="button" class="close" style="color: black !important;"
                            data-dismiss="modal" aria-label="Close" id="btnModalClose">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>

                    <div class="row  myModelMail modal-body justify-content-center text-center align-items-center "
                        style="min-height: 165px; max-height: 300px;">

                        <div class="col-12 col-lg-6 d-none d-lg-block">
                            <picture>

                                <source media="(min-width: 321px)" type="image/webp"
                                    srcset="https://www.datacrm.com/front/images/ya_tienes_una_cuenta600x539.webp">
                                <source media="(max-width: 320px)" type="image/webp"
                                    srcset="https://www.datacrm.com/front/images/ya_tienes_una_cuenta320x287.webp">

                                <img src="./CRM Móvil para la administración de ventas_files/ya_tienes_una_cuenta600x539.webp"
                                    alt="Ya tienes una cuenta con DataCRM" class="img-fluid" width="300"
                                    height="269" loading="lazy">
                            </picture>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="col-12">
                                <p>
                                    <span class="text-center m-0 f-sz-b font-weight-bold txt-greenblue">

                                        Hola, te reconocimos!
                                    </span>
                                    <br>
                                </p>
                            </div>
                            <br>
                            <div class="col-12">
                                <center>
                                    <!-- INICIAR SESIÓN -->
                                    <a style="text-decoration: none; padding: 10px; font-weight: 600;font-size: 20px;color: #ffffff; background-color: #f58756; border-radius: 6px; width: 20px;"
                                        class="boton_personalizado" id="access_crm" target="_blank"
                                        href="https://www.datacrm.com/">
                                        Iniciar sesión
                                    </a>
                                </center>
                            </div>
                            <br>
                            <!-- Recupera tu contraseña Aquí -->
                            <div class="col-12">
                                <a class="txt-greenblue font-weight-normal" href="https://www.datacrm.com/"
                                    id="recover_password" style="text-decoration: none;font-size: 1.2em;"
                                    target="_blank" rel="noopener noreferrer">

                                    ¿Olvidaste la contraseña?
                                </a>
                            </div>

                            <div class="col-12">
                                <p class="typ-os-regular f-sz-s mt-4 text-center mb-0">

                                    He leido y estoy de acuerdo con los

                                    <a href="https://www.datacrm.com/terminos" target="_blank"
                                        rel="noopener noreferrer" class="txt-greenblue">
                                        Términos de servicios
                                    </a>
                                    y
                                    <!-- <a href="https://www.datacrm.com/politicas/" target="_blank" rel="noopener noreferrer">las Políticas de Protección de Datos</a></b>                         -->
                                    <a href="https://www.datacrm.com/politicas" target="_blank"
                                        rel="noopener noreferrer" class="txt-greenblue">
                                        Políticas de privacidad
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">

                    </div>

                </div>




                <div class="row mt-lg-0 mt-5 ml-sm-2">
                    <div class="modal-content myModelMail mx-auto justify-content-center text-center align-items-center"
                        id="modalloading" style="display: none; max-width: 70rem !important">

                        <p class="mt-4 f-sz-m font-weight-bold">Estamos creando tu cuenta...</p>
                        <p class="mt-4 f-sz-sx">Hemos enviado los datos de acceso a tu correo electrónico, si no los
                            encuentras revisa en Spam o escríbenos info@datacrm.com</p>
                        <div>



                            <img class="img-fluid" id="gif_loader3"
                                src="./CRM Móvil para la administración de ventas_files/crear-cuenta.gif"
                                loading="lazy">

                        </div>
                    </div>
                </div>


                <div class="row mt-lg-0 mt-5 ml-sm-2">
                    <div class="modal-content  mx-auto justify-content-center text-center align-items-center"
                        id="modalMobile3" style="display: none;">
                        <div class="modal-header mb-4"
                            style="padding: 0 !important; margin: 0 !important; border: 0 !important;">
                            <button onclick="isMobile()" type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <!-- ¡Información actualizada a donde vayas! -->
                        <p style="color: #3e6aab !important; font-weight: bold;"
                            class="text-uppercase text-center mb-4 txt-blackgray typ-montserrat f-sz-b">
                            ¡Información actualizada a donde vayas!<br>
                        </p>
                        <!--
                        Caracacteristicas
                            Visualiza y edita tus Negocios
                            Crea Actividades
                            Envía correos
                            Llama a tus Clientes
                    -->
                        <ul id="app_info" class="mb-4">
                            <li>Visualiza y edita tus <strong>Negocios</strong></li>
                            <li>Crea <strong>Actividades</strong></li>
                            <li><strong>Envía</strong> correos</li>
                            <li><strong>Llama</strong> a tus Clientes</li>
                        </ul>

                        <div class="text-center mb-4" style="overflow: hidden; height: 120px;">
                            <img src="./CRM Móvil para la administración de ventas_files/GIF3.gif" width="70%"
                                loading="lazy">
                        </div>
                        <!-- Descarga -->
                        <a id="descarga_app" onclick="isMobile()"
                            class="btn btn-orange txt-white text-uppercase mb-4 f-sz-s btn-sm btn-free"
                            href="https://www.datacrm.com/crm-movil/">
                            <b>DESCARGA DataCRM MOVIL</b>
                        </a>
                        <!-- No me interesa -->
                        <div onclick="isMobile()" class="text-center text-muted mb-5 mt-5"
                            style="cursor: pointer;" id="noMeInteresa" data-dismiss="modal" aria-label="Close">
                            No me interesa
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <script>
            $(document).ready(function() {

                $('#telefono').on('input', function() {

                });

            });
        </script>



        <link rel="stylesheet" href="./CRM Móvil para la administración de ventas_files/intlTelInput.min.css"
            async="">
        <script src="{{ asset('js/intlTelInput.min.js') }}"></script>
        <script>
            $(document).ready(function() {

                const inputTel = document.querySelector("#telefono");
                const iti = window.intlTelInput(inputTel, {
                    utilsScript: "https://www.datacrm.com/vendors/intl-tel-input-18.2.1/js/utils.js",
                    autoInsertDialCode: true,
                    preferredCountries: ['co', 'mx'],
                    nationalMode: true,
                    separateDialCode: true,
                    initialCountry: "auto",
                    geoIpLookup: callback => {
                        fetch("https://ipapi.co/json")
                            .then(res => res.json())
                            .then(data => {
                                let myTemp = nombrePais(data.country)
                                data.country_name = myTemp == "" ? data.country_name : myTemp;

                                // if (data.country == "US") {
                                // data.country_name ="Estados Unidos";
                                // }
                                // console.log(JSON.stringify(data));
                                $('#city3').val(data.city);
                                $('#countryName3').val(data.country_name);
                                callback(data.country_code)
                            })
                            .catch(() => callback("us"));
                    },
                    localizedCountries: {
                        USA: "Estados unidos",
                    },
                });
                window.iti = iti;

                window.addEventListener("countrychange", function() {
                    // do something with iti.getSelectedCountryData()

                    let myCountryData = iti.getSelectedCountryData();
                    let myTemp = nombrePais(iti.getSelectedCountryData().iso2.toUpperCase());

                    $('#city3').val('');
                    $('#countryName3').val(myTemp);

                });

                $("#modalPruebaGratis3").on('show.bs.modal', function() {
                    // console.log('la plataforma es ->' + detectaPlataforma());
                    /*
                    switch(detectaPlataforma()){
                        case "Android OS":
                            window.location.href="https://play.google.com/store/apps/details?id=com.datacrm.application";
                            break;
                        case "iOS":
                            window.location.href="https://itunes.apple.com/us/app/datacrm/id1437186766?mt=8";
                            break;
                        }
                        */
                });

            });
        </script>
        <script>
            (function() {
                'use strict'

                // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
                var forms = document.querySelectorAll('.needs-validation')

                // Bucle sobre ellos y evitar el envío
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {

                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                                $(".myinvalid").fadeIn();

                                let myNombreApellidos = "Nombre y apellido *";
                                let myCompany = "Compañía *";
                                let myEmail = "Correo electrónico empresarial *";
                                let myTelefono = "Telefono *";
                                let mySector = "Sector *";
                                let myPersonas = "¿Cuántas personas utilizarán DataCRM? *"

                                $("#nombreapellidos").attr("placeholder", myNombreApellidos);
                                $("#company").attr("placeholder", myCompany);
                                $("#email").attr("placeholder", myEmail);
                                $("#telefono").attr("placeholder", myTelefono);
                                $("#sector").attr("placeholder", "test");
                                $("#personas").attr("placeholder", myPersonas);
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()


            function nombrePais(myCountryCode = "") {
                let myCountries = [{
                        "nombre": "Afganistán",
                        "name": "Afghanistan",
                        "nom": "Afghanistan",
                        "iso2": "AF",
                        "iso3": "AFG",
                        "phone_code": 93
                    },
                    {
                        "nombre": "Albania",
                        "name": "Albania",
                        "nom": "Albanie",
                        "iso2": "AL",
                        "iso3": "ALB",
                        "phone_code": 355
                    },
                    {
                        "nombre": "Alemania",
                        "name": "Germany",
                        "nom": "Allemagne",
                        "iso2": "DE",
                        "iso3": "DEU",
                        "phone_code": 49
                    },
                    {
                        "nombre": "Andorra",
                        "name": "Andorra",
                        "nom": "Andorra",
                        "iso2": "AD",
                        "iso3": "AND",
                        "phone_code": 376
                    },
                    {
                        "nombre": "Angola",
                        "name": "Angola",
                        "nom": "Angola",
                        "iso2": "AO",
                        "iso3": "AGO",
                        "phone_code": 244
                    },
                    {
                        "nombre": "Anguila",
                        "name": "Anguilla",
                        "nom": "Anguilla",
                        "iso2": "AI",
                        "iso3": "AIA",
                        "phone_code": 1264
                    },
                    {
                        "nombre": "Antártida",
                        "name": "Antarctica",
                        "nom": "L'Antarctique",
                        "iso2": "AQ",
                        "iso3": "ATA",
                        "phone_code": 672
                    },
                    {
                        "nombre": "Antigua y Barbuda",
                        "name": "Antigua and Barbuda",
                        "nom": "Antigua et Barbuda",
                        "iso2": "AG",
                        "iso3": "ATG",
                        "phone_code": 1268
                    },
                    {
                        "nombre": "Arabia Saudita",
                        "name": "Saudi Arabia",
                        "nom": "Arabie Saoudite",
                        "iso2": "SA",
                        "iso3": "SAU",
                        "phone_code": 966
                    },
                    {
                        "nombre": "Argelia",
                        "name": "Algeria",
                        "nom": "Algérie",
                        "iso2": "DZ",
                        "iso3": "DZA",
                        "phone_code": 213
                    },
                    {
                        "nombre": "Argentina",
                        "name": "Argentina",
                        "nom": "Argentine",
                        "iso2": "AR",
                        "iso3": "ARG",
                        "phone_code": 54
                    },
                    {
                        "nombre": "Armenia",
                        "name": "Armenia",
                        "nom": "L'Arménie",
                        "iso2": "AM",
                        "iso3": "ARM",
                        "phone_code": 374
                    },
                    {
                        "nombre": "Aruba",
                        "name": "Aruba",
                        "nom": "Aruba",
                        "iso2": "AW",
                        "iso3": "ABW",
                        "phone_code": 297
                    },
                    {
                        "nombre": "Australia",
                        "name": "Australia",
                        "nom": "Australie",
                        "iso2": "AU",
                        "iso3": "AUS",
                        "phone_code": 61
                    },
                    {
                        "nombre": "Austria",
                        "name": "Austria",
                        "nom": "Autriche",
                        "iso2": "AT",
                        "iso3": "AUT",
                        "phone_code": 43
                    },
                    {
                        "nombre": "Azerbaiyán",
                        "name": "Azerbaijan",
                        "nom": "L'Azerbaïdjan",
                        "iso2": "AZ",
                        "iso3": "AZE",
                        "phone_code": 994
                    },
                    {
                        "nombre": "Bélgica",
                        "name": "Belgium",
                        "nom": "Belgique",
                        "iso2": "BE",
                        "iso3": "BEL",
                        "phone_code": 32
                    },
                    {
                        "nombre": "Bahamas",
                        "name": "Bahamas",
                        "nom": "Bahamas",
                        "iso2": "BS",
                        "iso3": "BHS",
                        "phone_code": 1242
                    },
                    {
                        "nombre": "Bahrein",
                        "name": "Bahrain",
                        "nom": "Bahreïn",
                        "iso2": "BH",
                        "iso3": "BHR",
                        "phone_code": 973
                    },
                    {
                        "nombre": "Bangladesh",
                        "name": "Bangladesh",
                        "nom": "Bangladesh",
                        "iso2": "BD",
                        "iso3": "BGD",
                        "phone_code": 880
                    },
                    {
                        "nombre": "Barbados",
                        "name": "Barbados",
                        "nom": "Barbade",
                        "iso2": "BB",
                        "iso3": "BRB",
                        "phone_code": "1 246"
                    },
                    {
                        "nombre": "Belice",
                        "name": "Belize",
                        "nom": "Belize",
                        "iso2": "BZ",
                        "iso3": "BLZ",
                        "phone_code": 501
                    },
                    {
                        "nombre": "Benín",
                        "name": "Benin",
                        "nom": "Bénin",
                        "iso2": "BJ",
                        "iso3": "BEN",
                        "phone_code": 229
                    },
                    {
                        "nombre": "Bhután",
                        "name": "Bhutan",
                        "nom": "Le Bhoutan",
                        "iso2": "BT",
                        "iso3": "BTN",
                        "phone_code": 975
                    },
                    {
                        "nombre": "Bielorrusia",
                        "name": "Belarus",
                        "nom": "Biélorussie",
                        "iso2": "BY",
                        "iso3": "BLR",
                        "phone_code": 375
                    },
                    {
                        "nombre": "Birmania",
                        "name": "Myanmar",
                        "nom": "Myanmar",
                        "iso2": "MM",
                        "iso3": "MMR",
                        "phone_code": 95
                    },
                    {
                        "nombre": "Bolivia",
                        "name": "Bolivia",
                        "nom": "Bolivie",
                        "iso2": "BO",
                        "iso3": "BOL",
                        "phone_code": 591
                    },
                    {
                        "nombre": "Bosnia y Herzegovina",
                        "name": "Bosnia and Herzegovina",
                        "nom": "Bosnie-Herzégovine",
                        "iso2": "BA",
                        "iso3": "BIH",
                        "phone_code": 387
                    },
                    {
                        "nombre": "Botsuana",
                        "name": "Botswana",
                        "nom": "Botswana",
                        "iso2": "BW",
                        "iso3": "BWA",
                        "phone_code": 267
                    },
                    {
                        "nombre": "Brasil",
                        "name": "Brazil",
                        "nom": "Brésil",
                        "iso2": "BR",
                        "iso3": "BRA",
                        "phone_code": 55
                    },
                    {
                        "nombre": "Brunéi",
                        "name": "Brunei",
                        "nom": "Brunei",
                        "iso2": "BN",
                        "iso3": "BRN",
                        "phone_code": 673
                    },
                    {
                        "nombre": "Bulgaria",
                        "name": "Bulgaria",
                        "nom": "Bulgarie",
                        "iso2": "BG",
                        "iso3": "BGR",
                        "phone_code": 359
                    },
                    {
                        "nombre": "Burkina Faso",
                        "name": "Burkina Faso",
                        "nom": "Burkina Faso",
                        "iso2": "BF",
                        "iso3": "BFA",
                        "phone_code": 226
                    },
                    {
                        "nombre": "Burundi",
                        "name": "Burundi",
                        "nom": "Burundi",
                        "iso2": "BI",
                        "iso3": "BDI",
                        "phone_code": 257
                    },
                    {
                        "nombre": "Cabo Verde",
                        "name": "Cape Verde",
                        "nom": "Cap-Vert",
                        "iso2": "CV",
                        "iso3": "CPV",
                        "phone_code": 238
                    },
                    {
                        "nombre": "Camboya",
                        "name": "Cambodia",
                        "nom": "Cambodge",
                        "iso2": "KH",
                        "iso3": "KHM",
                        "phone_code": 855
                    },
                    {
                        "nombre": "Camerún",
                        "name": "Cameroon",
                        "nom": "Cameroun",
                        "iso2": "CM",
                        "iso3": "CMR",
                        "phone_code": 237
                    },
                    {
                        "nombre": "Canadá",
                        "name": "Canada",
                        "nom": "Canada",
                        "iso2": "CA",
                        "iso3": "CAN",
                        "phone_code": 1
                    },
                    {
                        "nombre": "Chad",
                        "name": "Chad",
                        "nom": "Tchad",
                        "iso2": "TD",
                        "iso3": "TCD",
                        "phone_code": 235
                    },
                    {
                        "nombre": "Chile",
                        "name": "Chile",
                        "nom": "Chili",
                        "iso2": "CL",
                        "iso3": "CHL",
                        "phone_code": 56
                    },
                    {
                        "nombre": "China",
                        "name": "China",
                        "nom": "Chine",
                        "iso2": "CN",
                        "iso3": "CHN",
                        "phone_code": 86
                    },
                    {
                        "nombre": "Chipre",
                        "name": "Cyprus",
                        "nom": "Chypre",
                        "iso2": "CY",
                        "iso3": "CYP",
                        "phone_code": 357
                    },
                    {
                        "nombre": "Ciudad del Vaticano",
                        "name": "Vatican City State",
                        "nom": "Cité du Vatican",
                        "iso2": "VA",
                        "iso3": "VAT",
                        "phone_code": 39
                    },
                    {
                        "nombre": "Colombia",
                        "name": "Colombia",
                        "nom": "Colombie",
                        "iso2": "CO",
                        "iso3": "COL",
                        "phone_code": 57
                    },
                    {
                        "nombre": "Comoras",
                        "name": "Comoros",
                        "nom": "Comores",
                        "iso2": "KM",
                        "iso3": "COM",
                        "phone_code": 269
                    },
                    {
                        "nombre": "República del Congo",
                        "name": "Republic of the Congo",
                        "nom": "République du Congo",
                        "iso2": "CG",
                        "iso3": "COG",
                        "phone_code": 242
                    },
                    {
                        "nombre": "República Democrática del Congo",
                        "name": "Democratic Republic of the Congo",
                        "nom": "République démocratique du Congo",
                        "iso2": "CD",
                        "iso3": "COD",
                        "phone_code": 243
                    },
                    {
                        "nombre": "Corea del Norte",
                        "name": "North Korea",
                        "nom": "Corée du Nord",
                        "iso2": "KP",
                        "iso3": "PRK",
                        "phone_code": 850
                    },
                    {
                        "nombre": "Corea del Sur",
                        "name": "South Korea",
                        "nom": "Corée du Sud",
                        "iso2": "KR",
                        "iso3": "KOR",
                        "phone_code": 82
                    },
                    {
                        "nombre": "Costa de Marfil",
                        "name": "Ivory Coast",
                        "nom": "Côte-d'Ivoire",
                        "iso2": "CI",
                        "iso3": "CIV",
                        "phone_code": 225
                    },
                    {
                        "nombre": "Costa Rica",
                        "name": "Costa Rica",
                        "nom": "Costa Rica",
                        "iso2": "CR",
                        "iso3": "CRI",
                        "phone_code": 506
                    },
                    {
                        "nombre": "Croacia",
                        "name": "Croatia",
                        "nom": "Croatie",
                        "iso2": "HR",
                        "iso3": "HRV",
                        "phone_code": 385
                    },
                    {
                        "nombre": "Cuba",
                        "name": "Cuba",
                        "nom": "Cuba",
                        "iso2": "CU",
                        "iso3": "CUB",
                        "phone_code": 53
                    },
                    {
                        "nombre": "Curazao",
                        "name": "Curaçao",
                        "nom": "Curaçao",
                        "iso2": "CW",
                        "iso3": "CWU",
                        "phone_code": 5999
                    },
                    {
                        "nombre": "Dinamarca",
                        "name": "Denmark",
                        "nom": "Danemark",
                        "iso2": "DK",
                        "iso3": "DNK",
                        "phone_code": 45
                    },
                    {
                        "nombre": "Dominica",
                        "name": "Dominica",
                        "nom": "Dominique",
                        "iso2": "DM",
                        "iso3": "DMA",
                        "phone_code": 1767
                    },
                    {
                        "nombre": "Ecuador",
                        "name": "Ecuador",
                        "nom": "Equateur",
                        "iso2": "EC",
                        "iso3": "ECU",
                        "phone_code": 593
                    },
                    {
                        "nombre": "Egipto",
                        "name": "Egypt",
                        "nom": "Egypte",
                        "iso2": "EG",
                        "iso3": "EGY",
                        "phone_code": 20
                    },
                    {
                        "nombre": "El Salvador",
                        "name": "El Salvador",
                        "nom": "El Salvador",
                        "iso2": "SV",
                        "iso3": "SLV",
                        "phone_code": 503
                    },
                    {
                        "nombre": "Emiratos Árabes Unidos",
                        "name": "United Arab Emirates",
                        "nom": "Emirats Arabes Unis",
                        "iso2": "AE",
                        "iso3": "ARE",
                        "phone_code": 971
                    },
                    {
                        "nombre": "Eritrea",
                        "name": "Eritrea",
                        "nom": "Erythrée",
                        "iso2": "ER",
                        "iso3": "ERI",
                        "phone_code": 291
                    },
                    {
                        "nombre": "Eslovaquia",
                        "name": "Slovakia",
                        "nom": "Slovaquie",
                        "iso2": "SK",
                        "iso3": "SVK",
                        "phone_code": 421
                    },
                    {
                        "nombre": "Eslovenia",
                        "name": "Slovenia",
                        "nom": "Slovénie",
                        "iso2": "SI",
                        "iso3": "SVN",
                        "phone_code": 386
                    },
                    {
                        "nombre": "Spain",
                        "name": "Spain",
                        "nom": "Espagne",
                        "iso2": "ES",
                        "iso3": "ESP",
                        "phone_code": 34
                    },
                    {
                        "nombre": "Estados Unidos",
                        "name": "United States of America",
                        "nom": "États-Unis d'Amérique",
                        "iso2": "US",
                        "iso3": "USA",
                        "phone_code": 1
                    },
                    {
                        "nombre": "Estonia",
                        "name": "Estonia",
                        "nom": "L'Estonie",
                        "iso2": "EE",
                        "iso3": "EST",
                        "phone_code": 372
                    },
                    {
                        "nombre": "Etiopía",
                        "name": "Ethiopia",
                        "nom": "Ethiopie",
                        "iso2": "ET",
                        "iso3": "ETH",
                        "phone_code": 251
                    },
                    {
                        "nombre": "Filipinas",
                        "name": "Philippines",
                        "nom": "Philippines",
                        "iso2": "PH",
                        "iso3": "PHL",
                        "phone_code": 63
                    },
                    {
                        "nombre": "Finlandia",
                        "name": "Finland",
                        "nom": "Finlande",
                        "iso2": "FI",
                        "iso3": "FIN",
                        "phone_code": 358
                    },
                    {
                        "nombre": "Fiyi",
                        "name": "Fiji",
                        "nom": "Fidji",
                        "iso2": "FJ",
                        "iso3": "FJI",
                        "phone_code": 679
                    },
                    {
                        "nombre": "Francia",
                        "name": "France",
                        "nom": "France",
                        "iso2": "FR",
                        "iso3": "FRA",
                        "phone_code": 33
                    },
                    {
                        "nombre": "Gabón",
                        "name": "Gabon",
                        "nom": "Gabon",
                        "iso2": "GA",
                        "iso3": "GAB",
                        "phone_code": 241
                    },
                    {
                        "nombre": "Gambia",
                        "name": "Gambia",
                        "nom": "Gambie",
                        "iso2": "GM",
                        "iso3": "GMB",
                        "phone_code": 220
                    },
                    {
                        "nombre": "Georgia",
                        "name": "Georgia",
                        "nom": "Géorgie",
                        "iso2": "GE",
                        "iso3": "GEO",
                        "phone_code": 995
                    },
                    {
                        "nombre": "Ghana",
                        "name": "Ghana",
                        "nom": "Ghana",
                        "iso2": "GH",
                        "iso3": "GHA",
                        "phone_code": 233
                    },
                    {
                        "nombre": "Gibraltar",
                        "name": "Gibraltar",
                        "nom": "Gibraltar",
                        "iso2": "GI",
                        "iso3": "GIB",
                        "phone_code": 350
                    },
                    {
                        "nombre": "Granada",
                        "name": "Grenada",
                        "nom": "Grenade",
                        "iso2": "GD",
                        "iso3": "GRD",
                        "phone_code": "1 473"
                    },
                    {
                        "nombre": "Grecia",
                        "name": "Greece",
                        "nom": "Grèce",
                        "iso2": "GR",
                        "iso3": "GRC",
                        "phone_code": 30
                    },
                    {
                        "nombre": "Groenlandia",
                        "name": "Greenland",
                        "nom": "Groenland",
                        "iso2": "GL",
                        "iso3": "GRL",
                        "phone_code": 299
                    },
                    {
                        "nombre": "Guadalupe",
                        "name": "Guadeloupe",
                        "nom": "Guadeloupe",
                        "iso2": "GP",
                        "iso3": "GLP",
                        "phone_code": 590
                    },
                    {
                        "nombre": "Guam",
                        "name": "Guam",
                        "nom": "Guam",
                        "iso2": "GU",
                        "iso3": "GUM",
                        "phone_code": "1 671"
                    },
                    {
                        "nombre": "Guatemala",
                        "name": "Guatemala",
                        "nom": "Guatemala",
                        "iso2": "GT",
                        "iso3": "GTM",
                        "phone_code": 502
                    },
                    {
                        "nombre": "Guayana Francesa",
                        "name": "French Guiana",
                        "nom": "Guyane française",
                        "iso2": "GF",
                        "iso3": "GUF",
                        "phone_code": 594
                    },
                    {
                        "nombre": "Guernsey",
                        "name": "Guernsey",
                        "nom": "Guernesey",
                        "iso2": "GG",
                        "iso3": "GGY",
                        "phone_code": 44
                    },
                    {
                        "nombre": "Guinea",
                        "name": "Guinea",
                        "nom": "Guinée",
                        "iso2": "GN",
                        "iso3": "GIN",
                        "phone_code": 224
                    },
                    {
                        "nombre": "Guinea Ecuatorial",
                        "name": "Equatorial Guinea",
                        "nom": "Guinée Equatoriale",
                        "iso2": "GQ",
                        "iso3": "GNQ",
                        "phone_code": 240
                    },
                    {
                        "nombre": "Guinea-Bissau",
                        "name": "Guinea-Bissau",
                        "nom": "Guinée-Bissau",
                        "iso2": "GW",
                        "iso3": "GNB",
                        "phone_code": 245
                    },
                    {
                        "nombre": "Guyana",
                        "name": "Guyana",
                        "nom": "Guyane",
                        "iso2": "GY",
                        "iso3": "GUY",
                        "phone_code": 592
                    },
                    {
                        "nombre": "Haiti",
                        "name": "Haiti",
                        "nom": "Haïti",
                        "iso2": "HT",
                        "iso3": "HTI",
                        "phone_code": 509
                    },
                    {
                        "nombre": "Honduras",
                        "name": "Honduras",
                        "nom": "Honduras",
                        "iso2": "HN",
                        "iso3": "HND",
                        "phone_code": 504
                    },
                    {
                        "nombre": "Hong kong",
                        "name": "Hong Kong",
                        "nom": "Hong Kong",
                        "iso2": "HK",
                        "iso3": "HKG",
                        "phone_code": 852
                    },
                    {
                        "nombre": "Hungria",
                        "name": "Hungary",
                        "nom": "Hongrie",
                        "iso2": "HU",
                        "iso3": "HUN",
                        "phone_code": 36
                    },
                    {
                        "nombre": "India",
                        "name": "India",
                        "nom": "Inde",
                        "iso2": "IN",
                        "iso3": "IND",
                        "phone_code": 91
                    },
                    {
                        "nombre": "Indonesia",
                        "name": "Indonesia",
                        "nom": "Indonésie",
                        "iso2": "ID",
                        "iso3": "IDN",
                        "phone_code": 62
                    },
                    {
                        "nombre": "Iran",
                        "name": "Iran",
                        "nom": "Iran",
                        "iso2": "IR",
                        "iso3": "IRN",
                        "phone_code": 98
                    },
                    {
                        "nombre": "Irak",
                        "name": "Iraq",
                        "nom": "Irak",
                        "iso2": "IQ",
                        "iso3": "IRQ",
                        "phone_code": 964
                    },
                    {
                        "nombre": "Irlanda",
                        "name": "Ireland",
                        "nom": "Irlande",
                        "iso2": "IE",
                        "iso3": "IRL",
                        "phone_code": 353
                    },
                    {
                        "nombre": "Isla Bouvet",
                        "name": "Bouvet Island",
                        "nom": "Bouvet Island",
                        "iso2": "BV",
                        "iso3": "BVT",
                        "phone_code": 0
                    },
                    {
                        "nombre": "Isla de Man",
                        "name": "Isle of Man",
                        "nom": "Ile de Man",
                        "iso2": "IM",
                        "iso3": "IMN",
                        "phone_code": 44
                    },
                    {
                        "nombre": "Isla de Navidad",
                        "name": "Christmas Island",
                        "nom": "Christmas Island",
                        "iso2": "CX",
                        "iso3": "CXR",
                        "phone_code": 61
                    },
                    {
                        "nombre": "Isla Norfolk",
                        "name": "Norfolk Island",
                        "nom": "Île de Norfolk",
                        "iso2": "NF",
                        "iso3": "NFK",
                        "phone_code": 672
                    },
                    {
                        "nombre": "Islandia",
                        "name": "Iceland",
                        "nom": "Islande",
                        "iso2": "IS",
                        "iso3": "ISL",
                        "phone_code": 354
                    },
                    {
                        "nombre": "Islas Bermudas",
                        "name": "Bermuda Islands",
                        "nom": "Bermudes",
                        "iso2": "BM",
                        "iso3": "BMU",
                        "phone_code": "1 441"
                    },
                    {
                        "nombre": "Islas Caimán",
                        "name": "Cayman Islands",
                        "nom": "Iles Caïmans",
                        "iso2": "KY",
                        "iso3": "CYM",
                        "phone_code": "1 345"
                    },
                    {
                        "nombre": "Islas Cocos (Keeling)",
                        "name": "Cocos (Keeling) Islands",
                        "nom": "Cocos (Keeling",
                        "iso2": "CC",
                        "iso3": "CCK",
                        "phone_code": 61
                    },
                    {
                        "nombre": "Islas Cook",
                        "name": "Cook Islands",
                        "nom": "Iles Cook",
                        "iso2": "CK",
                        "iso3": "COK",
                        "phone_code": 682
                    },
                    {
                        "nombre": "Islas de Åland",
                        "name": "Åland Islands",
                        "nom": "Îles Åland",
                        "iso2": "AX",
                        "iso3": "ALA",
                        "phone_code": 358
                    },
                    {
                        "nombre": "Islas Feroe",
                        "name": "Faroe Islands",
                        "nom": "Iles Féro",
                        "iso2": "FO",
                        "iso3": "FRO",
                        "phone_code": 298
                    },
                    {
                        "nombre": "Islas Georgias del Sur y Sandwich del Sur",
                        "name": "South Georgia and the South Sandwich Islands",
                        "nom": "Géorgie du Sud et les Îles Sandwich du Sud",
                        "iso2": "GS",
                        "iso3": "SGS",
                        "phone_code": 500
                    },
                    {
                        "nombre": "Islas Heard y McDonald",
                        "name": "Heard Island and McDonald Islands",
                        "nom": "Les îles Heard et McDonald",
                        "iso2": "HM",
                        "iso3": "HMD",
                        "phone_code": 0
                    },
                    {
                        "nombre": "Islas Maldivas",
                        "name": "Maldives",
                        "nom": "Maldives",
                        "iso2": "MV",
                        "iso3": "MDV",
                        "phone_code": 960
                    },
                    {
                        "nombre": "Islas Malvinas",
                        "name": "Falkland Islands (Malvinas)",
                        "nom": "Iles Falkland (Malvinas",
                        "iso2": "FK",
                        "iso3": "FLK",
                        "phone_code": 500
                    },
                    {
                        "nombre": "Islas Marianas del Norte",
                        "name": "Northern Mariana Islands",
                        "nom": "Iles Mariannes du Nord",
                        "iso2": "MP",
                        "iso3": "MNP",
                        "phone_code": "1 670"
                    },
                    {
                        "nombre": "Islas Marshall",
                        "name": "Marshall Islands",
                        "nom": "Iles Marshall",
                        "iso2": "MH",
                        "iso3": "MHL",
                        "phone_code": 692
                    },
                    {
                        "nombre": "Islas Pitcairn",
                        "name": "Pitcairn Islands",
                        "nom": "Iles Pitcairn",
                        "iso2": "PN",
                        "iso3": "PCN",
                        "phone_code": 870
                    },
                    {
                        "nombre": "Islas Salomón",
                        "name": "Solomon Islands",
                        "nom": "Iles Salomon",
                        "iso2": "SB",
                        "iso3": "SLB",
                        "phone_code": 677
                    },
                    {
                        "nombre": "Islas Turcas y Caicos",
                        "name": "Turks and Caicos Islands",
                        "nom": "Iles Turques et Caïques",
                        "iso2": "TC",
                        "iso3": "TCA",
                        "phone_code": "1 649"
                    },
                    {
                        "nombre": "Islas Ultramarinas Menores de Estados Unidos",
                        "name": "United States Minor Outlying Islands",
                        "nom": "États-Unis Îles mineures éloignées",
                        "iso2": "UM",
                        "iso3": "UMI",
                        "phone_code": 246
                    },
                    {
                        "nombre": "Islas Vírgenes Británicas",
                        "name": "Virgin Islands",
                        "nom": "Iles Vierges",
                        "iso2": "VG",
                        "iso3": "VGB",
                        "phone_code": "1 284"
                    },
                    {
                        "nombre": "Islas Vírgenes de los Estados Unidos",
                        "name": "United States Virgin Islands",
                        "nom": "Îles Vierges américaines",
                        "iso2": "VI",
                        "iso3": "VIR",
                        "phone_code": "1 340"
                    },
                    {
                        "nombre": "Israel",
                        "name": "Israel",
                        "nom": "Israël",
                        "iso2": "IL",
                        "iso3": "ISR",
                        "phone_code": 972
                    },
                    {
                        "nombre": "Italia",
                        "name": "Italy",
                        "nom": "Italie",
                        "iso2": "IT",
                        "iso3": "ITA",
                        "phone_code": 39
                    },
                    {
                        "nombre": "Jamaica",
                        "name": "Jamaica",
                        "nom": "Jamaïque",
                        "iso2": "JM",
                        "iso3": "JAM",
                        "phone_code": "1 876"
                    },
                    {
                        "nombre": "Japon",
                        "name": "Japan",
                        "nom": "Japon",
                        "iso2": "JP",
                        "iso3": "JPN",
                        "phone_code": 81
                    },
                    {
                        "nombre": "Jersey",
                        "name": "Jersey",
                        "nom": "Maillot",
                        "iso2": "JE",
                        "iso3": "JEY",
                        "phone_code": 44
                    },
                    {
                        "nombre": "Jordania",
                        "name": "Jordan",
                        "nom": "Jordan",
                        "iso2": "JO",
                        "iso3": "JOR",
                        "phone_code": 962
                    },
                    {
                        "nombre": "Kazajistan",
                        "name": "Kazakhstan",
                        "nom": "Le Kazakhstan",
                        "iso2": "KZ",
                        "iso3": "KAZ",
                        "phone_code": 7
                    },
                    {
                        "nombre": "Kenia",
                        "name": "Kenya",
                        "nom": "Kenya",
                        "iso2": "KE",
                        "iso3": "KEN",
                        "phone_code": 254
                    },
                    {
                        "nombre": "Kirguistan",
                        "name": "Kyrgyzstan",
                        "nom": "Kirghizstan",
                        "iso2": "KG",
                        "iso3": "KGZ",
                        "phone_code": 996
                    },
                    {
                        "nombre": "Kiribati",
                        "name": "Kiribati",
                        "nom": "Kiribati",
                        "iso2": "KI",
                        "iso3": "KIR",
                        "phone_code": 686
                    },
                    {
                        "nombre": "Kuwait",
                        "name": "Kuwait",
                        "nom": "Koweït",
                        "iso2": "KW",
                        "iso3": "KWT",
                        "phone_code": 965
                    },
                    {
                        "nombre": "Libano",
                        "name": "Lebanon",
                        "nom": "Liban",
                        "iso2": "LB",
                        "iso3": "LBN",
                        "phone_code": 961
                    },
                    {
                        "nombre": "Laos",
                        "name": "Laos",
                        "nom": "Laos",
                        "iso2": "LA",
                        "iso3": "LAO",
                        "phone_code": 856
                    },
                    {
                        "nombre": "Lesoto",
                        "name": "Lesotho",
                        "nom": "Lesotho",
                        "iso2": "LS",
                        "iso3": "LSO",
                        "phone_code": 266
                    },
                    {
                        "nombre": "Letonia",
                        "name": "Latvia",
                        "nom": "La Lettonie",
                        "iso2": "LV",
                        "iso3": "LVA",
                        "phone_code": 371
                    },
                    {
                        "nombre": "Liberia",
                        "name": "Liberia",
                        "nom": "Liberia",
                        "iso2": "LR",
                        "iso3": "LBR",
                        "phone_code": 231
                    },
                    {
                        "nombre": "Libia",
                        "name": "Libya",
                        "nom": "Libye",
                        "iso2": "LY",
                        "iso3": "LBY",
                        "phone_code": 218
                    },
                    {
                        "nombre": "Liechtenstein",
                        "name": "Liechtenstein",
                        "nom": "Liechtenstein",
                        "iso2": "LI",
                        "iso3": "LIE",
                        "phone_code": 423
                    },
                    {
                        "nombre": "Lituania",
                        "name": "Lithuania",
                        "nom": "La Lituanie",
                        "iso2": "LT",
                        "iso3": "LTU",
                        "phone_code": 370
                    },
                    {
                        "nombre": "Luxemburgo",
                        "name": "Luxembourg",
                        "nom": "Luxembourg",
                        "iso2": "LU",
                        "iso3": "LUX",
                        "phone_code": 352
                    },
                    {
                        "nombre": "México",
                        "name": "Mexico",
                        "nom": "Mexique",
                        "iso2": "MX",
                        "iso3": "MEX",
                        "phone_code": 52
                    },
                    {
                        "nombre": "Monaco",
                        "name": "Monaco",
                        "nom": "Monaco",
                        "iso2": "MC",
                        "iso3": "MCO",
                        "phone_code": 377
                    },
                    {
                        "nombre": "Macao",
                        "name": "Macao",
                        "nom": "Macao",
                        "iso2": "MO",
                        "iso3": "MAC",
                        "phone_code": 853
                    },
                    {
                        "nombre": "Macedonia",
                        "name": "Macedonia",
                        "nom": "Macédoine",
                        "iso2": "MK",
                        "iso3": "MKD",
                        "phone_code": 389
                    },
                    {
                        "nombre": "Madagascar",
                        "name": "Madagascar",
                        "nom": "Madagascar",
                        "iso2": "MG",
                        "iso3": "MDG",
                        "phone_code": 261
                    },
                    {
                        "nombre": "Malasia",
                        "name": "Malaysia",
                        "nom": "Malaisie",
                        "iso2": "MY",
                        "iso3": "MYS",
                        "phone_code": 60
                    },
                    {
                        "nombre": "Malawi",
                        "name": "Malawi",
                        "nom": "Malawi",
                        "iso2": "MW",
                        "iso3": "MWI",
                        "phone_code": 265
                    },
                    {
                        "nombre": "Mali",
                        "name": "Mali",
                        "nom": "Mali",
                        "iso2": "ML",
                        "iso3": "MLI",
                        "phone_code": 223
                    },
                    {
                        "nombre": "Malta",
                        "name": "Malta",
                        "nom": "Malte",
                        "iso2": "MT",
                        "iso3": "MLT",
                        "phone_code": 356
                    },
                    {
                        "nombre": "Marruecos",
                        "name": "Morocco",
                        "nom": "Maroc",
                        "iso2": "MA",
                        "iso3": "MAR",
                        "phone_code": 212
                    },
                    {
                        "nombre": "Martinica",
                        "name": "Martinique",
                        "nom": "Martinique",
                        "iso2": "MQ",
                        "iso3": "MTQ",
                        "phone_code": 596
                    },
                    {
                        "nombre": "Mauricio",
                        "name": "Mauritius",
                        "nom": "Iles Maurice",
                        "iso2": "MU",
                        "iso3": "MUS",
                        "phone_code": 230
                    },
                    {
                        "nombre": "Mauritania",
                        "name": "Mauritania",
                        "nom": "Mauritanie",
                        "iso2": "MR",
                        "iso3": "MRT",
                        "phone_code": 222
                    },
                    {
                        "nombre": "Mayotte",
                        "name": "Mayotte",
                        "nom": "Mayotte",
                        "iso2": "YT",
                        "iso3": "MYT",
                        "phone_code": 262
                    },
                    {
                        "nombre": "Micronesia",
                        "name": "Estados Federados de",
                        "nom": "Federados Estados de",
                        "iso2": "FM",
                        "iso3": "FSM",
                        "phone_code": 691
                    },
                    {
                        "nombre": "Moldavia",
                        "name": "Moldova",
                        "nom": "Moldavie",
                        "iso2": "MD",
                        "iso3": "MDA",
                        "phone_code": 373
                    },
                    {
                        "nombre": "Mongolia",
                        "name": "Mongolia",
                        "nom": "Mongolie",
                        "iso2": "MN",
                        "iso3": "MNG",
                        "phone_code": 976
                    },
                    {
                        "nombre": "Montenegro",
                        "name": "Montenegro",
                        "nom": "Monténégro",
                        "iso2": "ME",
                        "iso3": "MNE",
                        "phone_code": 382
                    },
                    {
                        "nombre": "Montserrat",
                        "name": "Montserrat",
                        "nom": "Montserrat",
                        "iso2": "MS",
                        "iso3": "MSR",
                        "phone_code": "1 664"
                    },
                    {
                        "nombre": "Mozambique",
                        "name": "Mozambique",
                        "nom": "Mozambique",
                        "iso2": "MZ",
                        "iso3": "MOZ",
                        "phone_code": 258
                    },
                    {
                        "nombre": "Namibia",
                        "name": "Namibia",
                        "nom": "Namibie",
                        "iso2": "NA",
                        "iso3": "NAM",
                        "phone_code": 264
                    },
                    {
                        "nombre": "Nauru",
                        "name": "Nauru",
                        "nom": "Nauru",
                        "iso2": "NR",
                        "iso3": "NRU",
                        "phone_code": 674
                    },
                    {
                        "nombre": "Nepal",
                        "name": "Nepal",
                        "nom": "Népal",
                        "iso2": "NP",
                        "iso3": "NPL",
                        "phone_code": 977
                    },
                    {
                        "nombre": "Nicaragua",
                        "name": "Nicaragua",
                        "nom": "Nicaragua",
                        "iso2": "NI",
                        "iso3": "NIC",
                        "phone_code": 505
                    },
                    {
                        "nombre": "Niger",
                        "name": "Niger",
                        "nom": "Niger",
                        "iso2": "NE",
                        "iso3": "NER",
                        "phone_code": 227
                    },
                    {
                        "nombre": "Nigeria",
                        "name": "Nigeria",
                        "nom": "Nigeria",
                        "iso2": "NG",
                        "iso3": "NGA",
                        "phone_code": 234
                    },
                    {
                        "nombre": "Niue",
                        "name": "Niue",
                        "nom": "Niou",
                        "iso2": "NU",
                        "iso3": "NIU",
                        "phone_code": 683
                    },
                    {
                        "nombre": "Noruega",
                        "name": "Norway",
                        "nom": "Norvège",
                        "iso2": "NO",
                        "iso3": "NOR",
                        "phone_code": 47
                    },
                    {
                        "nombre": "Nueva Caledonia",
                        "name": "New Caledonia",
                        "nom": "Nouvelle-Calédonie",
                        "iso2": "NC",
                        "iso3": "NCL",
                        "phone_code": 687
                    },
                    {
                        "nombre": "Nueva Zelanda",
                        "name": "New Zealand",
                        "nom": "Nouvelle-Zélande",
                        "iso2": "NZ",
                        "iso3": "NZL",
                        "phone_code": 64
                    },
                    {
                        "nombre": "Oman",
                        "name": "Oman",
                        "nom": "Oman",
                        "iso2": "OM",
                        "iso3": "OMN",
                        "phone_code": 968
                    },
                    {
                        "nombre": "Paises Bajos",
                        "name": "Netherlands",
                        "nom": "Pays-Bas",
                        "iso2": "NL",
                        "iso3": "NLD",
                        "phone_code": 31
                    },
                    {
                        "nombre": "Pakistan",
                        "name": "Pakistan",
                        "nom": "Pakistan",
                        "iso2": "PK",
                        "iso3": "PAK",
                        "phone_code": 92
                    },
                    {
                        "nombre": "Palau",
                        "name": "Palau",
                        "nom": "Palau",
                        "iso2": "PW",
                        "iso3": "PLW",
                        "phone_code": 680
                    },
                    {
                        "nombre": "Palestina",
                        "name": "Palestine",
                        "nom": "La Palestine",
                        "iso2": "PS",
                        "iso3": "PSE",
                        "phone_code": 970
                    },
                    {
                        "nombre": "Panama",
                        "name": "Panama",
                        "nom": "Panama",
                        "iso2": "PA",
                        "iso3": "PAN",
                        "phone_code": 507
                    },
                    {
                        "nombre": "Papua Nueva Guinea",
                        "name": "Papua New Guinea",
                        "nom": "Papouasie-Nouvelle-Guinée",
                        "iso2": "PG",
                        "iso3": "PNG",
                        "phone_code": 675
                    },
                    {
                        "nombre": "Paraguay",
                        "name": "Paraguay",
                        "nom": "Paraguay",
                        "iso2": "PY",
                        "iso3": "PRY",
                        "phone_code": 595
                    },
                    {
                        "nombre": "Peru",
                        "name": "Peru",
                        "nom": "Pérou",
                        "iso2": "PE",
                        "iso3": "PER",
                        "phone_code": 51
                    },
                    {
                        "nombre": "Polinesia Francesa",
                        "name": "French Polynesia",
                        "nom": "Polynésie française",
                        "iso2": "PF",
                        "iso3": "PYF",
                        "phone_code": 689
                    },
                    {
                        "nombre": "Polonia",
                        "name": "Poland",
                        "nom": "Pologne",
                        "iso2": "PL",
                        "iso3": "POL",
                        "phone_code": 48
                    },
                    {
                        "nombre": "Portugal",
                        "name": "Portugal",
                        "nom": "Portugal",
                        "iso2": "PT",
                        "iso3": "PRT",
                        "phone_code": 351
                    },
                    {
                        "nombre": "Puerto Rico",
                        "name": "Puerto Rico",
                        "nom": "Porto Rico",
                        "iso2": "PR",
                        "iso3": "PRI",
                        "phone_code": 1
                    },
                    {
                        "nombre": "Qatar",
                        "name": "Qatar",
                        "nom": "Qatar",
                        "iso2": "QA",
                        "iso3": "QAT",
                        "phone_code": 974
                    },
                    {
                        "nombre": "Reino Unido",
                        "name": "United Kingdom",
                        "nom": "Royaume-Uni",
                        "iso2": "GB",
                        "iso3": "GBR",
                        "phone_code": 44
                    },
                    {
                        "nombre": "Republica Centroafricana",
                        "name": "Central African Republic",
                        "nom": "République Centrafricaine",
                        "iso2": "CF",
                        "iso3": "CAF",
                        "phone_code": 236
                    },
                    {
                        "nombre": "Republica Checa",
                        "name": "Czech Republic",
                        "nom": "République Tchèque",
                        "iso2": "CZ",
                        "iso3": "CZE",
                        "phone_code": 420
                    },
                    {
                        "nombre": "Republica Dominicana",
                        "name": "Dominican Republic",
                        "nom": "République Dominicaine",
                        "iso2": "DO",
                        "iso3": "DOM",
                        "phone_code": "1 809"
                    },
                    {
                        "nombre": "Republica de Sudán del Sur",
                        "name": "South Sudan",
                        "nom": "Soudan du Sud",
                        "iso2": "SS",
                        "iso3": "SSD",
                        "phone_code": 211
                    },
                    {
                        "nombre": "Reunion",
                        "name": "Réunion",
                        "nom": "Réunion",
                        "iso2": "RE",
                        "iso3": "REU",
                        "phone_code": 262
                    },
                    {
                        "nombre": "Ruanda",
                        "name": "Rwanda",
                        "nom": "Rwanda",
                        "iso2": "RW",
                        "iso3": "RWA",
                        "phone_code": 250
                    },
                    {
                        "nombre": "Rumania",
                        "name": "Romania",
                        "nom": "Roumanie",
                        "iso2": "RO",
                        "iso3": "ROU",
                        "phone_code": 40
                    },
                    {
                        "nombre": "Rusia",
                        "name": "Russia",
                        "nom": "La Russie",
                        "iso2": "RU",
                        "iso3": "RUS",
                        "phone_code": 7
                    },
                    {
                        "nombre": "Sahara Occidental",
                        "name": "Western Sahara",
                        "nom": "Sahara Occidental",
                        "iso2": "EH",
                        "iso3": "ESH",
                        "phone_code": 212
                    },
                    {
                        "nombre": "Samoa",
                        "name": "Samoa",
                        "nom": "Samoa",
                        "iso2": "WS",
                        "iso3": "WSM",
                        "phone_code": 685
                    },
                    {
                        "nombre": "Samoa Americana",
                        "name": "American Samoa",
                        "nom": "Les Samoa américaines",
                        "iso2": "AS",
                        "iso3": "ASM",
                        "phone_code": "1 684"
                    },
                    {
                        "nombre": "San Bartolomé",
                        "name": "Saint Barthélemy",
                        "nom": "Saint-Barthélemy",
                        "iso2": "BL",
                        "iso3": "BLM",
                        "phone_code": 590
                    },
                    {
                        "nombre": "San Cristobal y Nieves",
                        "name": "Saint Kitts and Nevis",
                        "nom": "Saint Kitts et Nevis",
                        "iso2": "KN",
                        "iso3": "KNA",
                        "phone_code": "1 869"
                    },
                    {
                        "nombre": "San Marino",
                        "name": "San Marino",
                        "nom": "San Marino",
                        "iso2": "SM",
                        "iso3": "SMR",
                        "phone_code": 378
                    },
                    {
                        "nombre": "San Martin (Francia)",
                        "name": "Saint Martin (French part)",
                        "nom": "Saint-Martin (partie française)",
                        "iso2": "MF",
                        "iso3": "MAF",
                        "phone_code": "1 599"
                    },
                    {
                        "nombre": "San Pedro y Miquelon",
                        "name": "Saint Pierre and Miquelon",
                        "nom": "Saint-Pierre-et-Miquelon",
                        "iso2": "PM",
                        "iso3": "SPM",
                        "phone_code": 508
                    },
                    {
                        "nombre": "San Vicente y las Granadinas",
                        "name": "Saint Vincent and the Grenadines",
                        "nom": "Saint-Vincent et Grenadines",
                        "iso2": "VC",
                        "iso3": "VCT",
                        "phone_code": "1 784"
                    },
                    {
                        "nombre": "Santa Elena",
                        "name": "Ascensión y Tristán de Acuña",
                        "nom": "Ascensión y Tristan de Acuña",
                        "iso2": "SH",
                        "iso3": "SHN",
                        "phone_code": 290
                    },
                    {
                        "nombre": "Santa Lucia",
                        "name": "Saint Lucia",
                        "nom": "Sainte-Lucie",
                        "iso2": "LC",
                        "iso3": "LCA",
                        "phone_code": "1 758"
                    },
                    {
                        "nombre": "Santo Tome y Príncipe",
                        "name": "Sao Tome and Principe",
                        "nom": "Sao Tomé et Principe",
                        "iso2": "ST",
                        "iso3": "STP",
                        "phone_code": 239
                    },
                    {
                        "nombre": "Senegal",
                        "name": "Senegal",
                        "nom": "Sénégal",
                        "iso2": "SN",
                        "iso3": "SEN",
                        "phone_code": 221
                    },
                    {
                        "nombre": "Serbia",
                        "name": "Serbia",
                        "nom": "Serbie",
                        "iso2": "RS",
                        "iso3": "SRB",
                        "phone_code": 381
                    },
                    {
                        "nombre": "Seychelles",
                        "name": "Seychelles",
                        "nom": "Les Seychelles",
                        "iso2": "SC",
                        "iso3": "SYC",
                        "phone_code": 248
                    },
                    {
                        "nombre": "Sierra Leona",
                        "name": "Sierra Leone",
                        "nom": "Sierra Leone",
                        "iso2": "SL",
                        "iso3": "SLE",
                        "phone_code": 232
                    },
                    {
                        "nombre": "Singapur",
                        "name": "Singapore",
                        "nom": "Singapour",
                        "iso2": "SG",
                        "iso3": "SGP",
                        "phone_code": 65
                    },
                    {
                        "nombre": "Sint Maarten",
                        "name": "Sint Maarten",
                        "nom": "Saint-Martin",
                        "iso2": "SX",
                        "iso3": "SMX",
                        "phone_code": "1 721"
                    },
                    {
                        "nombre": "Siria",
                        "name": "Syria",
                        "nom": "Syrie",
                        "iso2": "SY",
                        "iso3": "SYR",
                        "phone_code": 963
                    },
                    {
                        "nombre": "Somalia",
                        "name": "Somalia",
                        "nom": "Somalie",
                        "iso2": "SO",
                        "iso3": "SOM",
                        "phone_code": 252
                    },
                    {
                        "nombre": "Sri lanka",
                        "name": "Sri Lanka",
                        "nom": "Sri Lanka",
                        "iso2": "LK",
                        "iso3": "LKA",
                        "phone_code": 94
                    },
                    {
                        "nombre": "Sudafrica",
                        "name": "South Africa",
                        "nom": "Afrique du Sud",
                        "iso2": "ZA",
                        "iso3": "ZAF",
                        "phone_code": 27
                    },
                    {
                        "nombre": "Sudan",
                        "name": "Sudan",
                        "nom": "Soudan",
                        "iso2": "SD",
                        "iso3": "SDN",
                        "phone_code": 249
                    },
                    {
                        "nombre": "Suecia",
                        "name": "Sweden",
                        "nom": "Suède",
                        "iso2": "SE",
                        "iso3": "SWE",
                        "phone_code": 46
                    },
                    {
                        "nombre": "Suiza",
                        "name": "Switzerland",
                        "nom": "Suisse",
                        "iso2": "CH",
                        "iso3": "CHE",
                        "phone_code": 41
                    },
                    {
                        "nombre": "Surinam",
                        "name": "Suriname",
                        "nom": "Surinam",
                        "iso2": "SR",
                        "iso3": "SUR",
                        "phone_code": 597
                    },
                    {
                        "nombre": "Svalbard y Jan Mayen",
                        "name": "Svalbard and Jan Mayen",
                        "nom": "Svalbard et Jan Mayen",
                        "iso2": "SJ",
                        "iso3": "SJM",
                        "phone_code": 47
                    },
                    {
                        "nombre": "Swazilandia",
                        "name": "Swaziland",
                        "nom": "Swaziland",
                        "iso2": "SZ",
                        "iso3": "SWZ",
                        "phone_code": 268
                    },
                    {
                        "nombre": "Tayikistan",
                        "name": "Tajikistan",
                        "nom": "Le Tadjikistan",
                        "iso2": "TJ",
                        "iso3": "TJK",
                        "phone_code": 992
                    },
                    {
                        "nombre": "Tailandia",
                        "name": "Thailand",
                        "nom": "Thaïlande",
                        "iso2": "TH",
                        "iso3": "THA",
                        "phone_code": 66
                    },
                    {
                        "nombre": "Taiwan",
                        "name": "Taiwan",
                        "nom": "Taiwan",
                        "iso2": "TW",
                        "iso3": "TWN",
                        "phone_code": 886
                    },
                    {
                        "nombre": "Tanzania",
                        "name": "Tanzania",
                        "nom": "Tanzanie",
                        "iso2": "TZ",
                        "iso3": "TZA",
                        "phone_code": 255
                    },
                    {
                        "nombre": "Territorio Británico del Oceano Indico",
                        "name": "British Indian Ocean Territory",
                        "nom": "Territoire britannique de l'océan Indien",
                        "iso2": "IO",
                        "iso3": "IOT",
                        "phone_code": 246
                    },
                    {
                        "nombre": "Territorios Australes y Antarticas Franceses",
                        "name": "French Southern Territories",
                        "nom": "Terres australes françaises",
                        "iso2": "TF",
                        "iso3": "ATF",
                        "phone_code": 0
                    },
                    {
                        "nombre": "Timor Oriental",
                        "name": "East Timor",
                        "nom": "Timor-Oriental",
                        "iso2": "TL",
                        "iso3": "TLS",
                        "phone_code": 670
                    },
                    {
                        "nombre": "Togo",
                        "name": "Togo",
                        "nom": "Togo",
                        "iso2": "TG",
                        "iso3": "TGO",
                        "phone_code": 228
                    },
                    {
                        "nombre": "Tokelau",
                        "name": "Tokelau",
                        "nom": "Tokélaou",
                        "iso2": "TK",
                        "iso3": "TKL",
                        "phone_code": 690
                    },
                    {
                        "nombre": "Tonga",
                        "name": "Tonga",
                        "nom": "Tonga",
                        "iso2": "TO",
                        "iso3": "TON",
                        "phone_code": 676
                    },
                    {
                        "nombre": "Trinidad y Tobago",
                        "name": "Trinidad and Tobago",
                        "nom": "Trinidad et Tobago",
                        "iso2": "TT",
                        "iso3": "TTO",
                        "phone_code": "1 868"
                    },
                    {
                        "nombre": "Tunez",
                        "name": "Tunisia",
                        "nom": "Tunisie",
                        "iso2": "TN",
                        "iso3": "TUN",
                        "phone_code": 216
                    },
                    {
                        "nombre": "Turkmenistan",
                        "name": "Turkmenistan",
                        "nom": "Le Turkménistan",
                        "iso2": "TM",
                        "iso3": "TKM",
                        "phone_code": 993
                    },
                    {
                        "nombre": "Turquia",
                        "name": "Turkey",
                        "nom": "Turquie",
                        "iso2": "TR",
                        "iso3": "TUR",
                        "phone_code": 90
                    },
                    {
                        "nombre": "Tuvalu",
                        "name": "Tuvalu",
                        "nom": "Tuvalu",
                        "iso2": "TV",
                        "iso3": "TUV",
                        "phone_code": 688
                    },
                    {
                        "nombre": "Ucrania",
                        "name": "Ukraine",
                        "nom": "L'Ukraine",
                        "iso2": "UA",
                        "iso3": "UKR",
                        "phone_code": 380
                    },
                    {
                        "nombre": "Uganda",
                        "name": "Uganda",
                        "nom": "Ouganda",
                        "iso2": "UG",
                        "iso3": "UGA",
                        "phone_code": 256
                    },
                    {
                        "nombre": "Uruguay",
                        "name": "Uruguay",
                        "nom": "Uruguay",
                        "iso2": "UY",
                        "iso3": "URY",
                        "phone_code": 598
                    },
                    {
                        "nombre": "Uzbekistan",
                        "name": "Uzbekistan",
                        "nom": "L'Ouzbékistan",
                        "iso2": "UZ",
                        "iso3": "UZB",
                        "phone_code": 998
                    },
                    {
                        "nombre": "Vanuatu",
                        "name": "Vanuatu",
                        "nom": "Vanuatu",
                        "iso2": "VU",
                        "iso3": "VUT",
                        "phone_code": 678
                    },
                    {
                        "nombre": "Venezuela",
                        "name": "Venezuela",
                        "nom": "Venezuela",
                        "iso2": "VE",
                        "iso3": "VEN",
                        "phone_code": 58
                    },
                    {
                        "nombre": "Vietnam",
                        "name": "Vietnam",
                        "nom": "Vietnam",
                        "iso2": "VN",
                        "iso3": "VNM",
                        "phone_code": 84
                    },
                    {
                        "nombre": "Wallis y Futuna",
                        "name": "Wallis and Futuna",
                        "nom": "Wallis et Futuna",
                        "iso2": "WF",
                        "iso3": "WLF",
                        "phone_code": 681
                    },
                    {
                        "nombre": "Yemen",
                        "name": "Yemen",
                        "nom": "Yémen",
                        "iso2": "YE",
                        "iso3": "YEM",
                        "phone_code": 967
                    },
                    {
                        "nombre": "Yibuti",
                        "name": "Djibouti",
                        "nom": "Djibouti",
                        "iso2": "DJ",
                        "iso3": "DJI",
                        "phone_code": 253
                    },
                    {
                        "nombre": "Zambia",
                        "name": "Zambia",
                        "nom": "Zambie",
                        "iso2": "ZM",
                        "iso3": "ZMB",
                        "phone_code": 260
                    },
                    {
                        "nombre": "Zimbabue",
                        "name": "Zimbabwe",
                        "nom": "Zimbabwe",
                        "iso2": "ZW",
                        "iso3": "ZWE",
                        "phone_code": 263
                    }
                ];

                let myNombre = ""
                myCountries.forEach((elemento) => {

                    if (elemento.iso2 == myCountryCode) {

                        myNombre = elemento.nombre;

                    }
                });
                return myNombre;
            }
        </script> <!-- SEO -->
        <!-- <link href="https://www.datacrm.com/front/css/yosemodal.css" rel="stylesheet" type="text/css"/> -->
        <!-- <link href="https://www.datacrm.com/front/css/yosemodal.min.css" rel="stylesheet" type="text/css"/>
    <div id="divYoseMinContainer">

    </div> -->

        <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe id="modalVideoIframe" class="embed-responsive-item"
                                src="./CRM Móvil para la administración de ventas_files/saved_resource.html"
                                frameborder="0" allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var myAutoplay = "?autoplay=1";
                var myControls = "&controls=1";
                var myDisablekb = "&disablekb=1";
                var myShowInfo = "&showinfo=0"
                var myRel = "?rel=0"
                var url = "https://www.youtube.com/embed/grLovpoDICs" + myRel;

                $("#modalVideo").on('hide.bs.modal', function() {
                    $("#modalVideoIframe").attr('src', '');
                });
                $("#modalVideo").on('show.bs.modal', function() {
                    $("#modalVideoIframe").attr('src', url);
                    $(this).find('.modal-body').css({
                        width: 'auto',
                        height: 'auto',
                        'max-height': '100%',
                        'max-width': '100%'
                    });
                });
            });
        </script>

        <div class="modal fade" id="modalemail" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <p class="text-uppercase text-center m-0 txt-blackgray typ-montserrat f-sz-b">
                            Ya tienes una cuenta en <span class="txt-greenblue">DataCRM</span><br>
                        </p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body text-center" style="font-size:1.15em; font-weight: bold;">
                        <center>
                            <a style="text-decoration: none; padding: 10px; font-weight: 600;font-size: 20px;color: #ffffff; background-color: #f58756; border-radius: 6px;"
                                class="boton_personalizado" id="access_crm" target="_blank"
                                href="https://www.datacrm.com/">
                                INICIAR SESIÓN
                            </a>
                        </center>
                        <br>
                        <a href="https://www.datacrm.com/" id="recover_password"
                            style="color:#41c3ac; text-decoration: underline;font-size: 1.2em;" target="_blank"
                            rel="noopener noreferrer">
                            Recupera tu contraseña Aquí
                        </a>
                    </div>
                    <div class="modal-footer">
                        <div class="col-12">
                            <p class="typ-os-regular txt-blackgray mt-4 text-center mb-0">
                                <b>He leido y estoy de acuerdo con los <a href="https://www.datacrm.com/terminos/"
                                        target="_blank" rel="noopener noreferrer">Términos y condiciones</a> y <a
                                        href="https://www.datacrm.com/politicas/" target="_blank"
                                        rel="noopener noreferrer">las Políticas de Protección de Datos</a></b>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </div>






    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-PVJNVD8TVN');
    </script>

    <script type="lazy" async="" src="./CRM Móvil para la administración de ventas_files/js.js.descarga"></script>






    <!-- RDStation -->


    <script type="lazy" defer="" src="./CRM Móvil para la administración de ventas_files/bdf94fe1-12bd-4f35-8989-1a189152cb58-loader.js.descarga"></script>

    <script src="{{ asset('js/jQuery.js') }}"></script>


    <script src="./CRM Móvil para la administración de ventas_files/owl.carousel.js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/popper.min.1.11.0.js.descarga" defer=""></script>

    <script src="./CRM Móvil para la administración de ventas_files/bootstrap.min(1).js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/all-functions.js.descarga" defer=""></script>

    <script src="./CRM Móvil para la administración de ventas_files/cookies.js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/lazyload.min.js.descarga" defer=""></script>


    <script src="./CRM Móvil para la administración de ventas_files/helper.js.descarga" defer=""></script>

    <script src="./CRM Móvil para la administración de ventas_files/main.home.js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/create-demo3.js.descarga" defer=""></script>


    <!-- Whatsapp -->

    <script>
        window.datacrm_whatsapp_config = {
            "mobile": "573014765478",
            "redirect_chat_whatsapp": "true",
            "empresa": "https://www.datacrm.la/datacrm/datacrm/webservice.php"
        }
    </script>
    <script type="lazy" src="./CRM Móvil para la administración de ventas_files/wpp_button.min.js.descarga" defer=""></script>

    <script src="./CRM Móvil para la administración de ventas_files/plans.home.js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/modification.home.js.descarga" defer=""></script>





    <script>
        const load = () => {
            const scripts = document.querySelectorAll('script[type="lazy"]');
            scripts.forEach(function(script) {
                let scriptEle = document.createElement('script');
                scriptEle.setAttribute('type', 'text/javascript');
                scriptEle.setAttribute('async', true);
                if (!script.src.length) {
                    scriptEle.appendChild(document.createTextNode(script.textContent));
                } else {
                    scriptEle.setAttribute('src', script.src);
                }
                document.body.appendChild(scriptEle);
            });

            const links = document.querySelectorAll('link[type="lazy"]');
            links.forEach(function(link) {
                let linkEle = document.createElement('link');
                linkEle.setAttribute('type', 'text/css');
                linkEle.setAttribute('media', 'all');
                linkEle.setAttribute('href', link.href);
                document.body.appendChild(linkEle);
            });
        }

        const timer = setTimeout(load, 12000);

        const events = ["mouseover", "keydown", "touchmove", "touchstart"];

        const trigger = () => {
            setTimeout(function() {

            }, 2000);
            load();
            clearTimeout(timer);
            events.forEach(e => window.removeEventListener(e, trigger, {
                passive: true
            }));
        }

        events.forEach(e => window.addEventListener(e, trigger, {
            passive: true
        }));
    </script>
    <!-- prueba mapa de calor orange -->

    <script async="" defer="" src="./CRM Móvil para la administración de ventas_files/lo.js.descarga"></script>
    <script class="iti-load-utils" async="" src="./CRM Móvil para la administración de ventas_files/utils(1).js.descarga">
    </script><iframe id="lo-frame-core"
        src="./CRM Móvil para la administración de ventas_files/saved_resource(1).html" aria-hidden="true"
        title="Lucky Orange: core" style="display: none !important;"></iframe>


        <script async="true" src="{{ asset('js/js.js') }}"></script>

    <script type="text/javascript" async="true"
        src="./CRM Móvil para la administración de ventas_files/bdf94fe1-12bd-4f35-8989-1a189152cb58-loader.js.descarga">
    </script>
    <script type="text/javascript" async="true"
        src="./CRM Móvil para la administración de ventas_files/wpp_button.min.js.descarga"></script>
    <script type="text/javascript" src="./CRM Móvil para la administración de ventas_files/lead-tracking.min.js.descarga">
    </script>
    <script type="text/javascript"
        src="./CRM Móvil para la administración de ventas_files/traffic-source-cookie.min.js.descarga"></script>
<iframe style="width: 1px; height: 1px; position: absolute; top: -100px;" id="rd_tmgr" src="./CRM Móvil para la administración de ventas_files/saved_resource(2).html"></iframe>
    <script type="text/javascript" src="./CRM Móvil para la administración de ventas_files/rdstation-popup.min.js.descarga">
    </script>
    <script type="text/javascript"
        src="./CRM Móvil para la administración de ventas_files/rd-js-integration.min.js.descarga"></script><iframe id="wpp-iframe"
        src="./CRM Móvil para la administración de ventas_files/index.html"
        style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select: none; user-select: none; width: 80px; z-index: 999999; height: 80px; bottom: 0px; right: 10px; position: fixed; "
        frameborder="0"
        sandbox="allow-forms allow-scripts allow-same-origin allow-top-navigation-by-user-activation"></iframe>

<!-- Google tag (gtag.js) -->


<script src="{{ asset('js/javascript.js') }}"></script>
<!-- Agrega tus scripts JS al final del body si es necesario -->


</body>
</html>
