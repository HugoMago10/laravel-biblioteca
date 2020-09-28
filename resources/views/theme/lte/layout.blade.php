<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titulo','Biblioteca') | KimApp</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href='{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}'>
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href='{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}'>
        <!-- Theme style -->
        <link rel="stylesheet" href='{{asset("assets/$theme/dist/css/adminlte.min.css")}}'>
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- archivo css personalizado -->
        <link rel="stylesheet" href='{{asset("css/formMenu.css")}}'>

        @yield("style") <!-- agregando css a todas las paginas -->
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- Site wrapper -->
        <div class="wrapper">

            <!-- inicio header -->
            @include("theme/$theme/header")
            <!-- fin header -->

            <!-- inicio aside -->
            @include("theme/$theme/aside")
            <!-- fin aside -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield ("contenido")
            </div>
            <!-- /.content-wrapper -->

            @include("theme/$theme/footer")
            <!-- fin footer -->
        </div>

        <!-- jQuery -->
        <script src='{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}'></script>
        <!-- Bootstrap 4 -->
        <script src='{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
        <!-- overlayScrollbars -->
        <script src='{{asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}'></script>
        <!-- AdminLTE App -->
        <script src='{{asset("assets/$theme/dist/js/adminlte.min.js")}}'></script>
        <!-- AdminLTE for demo purposes -->
        <script src='{{asset("assets/$theme/dist/js/demo.js")}}'></script>
        <!-- jqueryValidation -->
        <script src='{{asset("js/jquery-validation/jquery.validate.min.js")}}'></script>
        <script src='{{asset("js/jquery-validation/localization_es/messages_es.min.js")}}'></script>
        <script src='{{asset("js/funciones.js")}}'></script>

        @yield("script") <!-- si en alguna pagina requiro el script solamente lo invoco -->

    </body>
</html>