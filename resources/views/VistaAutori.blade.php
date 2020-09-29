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

    <title>Vista Autoridades</title>
  </head>
  <body>
    <h2>Vista Autoridades</h2>


    <form>

      <div class="form-row ">

        <div class="form-group col-md-6">

          <label>Municipio</label>
          <select class="form-control">
        <option selected="">Chosee..</option>
        <option>..</option>
      </select>

      <label>Periodo</label>
      <select class="form-control">
        <option selected="">Chosee..</option>
        <option>..</option>
      </select>

        </div>
    


    

        <div class="form-group col-md-6 ">
     <div style=”padding:8px;background-color:#B7F259;line-height:4;”>
      <div class="form-row">
                <br>
        
    <label  class="col-sm-14 col-form-label d-block mx-auto">Porcentaje de Presupuesto Utilizado: php aqui</label>
    
   
    

    
     
 
    <label class="col-sm-14 col-form-label d-block mx-auto">Cantidad de Obras en Curso:php</label>

    <label class="col-sm-14 col-form-label d-block mx-auto"> Cantidad de Obras Ejecutadas: php</label>
<br>
  </div>
    
        </div>
 </div>
</div>

    <div class="form-row">
      <div class="form-group col-md-4">
      <label>Fotografia</label>
      <br>
      <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="150px">
    </div>

    <div class="form-group col-md-4">
     
      <label>Nombre de la Obra </label>
      <p>Nombre Obra php</p>

      <div class="form-row">
      <div class="form-group col-md-4">
      <label>Tipo de Obra</label>


      <p>Tipo obra php</p> 
    </div>
     <div class="form-group col-md-7">
      <label>Presupuesto Utilizado:php</label>
      
      <label>Dias Transcurridos:php</label>
    </div>
  </div>


</div>

<div class="form-group col-md-2">
  <br>
  <br>
<a href="" class="btn btn-success d-block mx-auto">Ver detalles</a>
</div>


</div>


<div class="form-row">
      <div class="form-group col-md-4">
      <label>Fotografia</label>
      <br>
      <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="150px">
    </div>

    <div class="form-group col-md-4">
     
      <label>Nombre de la Obra </label>
      <p>Nombre Obra php</p>

      <div class="form-row">
      <div class="form-group col-md-4">
      <label>Tipo de Obra</label>


      <p>Tipo obra php</p> 
    </div>
     <div class="form-group col-md-7">
      <label>Presupuesto Utilizado:php</label>
      
      <label>Dias Transcurridos:php</label>
    </div>
  </div>


</div>

<div class="form-group col-md-2">
  <br>
  <br>
<a href="" class="btn btn-success d-block mx-auto">Ver detalles</a>
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
