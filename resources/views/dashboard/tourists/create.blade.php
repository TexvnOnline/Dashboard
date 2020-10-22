@extends('layouts.admin')
@section('title','Crear Lugar Turistico')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('tourists.index')}}">Lugar Turistico</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Crear</h3>
	  {{--  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>  --}}
	</div>
	<form action="" id="miForm">
    {{--  {!! Form::open(['route'=>'tourists.store', 'method'=>'POST','files' => true]) !!}  --}}
	<div class="card-body ">
        @include('dashboard.tourists._form')
	</div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('tourists.index')}}">Cancelar</a>
	
	  <button type="submit" name="btnSend" id="btnSend" class="btn btn-primary">Guardar</button>
    </div>
	{{--  {!! Form::close() !!}  --}}
	</form>
  </div>
@endsection
@section('scripts')
	<script>
		$("#btnSend").click(function () {

	
			

			var parameters = {};

			parameters.LT_Nombre = $("#LT_Nombre").val();
			parameters.LT_Descripcion = $("#LT_Descripcion").val();
			parameters.ID_Distrito = $("#ID_Distrito").val();
			parameters.LT_Hora_Inicio = $("#LT_Hora_Inicio").val();
			parameters.LT_Hora_Fin = $("#LT_Hora_Fin").val();
			parameters.LT_URL_Map = $("#LT_URL_Map").val();
			parameters.LT_Latitud = $("#LT_Latitud").val();
			parameters.LT_Longitud = $("#LT_Longitud").val();
			
					$.ajax({
						type: "PUT",
						contentType: 'application/json; charset=utf-8',
						url: "http://smartcityhuancayo.herokuapp.com/LugarTuristico/Insert_lugar_turistico.php",
						data: JSON.stringify(parameters),
						
						dataType: "json",
						success: function (data) {
							console.log(data);
						},
						error: function (xhr, ajaxOptions, thrownError) {
							console.log(xhr);
							//alert(xhr.status + " " + thrownError);
						}
					});
			
			});
	</script>
@endsection