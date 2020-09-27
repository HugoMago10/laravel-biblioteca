@extends("theme.$theme.layout")
@section('titulo')
    Permisos    
@endsection

@section('contenido')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-2">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Permisos</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th>op</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permiso as $item )
                                <tr>
                                    <td>{{$item->id_permiso}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->slug}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection