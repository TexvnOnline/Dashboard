@extends('layouts.admin')
@section('title','Registrar Lugar turistico')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('contacts.index')}}">Lugar turistico</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Registrar Lugar turistico</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
    </div>
	      <form id="form" method="POST">
	<div class="card-body ">
        @include('dashboard.contacts._form')
	</div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('contacts.index')}}">Cancelar</a>
     
	  <input id="submit" type="button" name="submit" class="btn btn-primary" value="Guardar">
    </div>
          </form>
  </div>
@endsection

<<<<<<< HEAD
@section('scripts')
<script>
	$(document).ready(function(){
		// click on button submit
		$("#submit").on('click', function(){
			// send ajax

			var data = { 
				'LT_Nombre' : $('#LT_Nombre').val(), 
				'LT_Descripcion' : $('#LT_Descripcion').val(),
				'LT_URL_Map' : $('#LT_URL_Map').val(),
				'ID_Distrito' : $('#ID_Distrito').val(),
				'LT_Hora_Inicio' : $('#LT_Hora_Inicio').val(), 
				'LT_Hora_Fin' : $('#LT_Hora_Fin').val(),
				'LT_Latitud' : $('#LT_Latitud').val(), 
				'LT_Longitud' : $('#LT_Longitud').val(),
				
			 };

			$.ajax({
				url: 'http://smartcityhuancayo.herokuapp.com/LugarTuristico/Insert_lugar_turistico.php,
			
				type: 'POST',
				data : JSON.stringify(data),
				
				datatype: 'json',

				success : function(data) {
					console.log(data);
				},
				
			})
		});
	});

=======


@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#submit").on('click', function(){
			var data = { 

				'LT_Nombre' : $("#LT_Nombre").val(),
				'LT_Descripcion' : $("#LT_Descripcion").val(),
				'ID_Distrito' : $("#ID_Distrito").val(),
				'LT_Hora_Inicio' : $("#LT_Hora_Inicio").val(),
				'LT_Hora_Fin' : $("#LT_Hora_Fin").val(),
				'LT_URL_Map' : $("#LT_URL_Map").val(),
				'LT_Latitud' : $("#LT_Latitud").val(),
				'LT_Longitud' : $("#LT_Longitud").val()
			 };
			$.ajax({
				url: 'http://smartcityhuancayo.herokuapp.com/LugarTuristico/Insert_lugar_turistico.php',
				type: 'POST',
				data : JSON.stringify(data),
				datatype: 'json',
				success : function(data) {
					console.log(data);
				},
			})
		});
	});
>>>>>>> 8f0108b5030a959131e2b5284f6926028b1d1a94
</script>
@endsection