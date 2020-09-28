<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label requerido">Nombre</label>
    <div class="col-sm-10">
    <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-sm-2 col-form-label requerido">Url</label>
    <div class="col-sm-10">
    <input type="text" name="url" id="url" value="{{old('url')}}" required class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="icono" class="col-sm-2 col-form-label">Icono</label>
    <div class="col-sm-10">
    <input type="text" name="icono" id="icono" value="{{old('icono')}}" class="form-control">
    </div>
</div>