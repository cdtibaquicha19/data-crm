@extends('layouts.index')

@section('contenido')
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
                                class="modalPruebaGratis3 btn  myNavbarFont mr-1 btnspecial btn-orange" data-toggle="modal"
                                data-target="#modalPruebaGratis3" style="background-color: #f58756;">
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
                        <img src="{{ asset('images/barswhite66x49.webp') }}" class="img-fluid" alt="barswhite"
                            width="46" height="29">
                    </button>

                    <div class=" d-none d-lg-block">
                        <a href="https://www.datacrm.com/">
                            <picture>
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
                        <button class="modalPruebaGratis3 btn btn-typea mx-2 myNavbarFont myButtonNav btn-sm btn-free"
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
                <article class="col-lg-8 col-md-8 col-12 pt-4 section-init-movil-child">

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
                </article>
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
        <section class="myDivBlue1 myDivDiagonalLeftA" id="negocios">
            <div class="container p-0   section-resize mt-5  myDivDiagonalLeftB">
                <div class="row">
                    <article class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
                        <h2 class="mt-5 txt-white  ft-h2 br-wd typ-montserrat myTitleWhite">
                            <span class="span-border-b-w">
                                Negocios
                            </span>
                        </h2>
                        <p class="typ-os-regular txt-white f-sz-m mt-3">
                            Lleva el control de tus negocios consolidados por fases de venta,&nbsp; haz el respectivo
                            seguimiento&nbsp; utilizando las herramientas que te brinda la App y gana más ventas.
                        </p>
                        <button class="modalPruebaGratis3 btn btn-orange text-uppercase f-sz-m my-3 p-2 px-4 effect-zoom"
                            data-toggle="modal" data-target="#modalPruebaGratis3">
                            <b>Prueba esta funcionalidad</b>
                        </button>
                        <div class="space"></div>
                    </article>
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
        </section>
        <!-- actividades -->
        <section id="actividades " class="container p-0 pb-5 section-resize">
            <div class="row mb-4 mx-5">
                <div class="col-lg-4 col-md-6 col-12 mt-5" style="align=center">
                    <picture>
                        <source type="image/webp"
                            srcset="https://www.datacrm.com/front/images/mobile/Calendario_en_crm_movil.webp">
                        <img src="./CRM Móvil para la administración de ventas_files/Calendario_en_crm_movil.webp"
                            alt="Calendario_en_crm_movil" width="251" height="409" class="img-fluid">
                    </picture>
                </div>
                <article class="col-lg-8 col-md-6 col-12 px-5 text-right">
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
                        <a href="https://play.google.com/store/apps/details?id=com.datacrm.application" target="_blank">
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
                </article>
            </div>
        </section>
        <!-- Vista global -->
        <section id="vistaGlobal" class="myDivGreen1 myDivDiagonalRightA">
            <div class="container  mt-5 MB-5 section-resize myDivDiagonalRightB" id="">

                <div class="container section-resize p-0">

                    <div class="row mb-4 mx-4">
                        <article class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
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
                        </article>
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
        </section>
        <!-- Contacto -->
        <section id="contacto" class="container p-0 pb-5 section-resize">
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
                        <a href="https://play.google.com/store/apps/details?id=com.datacrm.application" target="_blank">
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
        </section>

        <!-- Cotizaciones -->

        <section id="cotizaciones" class="myDivBlue1 myDivDiagonalLeftA">
            <div class="container p-0  mt-5  myDivDiagonalLeftB">

                <div class="row mb-4 mx-4">
                    <article class="col-lg-8 col-md-6 col-12 mt-5 px-max-5 order-2 order-lg-1">
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
                    </article>
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
        </section>

        <!-- informacion actualizada  -->

        <section id="informacionActualizada " class="container p-0 pt-3">
            <div class="row  mt-5 section-resize section-init-movil">
                <div class="col-lg-7 col-md-7 col-12 pt-4 text-center order-2 order-lg-1">
                    <div class="space"></div>
                    <div class="space"></div>
                    <picture>
                        <source type="image/webp"
                            srcset="https://www.datacrm.com/front/images/mobile/tour_crm_movil.webp">
                        <img src="./CRM Móvil para la administración de ventas_files/tour_crm_movil.webp" alt="crm-movil"
                            width="74" height="73" class="img-fluid">
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

        </section>

        <section class="container mt-5" id="myHomeSeccion">

            <div class="row pt-4">

                <div class="col-12 text-center">

                    <h2 class="myTitleBlue  typ-montserrat ft-h2">
                        Un CRM reconocido
                    </h2>

                </div>

                <article class="col-12 text-center">

                    <p class=" mt-5 typ-os-regular  txt-black  f-sz-m-home">
                        Las empresas prefieren DataCRM al ser referente <br> entre los mejores software de CRM en
                        Latinoamérica.
                    </p>

                </article>
                <section class="container">

                    <div class="row justify-content-center align-items-center">
                        <div class="col-sm-2 text-center">
                            <picture>
                                <source media="(max-width: 320px)" type="image/webp"
                                    data-srcset="{{ asset('images/El_mejor_CRM_del_año_320x337.webp') }}"
                                    srcset="{{ asset('images/El_mejor_CRM_del_año_320x337.webp') }}">
                                <source media="(min-width: 321px)" type="image/webp"
                                    data-srcset="{{ asset('images/El_mejor_CRM_del_año_320x337.webp') }}"
                                    srcset="{{ asset('images/El_mejor_CRM_del_año_320x337.webp') }}">
                                <img data-src="{{ asset('images/El_mejor_CRM_del_año_320x337.webp') }}"
                                    alt="El_mejor_CRM_del _año" class="img-fluid mt-5 lazyloaded" loading="lazy"
                                    width="150" height="158"
                                    src="{{ asset('images/El_mejor_CRM_del_año_320x337.webp') }}">
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
                                    alt="Sistema_CRM_mejor_calificadp" class="img-fluid mt-5 lazyloaded" loading="lazy"
                                    width="150" height="134"
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

                </section>
            </div>
        </section>
        <div class="space"></div>
        <div class="space"></div>

        <div class="container p-0">
            <div class="container pt-5" id="myTestimonialsSeccion2">
                <div class="row justify-content-center section-resize">
                    <div class="row">
                        <article class="col-12">
                            <h2
                                class="mt-3 typ-montserrat  myTitleBlue ft-h2 justify-content-center text-center align-items-center ">
                                ¿Por qué las empresas en Latinoamérica nos prefieren?
                            </h2>
                        </article>
                    </div>

                    <div class="row justify-content-center">

                        <article class="col-10 col-lg-4 mt-4">
                            <article class="myText">
                                <p class="col-12 txt-gray typ-os-regular mt-4 text-left ">
                                    <i class="fa-sharp fa-solid fa-quote-left myQuoteLeft"></i> La organización y
                                    control es de vital importancia para Infórmese y es precisamente aquí donde DataCRM
                                    proporciona una potente solución, gracias a sus indicadores gerenciales
                                    personalizados y a la posibilidad de generar reportes confiables, precisos y
                                    rápidos.
                                </p>
                            </article>
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
                        </article>

                        <div class="col-10 col-lg-4 mt-4">
                            <article class="myText">
                                <p class="col-12 txt-gray typ-os-regular mt-4 text-left ">
                                    <i class="fa-sharp fa-solid fa-quote-left myQuoteLeft"></i> Para Vibra es de gran
                                    importancia la organización del área de ventas, al dar respuestas más rápidas y
                                    eficientes a sus prospectos, logrando mayores cierres en el mes. Igualmente,
                                    ayudamos a la atención oportuna de sus clientes, categorizando las peticiones,
                                    quejas y reclamos mediante el área de servicio al cliente.
                                </p>
                            </article>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="{{ asset('images/radiopolis_caso_exito_datacrm_113x56.webp') }}">
                                        <img src="{{ asset('images/radiopolis_caso_exito_datacrm_113x56.webp') }}"
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
                            <article class="myText">
                                <p class="col-12 txt-gray typ-os-regular mt-4 text-left ">
                                    <i class="fa-sharp fa-solid fa-quote-left myQuoteLeft"></i> La herramienta fue
                                    diseñada para nuestro proceso. Lo recomiendo porque da la facilidad de adaptar todos
                                    los procesos a la herramienta y mejorar el seguimiento a cada uno de los
                                    comerciales. Nos ha ayudado a mejorar la gestión con los clientes.
                                </p>
                            </article>
                            <div class="row">
                                <div class="col-6 text-left">
                                    <picture>
                                        <source type="image/webp"
                                            srcset="{{ asset('images/Toxement_caso_exito_datacrm_121x60.webp') }}">
                                        <img src="{{ asset('images/Toxement_caso_exito_datacrm_121x60.webp') }}"
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

                        <article class="col-12 text-center px-5 justify-content-center mt-4">
                            <p class=" mt-3 txt-blackgray typ-os-regular  f-sz-m  myBold">
                                ÚNETE A MILES DE USUARIOS EN COLOMBIA, MÉXICO Y TODA LATINOAMÉRICA QUE HAN REVOLUCIONADO
                                LA FORMA EN LA QUE HACEN SUS VENTAS CON <span class="txt-greenblue">DATACRM</span>
                            </p>
                        </article>

                        <div class="myHorizontalLine  mt-4"></div>
                        <div class="col-12 mt-4 text-center">
                            <button href="#" class="btn myBtnBlue typ-montserrat px-4 f-sz-m mt-3 effect-zoom p-2"
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
                                <img src="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}" alt="DataCRM"
                                    class="img-fluid w-100 img-footer-logo lazyloaded" loading="lazy" width="180"
                                    height="58">
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
                                <img src="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}" alt="Logo Data CRM"
                                    width="180" height="58" class="img-fluid w-100 img-footer-logo lazyloaded"
                                    loading="lazy">
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

                            <a href="https://www.facebook.com/DataCRM.Soluciones/" aria-label="facebook" target="_blank"
                                style="font-size: 0px;">
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
                                <img src="{{ asset('images/Logodata_Horizontalblanco180x58.webp') }}" alt="DataCRM"
                                    width="180" height="58" class="img-fluid w-100 img-footer-logo lazyload"
                                    loading="lazy">
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
                                <a href="https://www.youtube.com/channel/UClTE-HkTpHMkoCvcP-6i2Sw/" aria-label="youtube"
                                    target="_blank">
                                    <i class="fa-brands fa-youtube mySocialMediaIcon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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

                                            </div>
                                        </div>
                                        <!-- sector -->
                                        <div class="col-12 col-md-10" style="align:left">
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

                                                    <option class="text-left f-sz-s" value="Construcción / Inmobiliaria">
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
                                        <input type="hidden" name="countryName3" value="Colombia" id="countryName3">

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
                        <button type="button" class="close" style="color: black !important;" data-dismiss="modal"
                            aria-label="Close" id="btnModalClose">
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

                                <!-- INICIAR SESIÓN -->
                                <a style="text-decoration: none; padding: 10px; font-weight: 600;font-size: 20px;color: #ffffff; background-color: #f58756; border-radius: 6px; width: 20px;"
                                    class="boton_personalizado" id="access_crm" target="_blank"
                                    href="https://www.datacrm.com/">
                                    Iniciar sesión
                                </a>

                            </div>
                            <br>
                            <!-- Recupera tu contraseña Aquí -->
                            <div class="col-12">
                                <a class="txt-greenblue font-weight-normal" href="https://www.datacrm.com/"
                                    id="recover_password" style="text-decoration: none;font-size: 1.2em;" target="_blank"
                                    rel="noopener noreferrer">

                                    ¿Olvidaste la contraseña?
                                </a>
                            </div>
                            <div class="col-12">
                                <p class="typ-os-regular f-sz-s mt-4 text-center mb-0">
                                    He leido y estoy de acuerdo con los
                                    <a href="https://www.datacrm.com/terminos" target="_blank" rel="noopener noreferrer"
                                        class="txt-greenblue">
                                        Términos de servicios
                                    </a>
                                    y
                                    <!-- <a href="https://www.datacrm.com/politicas/" target="_blank" rel="noopener noreferrer">las Políticas de Protección de Datos</a></b>                         -->
                                    <a href="https://www.datacrm.com/politicas" target="_blank" rel="noopener noreferrer"
                                        class="txt-greenblue">
                                        Políticas de privacidad
                                    </a>
                                </p>
                            </div>

                        </div>
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
                                src="./CRM Móvil para la administración de ventas_files/crear-cuenta.gif" loading="lazy">

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
                        <p style="color: #3e6aab !important; font-weight: bold;"
                            class="text-uppercase text-center mb-4 txt-blackgray typ-montserrat f-sz-b">
                            ¡Información actualizada a donde vayas!<br>
                        </p>

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
                        <div onclick="isMobile()" class="text-center text-muted mb-5 mt-5" style="cursor: pointer;"
                            id="noMeInteresa" data-dismiss="modal" aria-label="Close">
                            No me interesa
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <link rel="stylesheet" href="{{ asset('css/intlTelInput.min.css') }}">
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
                    let myCountryData = iti.getSelectedCountryData();
                    let myTemp = nombrePais(iti.getSelectedCountryData().iso2.toUpperCase());

                    $('#city3').val('');
                    $('#countryName3').val(myTemp);

                });
                $("#modalPruebaGratis3").on('show.bs.modal', function() {

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
        </script>
        <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="embed-responsive embed-responsive-4by3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
