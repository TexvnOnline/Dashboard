@extends('layouts.admin')
@section('title','Registro de Tipo de Fotos ')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('photographs.index')}}"> Tipo de Fotos</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> </h3>
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
              <label for="">Descripcion Tipo de Foto</label>
              <input type="text" name="TFL_Descripcion" id="TFL_Descripcion" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>

            <div class="form-group">
              <label for="">Tamaño del Tipo de Foto</label>
              <input type="text" name="TFL_Tamano" id="TFL_Tamano" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>

            <div class="form-group">
              <label for="">Detalles del Tipo de Foto</label>
              <input type="text" name="TFL_Detalles" id="TFL_Detalles" class="form-control" placeholder="" aria-describedby="helpId">
              
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

				'TFL_Descripcion' : $('#TFL_Descripcion').val(),
				'TFL_Tamano' : $('#TFL_Tamano').val(),
				'TFL_Detalles' : $('#TFL_Detalles').val()
				
			 };
			$.ajax({
				url: 'http://smartcityhyo.tk/api/Tipo_de_foto/Insertar_Tipo_de_foto.php',
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
