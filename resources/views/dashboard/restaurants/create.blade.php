@extends('layouts.admin')
@section('title','Registrar Restaurante')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('restaurants.index')}}">Gestion de Restaurante</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection 
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Registro de Restaurante</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	<form id="form" method="POST">

		<div class="card-body ">
			@include('dashboard.restaurants._form')
		</div>
		<div class="card-footer">
		  <a class="btn btn-danger float-right" href="{{route('restaurants.index')}}">Cancelar</a>

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

				'RES_Nombre' :  $('#RES_Nombre').val(), 
				'RES_Descripcion' :  $('#RES_Descripcion').val(), 
				'RES_Tipo' :  $('#RES_Tipo').val(), 
				'RES_Hora_Atencion' :  $('#RES_Hora_Atencion').val(), 
				'RES_URL_Map' :  $('#RES_URL_Map').val(),
				'RES_Pagina_Web' :  $('#RES_Pagina_Web').val(), 
				'RES_Telefono' :  $('#RES_Telefono').val(), 
				'RES_Facebook' :  $('#RES_Facebook').val()

			 };

			$.ajax({
				url: 'http://smartcityhuancayo.herokuapp.com/RecursosCercanos/Insertar_Recursos_Cercanos.php',
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
