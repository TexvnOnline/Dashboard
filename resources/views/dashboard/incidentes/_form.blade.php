
{!! Form::hidden('user_id', auth()->user()->id) !!}

<div class="from-group">
    {!! Form::label('title','Titulo') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('description','Descripción') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('image','foto') !!}
    {!! Form::file('image', null, ['class'=>'form-control']) !!}
</div>


