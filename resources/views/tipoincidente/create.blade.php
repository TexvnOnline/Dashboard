@extends('layouts.admin')
@section('title','RRegistro de Tipos de incidente')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('parks.index')}}">Registro de Tipos de incidente</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registro de Tipos de incidente</h3>
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
            

            <div class="form-group">
              <label for="TIN_Nombre">Nombre</label>
              <input type="text" name="TIN_Nombre" id="TIN_Nombre" class="form-control" placeholder="" aria-describedby="helpId">
             
            </div>

            <div class="form-group">
                <label for="TIN_Descripcion">Descripción</label>
                <input type="text" name="TIN_Descripcion" id="TIN_Descripcion" class="form-control" placeholder="" aria-describedby="helpId">
                
              </div>

            
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
				'TIN_Nombre' : $('#TIN_Nombre').val(), 
				'TIN_Descripcion' : $('#TIN_Descripcion').val()
			 };
			$.ajax({
				url: 'http://smartcityhyo.tk/api/Tipo_incidente/Insertar_Tipo_incidente.php',
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
