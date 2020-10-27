@extends('layouts.admin')
@section('title','Registrar incidente')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('vehicles.index')}}">Incidentes</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Registrar incidente</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>

	<form id="form" method="POST">

		<div class="card-body ">

			@include('dashboard.incidents._form')

		</div>
		<div class="card-footer">
		<a class="btn btn-danger float-right" href="{{route('incidents.index')}}">Cancelar</a>

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
				'ID_Vehiculo' :  $('#ID_Vehiculo').val(), 
				'ID_Usuario' :  $('#ID_Usuario').val(), 
				'ind_Descripcion' :  $('#ind_Descripcion').val(), 
				'ID_Tipo_Ind' :  $('#ID_Tipo_Ind').val(), 
				'ind_Fecha_Incidente' :  $('#ind_Fecha_Incidente').val()
			 };
			$.ajax({
				url: 'http://smartcityhuancayo.herokuapp.com/Usuario/Insert_Usuario_Incidente.php',
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
