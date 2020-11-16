@extends('layouts.admin')
@section('content')

<h1>Registro de Empresa Nueva</h1>

<form id="form">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nombre</label>
      <input type="text" class="form-control" name="EMT_Nombre" id="EMT_Nombre" >
    </div>
    <div class="form-group col-md-6">
      <label >RUC</label>
      <input type="text" class="form-control" name="EMT_Ruc" id="EMT_Ruc">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Direccion</label>
      <input type="text" class="form-control" name="EMT_Direccion"id="EMT_Direccion">
    </div>
    <div class="form-group col-md-6">
      <label>Telefono</label>
      <input type="text" class="form-control" name="EMT_Telefono"id="EMT_Telefono" >
    </div>
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Usuario</label>
      <input type="text" class="form-control" name="EMT_Usuario" id="EMT_Usuario">
    </div>
    <div class="form-group col-md-6">
      <label >Contraseña</label>
      <input type="password" class="form-control" name="EMT_Contrasena"id="EMT_Contrasena" >
    </div>
  </div>
  
  <div class="form-group col-md-12">
  	<br>
    <input id="submit" type="submit" name="submit" class="btn btn-primary" value="Guardar">
  </div>
</form>



@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#submit").on('click', function(){
      var data = { 
        'EMT_Nombre' : $('#EMT_Nombre').val(), 
        'EMT_Ruc' : $('#EMT_Ruc').val(),
        'EMT_Direccion' : $('#EMT_Direccion').val(),
        'EMT_Telefono' : $('#EMT_Telefono').val(), 
        'EMT_Usuario' : $('#EMT_Usuario').val(),
        'EMT_Contrasena' : $('#EMT_Contrasena').val()
      };
      $.ajax({
        url: 'http://127.0.0.1/wb-pdo/EmpresaTransporte/insertar_empresa_transporte.php',
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


