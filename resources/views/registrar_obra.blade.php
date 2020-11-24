@extends('layouts.admin')
@section('title','Registro de obras')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('parks.index')}}">Registro de obras</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registro de obras</h3>
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
                <label>Nombre</label>
                <input type="text" name="OBR_Nombre" id="OBR_Nombre" class="form-control">
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <input type="text" name="OBR_Descripcion" id="OBR_Descripcion" class="form-control">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Tipo</label>
                    <input type="text" name="ID_Tipo" id="ID_Tipo" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Fechad de inicio</label>
                    <input type="text" name="OBR_Fecha_Inicio" id="OBR_Fecha_Inicio" class="form-control">
                </div>
                <div class="col-md-3 mb-3">
                    <label>Fecha de fin</label>
                    <input type="text" name="OBR_Fecha_Fin" id="OBR_Fecha_Fin" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Monto</label>
                <input type="text" name="OBR_Monto" id="OBR_Monto" class="form-control">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-6">
                    <label>Coordenadas x</label>
                    <input type="text" name="OBR_Coordenada_X" id="OBR_Coordenada_X" class="form-control">
                </div>
                <div class="col-md-6 mb-6">
                    <label>Coordenadas y</label>
                    <input type="text" name="OBR_Coordenada_Y" id="OBR_Coordenada_Y" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Duración dela obra en días</label>
                <input type="text" name="OBR_Dias_Calendarios" id="OBR_Dias_Calendarios" class="form-control">
            </div>
        </div>

        <div class="card-footer">
            <a class="btn btn-danger float-right" href="#">Cancelar</a>
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
				'OBR_Nombre' : $('#OBR_Nombre').val(), 
				'OBR_Descripcion' : $('#OBR_Descripcion').val(),
                'ID_Tipo' : $('#ID_Tipo').val(),
                'OBR_Fecha_Inicio' : $('#OBR_Fecha_Inicio').val(), 
				'OBR_Fecha_Fin' : $('#OBR_Fecha_Fin').val(),
				'OBR_Monto' : $('#OBR_Monto').val(),
				'OBR_Coordenada_X' : $('#OBR_Coordenada_X').val(), 
				'OBR_Coordenada_Y' : $('#OBR_Coordenada_Y').val(),
                'OBR_Dias_Calendarios' : $('#OBR_Dias_Calendarios').val()

			 };
			$.ajax({
				url: 'http://localhost/smartcity/Obra/Insert_obra.php',
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
