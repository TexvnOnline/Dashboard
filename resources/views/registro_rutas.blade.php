@extends('layouts.admin')
@section('content')

<h1>Registro de Empresa Nueva</h1>

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nombre</label>
      <input type="email" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >RUC</label>
      <input type="text" class="form-control" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Gerente</label>
      <input type="email" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >Direccion</label>
      <input type="text" class="form-control" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Contacto</label>
      <input type="email" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label>Celular</label>
      <input type="text" class="form-control" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Usuario</label>
      <input type="email" class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label >Contraseña</label>
      <input type="password" class="form-control" >
    </div>
  </div>
  
  <div class="form-group col-md-12">
  	<br>
<button type="submit" class="btn btn-success d-block mx-auto">Registrar y Crear Ruta</button>
</div>
</form>



@endsection


