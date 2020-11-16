@extends('layouts.admin')
@section('content')

<?php
if (!isset($_GET["codigo"]))
 {
  exit();
}
$codigo = $_GET["codigo"];


?>



<h1>Registro de Tramo y Ruta</h1>
<input type="hidden" value="<?php echo $codigo;?>" name="ID_Empresa_Transp" id="ID_Empresa_Transp">
<form>

	<br>
	<div class="form-row">
		<div class="form-group col-md-5">
			<label>Nombre de Ruta</label>
			<input type="text" class="form-control" name="RUT_Nombre" id="RUT_Nombre">
		</div>
	

	
		<div class="form-group col-md-5">
			<label>Descripción de la Ruta</label>
			<textarea name="RUT_Descripcion"class="form-control" id="RUT_Descripcion" rows="2"></textarea>
		</div>
	</div>

	<div class="form-row">

		<div class="form-group col-md-4">

		</div>



		<div class="form-group col-md-1">
			<input id="submit" type="submit" name="submit" class="btn btn-primary" value="Guardar">
		</div>

		<div class="form-group col-md-2">
			<button type="submit" class="btn btn-danger d-block mx-auto">Cancelar</button>
		</div>


	</div>
</form>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#submit").on('click', function(){
      var data = { 
        'RUT_Nombre' : $('#RUT_Nombre').val(), 
        'RUT_Descripcion' : $('#RUT_Descripcion').val(),
        'ID_Empresa_Transp' : $('#ID_Empresa_Transp').val(),
        
      };
      $.ajax({
        url: 'http://127.0.0.1/wb-pdo/EmpresaTransporte/insertar_ruta.php',
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

