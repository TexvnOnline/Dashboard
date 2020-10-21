@extends('layouts.admin')
@section('title','Registro de parques')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('parks.index')}}">Parques y jardines</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registro de parques</h3>
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
			@include('dashboard.parks._form')
        </div>
        <div class="card-footer">
			<a class="btn btn-danger float-right" href="{{route('parks.index')}}">Cancelar</a>
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
				'PQ_Nombre' : $('#PQ_Nombre').val(), 
				'PQ_Descripcion' : $('#PQ_Descripcion').val(),
				'ID_Distrito' : $('#ID_Distrito').val(),
				'PQ_Direccion' : $('#PQ_Direccion').val(), 
				'PQ_Latitud' : $('#PQ_Latitud').val(),
				'PQ_Longitud' : $('#PQ_Longitud').val()
			 };
			$.ajax({
				url: 'http://smartcityhuancayo.herokuapp.com/Parque/Insertar_Parque.php',
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
