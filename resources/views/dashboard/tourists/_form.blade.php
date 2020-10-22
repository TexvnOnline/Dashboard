





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
<<<<<<< HEAD
=======
    {!! Form::label('imageDescription','Descripción de imagen') !!}
    {!! Form::text('imageDescription', null, ['class'=>'form-control']) !!}
</div>  --}}



<div class="from-group">
    {!! Form::label('LT_Hora_Inicio','Hora de inicio') !!}
    {{--  {!! Form::datetime('LT_Hora_Inicio', null, ['class'=>'form-control']) !!}  --}}
    <input type="datetime" name="LT_Hora_Inicio" id="LT_Hora_Inicio" class="form-control">
</div>
<div class="from-group">
    {!! Form::label('LT_Hora_Fin','Hora fin ') !!}
    {{--  {!! Form::datetime('LT_Hora_Fin', null, ['class'=>'form-control']) !!}  --}}
    <input type="datetime" name="LT_Hora_Fin" id="LT_Hora_Fin" class="form-control">
</div>


{{--  <div class="from-group">
>>>>>>> b46c3e86ada865cf426543c1d162f399c574a390
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