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
        






            {{--  <div class="form-row">
                <div class="form-group col-md-4">
              
                </div>
                <div class="form-group col-md-4">
                
                </div>
                <div class="form-group col-md-4">
               
                </div>
            </div>  --}}



            <div class="form-row">
               
                <div class="form-group col-md-6">
                     <label>CON_Nombre</label>
                <input type="text" name="CON_Nombre" id="" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                <label>CON_Apellidos</label>
                <input type="text" name="CON_Apellidos" id="" class="form-control" >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                <label>CON_Telefono</label>
                <input type="text" name="CON_Telefono" id="" class="form-control" >
                </div>
                <div class="form-group col-md-4">
                  <label>CON_Direccion</label>
                <input type="text" name="CON_Direccion" id="" class="form-control" >
                </div>
                <div class="form-group col-md-4">
                 <label>CON_Licencia</label>
                <input type="text" name="CON_Licencia" id="" class="form-control" >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
              <label>ID_Empresa_Transp</label>
                <input type="text" name="ID_Empresa_Transp" id="" class="form-control" >
                </div>
                <div class="form-group col-md-4">
                <label>CON_Status</label>
                <input type="text" name="CON_Status" id="" class="form-control" >
                </div>
                <div class="form-group col-md-4">
                    <label>CON_FCM</label>
                <input type="text" name="CON_FCM" id="" class="form-control" >
                </div>
            </div>

            
            <div class="form-row">
                <div class="form-group col-md-6">
                <label>CON_Fotografia_Licencia</label>
                <input type="text" name="CON_Fotografia_Licencia" id="" class="form-control" >
                </div>
                <div class="form-group col-md-6">
                       <label>CON_Email</label>
                <input type="text" name="CON_Email" id="" class="form-control" >
                </div>
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
				
				'CON_Nombre' : $('#CON_Nombre').val(),
				'CON_Apellidos' : $('#CON_Apellidos').val(),
				'CON_Telefono' : $('#CON_Telefono').val(), 
                'CON_Direccion' : $('#CON_Direccion').val(),
                'CON_Licencia' : $('#CON_Licencia').val(), 
				'ID_Empresa_Transp' : $('#ID_Empresa_Transp').val(),
				'CON_Status' : $('#CON_Status').val(),
				'CON_FCM' : $('#CON_FCM').val(), 
				'CON_Fotografia_Licencia' : $('#CON_Fotografia_Licencia').val(),
				'CON_Email' : $('#CON_Email').val()
			 };
			$.ajax({
				url: 'http://smartcityhyo.tk/api/Conductor/Insertar_Conductor.php',
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
