
<div class="form-row">
    <div class="col">
        <div class="from-group">
            {!! Form::label('PQ_Nombre','Nombre') !!}
            <input type="text" name="PQ_Nombre" id="PQ_Nombre" class="form-control">
        </div>
    </div>
    <div class="col">
        <div class="from-group">
            {!! Form::label('PQ_Descripcion','Dirección') !!}
            <input type="text" name="PQ_Descripcion" id="PQ_Descripcion" class="form-control">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <div class="from-group">
            {!! Form::label('ID_Distrito','ID Distrito') !!}
            <input type="number" name="ID_Distrito" id="ID_Distrito" class="form-control">
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="from-group">
            {!! Form::label('PQ_Latitud','Latitud') !!}
            <input type="number" name="PQ_Latitud" id="PQ_Latitud" class="form-control">
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="from-group">
            {!! Form::label('PQ_Longitud','Longitud') !!}
            <input type="number" name="PQ_Longitud" id="PQ_Longitud" class="form-control">
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col">
        <div class="from-group">
            {!! Form::label('PQ_Direccion','Dirección') !!}
            <input type="text" name="PQ_Direccion" id="PQ_Direccion" class="form-control">
        </div>
    </div>
    {{--  <div class="col">
        <div class="from-group">
            {!! Form::label('image','Imagen') !!}
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image" lang="es">
                <label class="custom-file-label">Seleccionar Archivo</label>
            </div>
        </div>
    </div>  --}}
</div>
