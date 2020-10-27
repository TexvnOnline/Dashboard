@extends('layouts.admin')
@section('title','Registrar vehículo')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('vehicles.index')}}">Vehículos</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registrar vehículo</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    
    <form id="form" method="POST">


        <div class="card-body ">
            @include('dashboard.vehicles._form')
        </div>
        <div class="card-footer">
            <a class="btn btn-danger float-right" href="{{route('vehicles.index')}}">Cancelar</a>
            <input id="submit" type="button" name="submit" class="btn btn-primary" value="Guardar">
        </div>
    
    </form>

</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#submit").on('click', function(){
			var data = { 

               
				'VEH_Placa' : $('#VEH_Placa').val(), 
				'VEH_Color' : $('#VEH_Color').val(),
				'VEH_Modelo' : $('#VEH_Modelo').val(),
				'VEH_Marca' : $('#VEH_Marca').val(), 
				'ID_Tipo_Vehiculo' : $('#ID_Tipo_Vehiculo').val(),
				'ID_Conductor' : $('#ID_Conductor').val()
			 };
			$.ajax({
				url: 'http://smartcityhuancayo.herokuapp.com/Vehiculo/Insertar_Vehiculo.php',
				type: 'POST',
				data : JSON.stringify(data),
				datatype: 'json',
				success : function(data) {
					console.log(data);
				},
			})
		});
	});
</script>
@endsection

