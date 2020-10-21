<div class="from-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('description','Descripción') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('province','Distritos') !!}
    {!! Form::select('province',getProvinces(),null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('district','Distritos') !!}
    {!! Form::select('district',getDistricts(),null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('image','Fotografía') !!}
    {!! Form::file('image') !!}
</div>
<div class="from-group">
    {!! Form::label('imageDescription','Descripción de imagen') !!}
    {!! Form::text('imageDescription', null, ['class'=>'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('image360','Imagen 360') !!}
    {!! Form::text('image360', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('imageDescription360','Descripción de Imagen 360') !!}
    {!! Form::text('imageDescription360', null, ['class'=>'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('linkMaps','Enlace de google Maps') !!}
    {!! Form::text('linkMaps', null, ['class'=>'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('linkMaps','Enlace de google Maps') !!}
    {!! Form::text('linkMaps', null, ['class'=>'form-control']) !!}
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