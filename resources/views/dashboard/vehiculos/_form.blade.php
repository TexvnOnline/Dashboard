
<div class="from-group">
    {!! Form::label('driver','Conductor') !!}
    {!! Form::text('driver', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('plate','Placa') !!}
    {!! Form::text('plate', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('company_id','Empresa') !!}
    {!! Form::select('company_id', $companies , null, ['class'=>'form-control'] ) !!}
</div>