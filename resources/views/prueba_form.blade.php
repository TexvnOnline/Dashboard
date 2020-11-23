@extends('layouts.admin')
@section('title','Registrar lugar turístico')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registrar lugar turístico</h3>

    </div>

    <form id="form" method="POST">

    <div class="card-body ">
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" name="LT_Nombre" id="LT_Nombre" class="form-control" placeholder="Nombre" aria-describedby="helpId">
            
            </div>
            <div class="form-group">
                <label for="">Descripción</label>
                <input type="text" name="LT_Descripcion" id="LT_Descripcion" class="form-control" placeholder="Descripción" aria-describedby="helpId">
              
            </div>


            <div class="form-group">
              <label for="">Distrito</label>
              <input type="text" name="ID_Distrito" id="ID_Distrito" class="form-control" placeholder="Distrito" aria-describedby="helpId">
            </div>

            {{--  <div class="form-row mb-3">
                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Provincia</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="Provincia"  required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 mb-6">
                  <label for="validationCustom02">Distrito</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Distrito" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>  --}}

              
              <h3 class="card-title">Horario de visitas</h3> <br>

              <div class="form-row mb-3">
                <div class="col-md-6 mb-6">
                  <label for="validationCustom01">Inicio</label>
                  <input type="text" class="form-control" id="LT_Hora_Inicio" placeholder="Inicio" name="LT_Hora_Inicio"  required>
                  
                </div>
                <div class="col-md-6 mb-6">
                  <label for="validationCustom02">Fin</label>
                  <input type="text" class="form-control" id="LT_Hora_Fin" placeholder="Fin" name="LT_Hora_Fin" required>
                 
                </div>
              </div>

              {{--  <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  --}}
         




    </div>
    <div  class="card-footer">

        <input id="submit" type="button" name="submit" class="btn btn-primary float-right" value="Guardar">

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


				'LT_Nombre' : $("#LT_Nombre").val(),
				'LT_Descripcion' : $("#LT_Descripcion").val(),
				'ID_Distrito' : $("#ID_Distrito").val(),
				'LT_Hora_Inicio' : $("#LT_Hora_Inicio").val(),
				'LT_Hora_Fin' : $("#LT_Hora_Fin").val(),
				'LT_URL_Map' : $("#LT_URL_Map").val(),
				'LT_Latitud' : '12',
				'LT_Longitud' : '12'
				


			 };
			$.ajax({
				url: 'http://smartcityhyo.tk/api/LugarTuristico/Insert_lugar_turistico.php',
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