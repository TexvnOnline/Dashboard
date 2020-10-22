@extends('layouts.admin')
@section('title','Editar Lugar Turistico')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('contacts.index')}}">Lugar Turistico</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Editar Evento</h3>
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
	<!-- /.card-body -->
	           <div class="card-footer">
                     <a class="btn btn-danger float-right" href="{{route('contacts.index')}}">Cancelar</a>
                     <input type="submit" value="Actualizar" class="btn btn-primary">
                      </div>
     </form>
  </div>
@endsection

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
			
				type: 'PUT',
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