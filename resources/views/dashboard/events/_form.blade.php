<div class="from-group">
    {!! Form::label('EVE_Nombres','Nombre') !!}
    {!! Form::text('EVE_Nombres', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('EVE_Descripcion','Descripción') !!}
    {!! Form::textarea('EVE_Descripcion', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('EVE_Detalles','Distritos') !!}
    {!! Form::select('proEVE_Detallesvince',getProvinces(),null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('EVE_Fotografia','Distritos') !!}
    {!! Form::select('EVE_Fotografia',getDistricts(),null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('EVE_Fecha_Hora','Fotografía') !!}
    {!! Form::file('EVE_Fecha_Hora') !!}
</div>
<div class="from-group">
    {!! Form::label('EVE_Longitud','Descripción de imagen') !!}
    {!! Form::text('EVE_Longitud', null, ['class'=>'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('ID_Distrito','Enlace de google Maps') !!}
    {!! Form::text('ID_Distrito', null, ['class'=>'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('EVE_Latitud','Fecha') !!}
    {!! Form::date('EVE_Latitud', null, ['class'=>'form-control']) !!}
</div>
