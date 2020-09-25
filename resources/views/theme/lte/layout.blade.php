<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Boxed Layout</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/$theme/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('assets/$theme/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-boxed">
        
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- inicio header -->
            @include("theme/$theme/header");
            <!-- fin header -->
            <!-- inicio aside -->
            @include("theme/$theme/aside");
            <!-- fin aside -->

            <!-- inicio de contenido -->
            <div class="content-wrapper">
             <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Boxed Layout</h1>
                        </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- Content  -->
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>

                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            </div>
                        </div>
                        <div class="card-body">
                            Start creating your amazing application!
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
            </div>

            <!-- inicio footer -->
            @include("theme/$theme/footer");
            <!-- fin footer -->
        </div>

        <!-- jQuery -->
        <script src="{{asset('assets/$theme/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/$theme/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('assets/$theme/dist/js/demo.js')}}"></script>
    </body>
</html>