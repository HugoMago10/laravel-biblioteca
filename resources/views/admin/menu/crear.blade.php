@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menus
@endsection

@section('script')
<script src='{{asset("pages/scripts/admin/crear.js")}}'></script>
@endsection

@section('contenido')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-2">
            <div class="card-body">
                @include('includes.form-error')
                @include('includes.mensaje')
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Crear Menu</h3>
                    </div>
                    <!-- form start -->
                    <form action="{{route('guardar_menu')}}" method="post" id="form-general" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            @include('admin.menu.form')
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer" id="form-button">
                            @include('includes/boton-crear')
                            @include('includes/boton-editar')
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection