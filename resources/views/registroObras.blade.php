@extends('layouts.admin')
@section('content')




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>Registro de Obras</title>
  </head>
  <body>
    <h3 >Registro de Obras</h3>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nombre de la Obra</label>
      <input type="text" class="form-control"  placeholder="Nombre de la Obra">
    </div>
    
    	<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Nombre de la Municipalidad</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Municipalidad de El Tambo</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
</div>
  </div>


  <div class="form-row">
  <div class="form-group col-md-6" >
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control"  rows="3"></textarea>
  </div>

  <div class="form-group col-md-6">
    <label >Empresa Ejecutora</label>
    <input type="text" class="form-control"  placeholder="Empresa Ejecutora">
    <br>
    <label> Equipo de Trabajo</label>
  </div>
</div>


 
    
   <div class="form-row">

   	<div class="form-group col-md-6">
      <label>Tipo de Obra</label>
      <select  class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
     
 
      <label >Departamento</label>
      <select class="form-control">
      	<option selected="">Chosee..</option>
      	<option>..</option>
      </select>
 		</div>
      
      
       <div class="form-group col-md-6">
<div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Gerente de  Obra</label>
    <div class="col-sm-10">
      <input type="text" class="form-control">
    </div>
    <label class="col-sm-2 col-form-label">Residente</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" >
    </div>
    <br>
    <br>
<label class="col-sm-2 col-form-label">Ing. SSOMA</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" >
    </div>
  </div>
  
   </div>
   </div>


   <div class="form-row">

   	<div class="form-group col-md-4">
      <label>Provincia</label>
      <select  class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  </div>

  <div class="form-group col-md-4">

<label >Presupuesto Asignado</label>
    <input type="text" class="form-control"  placeholder="Presupuesto Asignado">
   </div>

    <div class="form-group col-md-4">

   <label> Fecha Inicio</label>
   <br>
   <input type="date">
</div>
 	
    	</div>

 	
<div class="form-row">

   	<div class="form-group col-md-4">
      <label>Distrito</label>
      <select  class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  </div>

  <div class="form-group col-md-4">

<label >Dias Calendario</label>
    <input type="text" class="form-control"  placeholder="Presupuesto Asignado">
   </div>

    <div class="form-group col-md-4">

   <label> Fecha Fin</label>
   <br>
   <input type="date">
</div>
 	
    	</div>
 


<div class="form-row">

<div class="form-group col-md-4">
      <label >Coordenadas de la Obra</label>
      <input type="text" class="form-control"  placeholder="Nombre de la Obra">
    </div>

<div class="form-group col-md-4">
    <label for="exampleFormControlFile1">Imagenes</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

</div>

<br>

<div class="form-row">

	<div class="form-group col-md-4">
  
	</div>



	<div class="form-group col-md-1">
  <button type="submit" class="btn btn-primary d-block mx-auto">Guardar</button>
  </div>
   
<div class="form-group col-md-2">
<button type="submit" class="btn btn-danger d-block mx-auto">Cancelar</button>
</div>


</div>

</form>






















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

@endsection