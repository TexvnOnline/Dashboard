@extends('layouts.admin')

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzi3S9cTrkjwYl6QcizSW2gLz4foG2HsA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 60%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 60%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
    	
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -12.0484232, lng: -75.2376588 },
          zoom: 11,
        });
        var huancayo={lat:-12.068546, lng:-75.212144};
        var huanca={lat:-12.067622,  lng:-75.208324};
       var marker=new google.maps.Marker(
       {
       	position:huancayo,
       	map: map
       });

       var marker=new google.maps.Marker(
       {
       	position:huanca,
       	map: map
       });
      }
    </script>
@section('content')

<!--<div id="map-container-google-1" class="z-depth-1-half map-container ">
  <iframe src="https://maps.google.com/maps?q=huancayo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>-->
<div id="map"></div>
 <div class="row">
        <div class="col-sm-2 col-md-7">
            <H3>Empresa</H3>
        </div>
        <div class="col-md-5 text-center">
            <h3>Ruta</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <div class="row justify-content-left ">
    <div class="col-sm-9 ">
        <input class="form-control " type="search" placeholder="Buscar" aria-label="Buscar">
    </div>
    <div class="col-sm-3 ">
        <button class="btn btn-outline-success" type="submit">Recargar</button>
       
       <a href="{{route('registro_rutas')}}"> <button class="btn btn-outline-primary" type="submit">Nuevo</button></a>
    </div>
    <div class='col-sm-2 '>
    <table class="table table-striped">
        <thead>
            <tr>
           
            <th scope="col">Nombre</th>
            <th scope="col">Locación</th>
            <th scope="col">Color</th>
            <th scope="col">Pasajeros</th>
            <th scope="col">Ganancias</th>
            <th scope="col">Contacto</th>
            <th scope="col">Social</th>
            <th scope="col">Editar</th>
            <th scope="col">Ruta</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
              
                <td>Mark</td>
                <td>Huancayo</td>
                <td>Rojo</td>
                
                <td>435</td>
                <td>S/.1,500</td>
                <td>Celular</td>
                <td>Facebook</td>
                <td><button type="submit" class="btn btn-outline-info">Editar</button></td>
                <td><button type="submit" class="btn btn-outline-danger">Ver Ruta</button></td>
            </tr>
            <tr>
                
                <td>Jose</td>
                <td>Huancayo</td>
                <td>Verde</td>
                
                <td>460</td>
                <td>S/.1,800</td>
                <td>Celular</td>
                <td>Facebook</td>
                 <td><button type="submit" class="btn btn-outline-info">Editar</button></td>
                <td><button type="submit" class="btn btn-outline-danger">Ver Ruta</button></td>
            </tr>
            
        </tbody>
        </table>

    </div>

</div>
        </div>
        <div class="col-md-3">
            <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
            <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
            <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
            <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
        </div>
    </div>


@endsection


