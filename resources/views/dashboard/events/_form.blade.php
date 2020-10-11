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
    {!! Form::label('linkMaps','Enlace de google Maps') !!}
    {!! Form::text('linkMaps', null, ['class'=>'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('date','Fecha') !!}
    {!! Form::date('date', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('time','Hora') !!}
    {!! Form::datetime('time', null, ['class'=>'form-control']) !!}
</div>