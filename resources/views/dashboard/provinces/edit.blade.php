
@extends('layouts.admin')
@section('title','Editar de provincias')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('provinces.index')}}">provincias</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Editar de provincias</h3>
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
                <label for="">ID</label>
                <input type="text" name="ID_Provincia" id="ID_Provincia" class="form-control" placeholder="nombre" aria-describedby="helpId">
                
            </div>

            <div class="form-group">
              <label for="">Nombre provincia</label>
              <input type="text" name="PROV_Nombre" id="PROV_Nombre" class="form-control" placeholder="nombre" aria-describedby="helpId">
              
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
                'ID_Provincia' : $('#ID_Provincia').val(), 
				'PROV_Nombre' : $('#PROV_Nombre').val()
			 };
			$.ajax({
				url: 'http://smartcityhyo.tk/api/Provincia/Update_provincia.php',
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





