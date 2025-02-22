@extends('layouts.admin')
@section('title','Eliminar fotografia')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('tourists.index')}}">Eliminar Lugar turistico</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"></h3>
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
              <label for="">Id Lugar Turistico</label>
              <input type="text" name="ID_Lugar_Turistico" id="ID_Lugar_Turistico" class="form-control" placeholder="nombre" aria-describedby="helpId">
              
            </div>
            
        </div>
        <div class="card-footer">
			<a class="btn btn-danger float-right" href="{{route('tourists.index')}}">Cancelar</a>
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
				'ID_Lugar_Turistico' : $('#ID_Lugar_Turistico').val(), 
			 };
			$.ajax({
				url: 'http://smartcityhyo.tk/api/LugarTuristico/Eliminar_LugarTuristico.php',
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
