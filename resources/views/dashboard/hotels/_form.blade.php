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
    {!! Form::label('weblink','Enlace de la página web') !!}
    {!! Form::text('weblink', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('facebook','Enlace a red social') !!}
    {!! Form::text('facebook', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('Celular','Numero de celular') !!}
    {!! Form::number('Celular', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('linkMaps','Enlace de google Maps') !!}
    {!! Form::text('linkMaps', null, ['class'=>'form-control']) !!}
</div>
