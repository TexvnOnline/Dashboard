<div class="from-group">
    {!! Form::label('LT_Nombre','Nombre') !!}
    {!! Form::text('LT_Nombre', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('LT_Descripcion','Descripción') !!}
    {!! Form::textarea('LT_Descripcion', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('LT_URL_Map','URL MAP') !!}
    {!! Form::text('LT_URL_Map' ,null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('ID_Distrito','Distritos') !!}
    {!! Form::text('ID_Distrito',null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('LT_Hora_Inicio','Hora Inicio') !!}
    {!! Form::datetime('LT_Hora_Inicio', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('LT_Hora_Fin','Hora Fin') !!}
    {!! Form::datetime('LT_Hora_Fin', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('LT_Latitud','Latitud') !!}
    {!! Form::datetime('LT_Latitud', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('LT_Longitud','Longitud') !!}
    {!! Form::datetime('LT_Longitud', null, ['class'=>'form-control']) !!}
</div>

