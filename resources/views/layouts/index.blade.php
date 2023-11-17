<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.datacrm.com/front/images/favicon.ico">
    <title>CRM Móvil para la administración de ventas</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    @yield('contenido')


    <div class="modal fade" id="modalemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <p class="text-uppercase text-center m-0 txt-blackgray typ-montserrat f-sz-b">
                        Ya tienes una cuenta en <span class="txt-greenblue">DataCRM</span><br>
                    </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body text-center" style="font-size:1.15em; font-weight: bold;">

                    <a style="text-decoration: none; padding: 10px; font-weight: 600;font-size: 20px;color: #ffffff; background-color: #f58756; border-radius: 6px;"
                        class="boton_personalizado" id="access_crm" target="_blank" href="https://www.datacrm.com/">
                        INICIAR SESIÓN
                    </a>

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


    <script src="./CRM Móvil para la administración de ventas_files/popper.min.1.11.0.js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/all-functions.js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/cookies.js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/lazyload.min.js.descarga" defer=""></script>
    <script src="./CRM Móvil para la administración de ventas_files/modification.home.js.descarga" defer=""></script>
    <!-- prueba mapa de calor orange -->
    <script src="{{ asset('js/main.home.js') }}"></script>
    <script async="true" src="{{ asset('js/js.js') }}"></script>
    <script src="{{ asset('js/javascript.js') }}"></script>
</body>

</html>
