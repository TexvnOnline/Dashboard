
{!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="from-group">
    {!! Form::label('title','Titulo') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('description','Descripción') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('type','Tipo de incidente') !!}  
    {!! Form::select('type', getArrayTypes(),null, ['class'=>'form-control']) !!}
</div> 

<div class="from-group">
    {!! Form::label('image','Imagen de incidente') !!} <br>
    {!! Form::file('image') !!}
    <small class="form-text text-muted">
        Solo archivos de imágenes de dimensiones 270x414 px.
    </small>
</div>

<div class="form-group">
    {!! Form::label('vehicles', 'Vehículos involucrados') !!}
    <div>
        @foreach ($vehicles as $vehicle)
            <label> 
                {!! Form::checkbox('vehicles[]', $vehicle->id) !!} {{$vehicle->plate}}   
            </label>
        @endforeach
    </div>
</div>
