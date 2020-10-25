



<div class="from-group">
    {!! Form::label('LT_Nombre','Nombre') !!}
    {{--  {!! Form::text('LT_Nombre', null, ['class'=>'form-control']) !!}  --}}
    <input type="text" name="LT_Nombre" id="LT_Nombre" class="form-control">
</div>
<div class="from-group">
    {!! Form::label('LT_Descripcion','Descripción') !!}
    {{--  {!! Form::textarea('LT_Descripcion', null, ['class'=>'form-control']) !!}  --}}
    <input type="textarea" name="LT_Descripcion" id="LT_Descripcion" class="form-control">
</div>
{{--  <div class="from-group">
    {!! Form::label('province','Distritos') !!}
    {!! Form::select('province',getProvinces(),null, ['class'=>'form-control']) !!}
</div>  --}}
<div class="from-group">
    {!! Form::label('ID_Distrito','ID Distritos') !!}
    {{--  {!! Form::number('ID_Distrito', null, ['class'=>'form-control']) !!}  --}}
    <input type="number" name="ID_Distrito" id="ID_Distrito" class="form-control">
</div>
{{--  <div class="from-group">
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
</div>  --}}

<div class="from-group">
    {!! Form::label('LT_URL_Map','Enlace de google Maps') !!}
    {{--  {!! Form::text('LT_URL_Map', null, ['class'=>'form-control']) !!}  --}}
    <input type="text" name="LT_URL_Map" id="LT_URL_Map" class="form-control">
</div>




<div class="from-group">
    {!! Form::label('LT_Latitud','Latitud') !!}
    {{--  {!! Form::number('LT_Latitud', null, ['class'=>'form-control']) !!}  --}}
    <input type="number" name="LT_Latitud" id="LT_Latitud" class="form-control">
</div>
<div class="from-group">
    {!! Form::label('LT_Longitud','Longitud') !!}
    <input type="number" name="LT_Longitud" id="LT_Longitud" class="form-control">
    {{--  {!! Form::number('LT_Longitud', null, ['class'=>'form-control']) !!}  --}}
</div>

<div class="from-group">
    {!! Form::label('linkMaps','Enlace de google Maps') !!}
    {!! Form::text('linkMaps', null, ['class'=>'form-control']) !!}
</div>
