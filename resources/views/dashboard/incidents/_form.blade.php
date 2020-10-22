{{--  
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
</div>  --}}


<div class="from-group">
    {!! Form::label('ID_Vehiculo','ID Vehiculo') !!}
    <input type="text" name="ID_Vehiculo" id="ID_Vehiculo" class="form-control">
</div>
<div class="from-group">
    {!! Form::label('ID_Usuario','ID Distrito') !!}
    <input type="number" name="ID_Usuario" id="ID_Usuario" class="form-control">
</div>
<div class="from-group">
    {!! Form::label('ind_Description','Descripcion') !!}
    <input type="text" name="ind_Description" id="ind_Description" class="form-control">
</div>

<div class="from-group">
    {!! Form::label('ind_Fotografia','Fotografia') !!}
    {{--  <input type="file" name="ind_Fotografia" id="ind_Fotografia" class="form-control">  --}}

    <input type="file" name="ind_Fotografia" id="ind_Fotografia">

</div>

<div class="from-group">
    {!! Form::label('ind_Fecha_Incidente','Fecha') !!}
    <input type="date" name="ind_Fecha_Incidente" id="ind_Fecha_Incidente" class="form-control">
</div>