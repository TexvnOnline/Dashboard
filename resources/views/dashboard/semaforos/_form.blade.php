{{--  <div class="form-row">
    <div class="col">
      
    </div>
    <div class="col">
      
    </div>
</div>  --}}
<div class="form-row">
    <div class="col">
        <div class="from-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col">
        <div class="from-group">
            {!! Form::label('direction','Dirección') !!}
            {!! Form::text('direction', null, ['class'=>'form-control']) !!}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <div class="from-group">
            {!! Form::label('reference','Referencia') !!}
            {!! Form::text('reference', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="from-group">
            {!! Form::label('latitude','Latitud') !!}
            {!! Form::number('latitude', null, ['class'=>'form-control','step'=>"any"]) !!}
        </div>
    </div>
    <div class="form-group col-md-4">
        <div class="from-group">
            {!! Form::label('length','Longitud') !!}
            {!! Form::number('length', null, ['class'=>'form-control','step'=>"any"]) !!}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col">
        <div class="from-group">
            {!! Form::label('description','Descripción') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control', 'rows'=>"4"]) !!}
        </div>
    </div>
    <div class="col">
        <div class="from-group">
            {!! Form::label('image','Imagen') !!}
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image" lang="es">
                <label class="custom-file-label">Seleccionar Archivo</label>
            </div>
        </div>
    </div>
</div>
