{!! Form::hidden('park_id', $park->id) !!}
<div class="from-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('type','Tipo de sensor') !!}  
    {!! Form::select('type', getSensorTypes(),null, ['class'=>'form-control']) !!}
</div> 