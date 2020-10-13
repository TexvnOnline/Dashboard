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
    {!! Form::label('start','Inicio') !!}
    {!! Form::datetime('start', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('end','Fin') !!}
    {!! Form::datetime('end', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('image','Fotografía') !!}
    {!! Form::file('image') !!}
</div>
