
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
        margin: 0px;
        padding: 0;
      }
    </style>


<script src="https://maps.googleapis.com/maps/api/js?libraries=drawing&key=AIzaSyBzi3S9cTrkjwYl6QcizSW2gLz4foG2HsA" type="text/javascript"></script>
<script type="text/javascript">
const getLocations = () => {
    fetch('http://127.0.0.1/wb-pdo/EmpresaTransporte/consulta_tramo_id.php?ID_Ruta=40')
    .then(response => response.json())
    .then(locations => {
        let locationsInfo = []
         
        locations.forEach(location => {
            let locationData = {
                position:{lat:parseFloat(location.RT_Latitud_inicio),lng:parseFloat(location.RT_Longitud_inicio)},
                name:location.nombre_sede                
            }
            locationsInfo.push(locationData)
           
        })
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition((data)=>{
                let currentPosition = {
                    lat: data.coords.latitude,
                    lng: data.coords.longitude
                }
                dibujarMapa(currentPosition, locationsInfo)
            })
        }
    })
}

const dibujarMapa = (obj, locationsInfo) => {
   let map = new google.maps.Map(document.getElementById('map'),{
        zoom: 12,
        center: obj
    })

    let marker = new google.maps.Marker({
        position: obj,
        title: 'Tu ubicacion'

    })
    marker.setMap(map)

    let markers = locationsInfo.map(place => {
        return new google.maps.Marker({
            position: place.position,
            map: map,
            title: place.name,
            icon:'https://maps.google.com/mapfiles/ms/icons/orange-dot.png',
        })
    })
}
window.addEventListener('load',getLocations)
</script>
@extends('layouts.admin')


@section('content')


<div id="map"></div>
<div class="row">
    <div class="col-sm-2 col-md-7">
        <H3>Empresa</H3>
    </div>
    
</div>

<div class="row justify-content-center ">
    <div class="col-sm-8 ">
        <input class="form-control " type="search" placeholder="Buscar" aria-label="Buscar">
    </div>
    <div class="col-sm-2 ">
        <button class="btn btn-outline-success" type="submit">Recargar</button>
        
        <a href="{{route('registro_rutas')}}"> <button class="btn btn-outline-primary" type="submit">Nuevo</button></a>
    </div>
    <div class="col-sm-10 mr-2">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th >Nombre</th>
                    <th >Direccion</th>
                    <th> Ruta</th>
                    <th>Descripción de Ruta</th>

                    <th >Telefono</th>
                    
                    <th > Ver Ruta</th>
                    
                </tr>
            </thead>
            <tbody id="res">

            </tbody>
        </table>
    </div>
</div>
<!--<div class="col-md-3">
    <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
    <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
    <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
    <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
</div>-->
</div>


@endsection




@section('scripts')
<script>
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'http://127.0.0.1/wb-pdo/EmpresaTransporte/consulta_empresa_ruta.php', true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
                //console.log(this.responseText);

                //transformar a json
                let datos = JSON.parse(this.responseText);

                let red = document.querySelector('#res');
                res.innerHTML = '';
                console.log(datos.records);

                for(let item of datos.records){
                    res.innerHTML += `

                    <tr>
                    <td>${item.ID_Empresa_Transp}</td>
                    <td>${item.EMT_Nombre}</td>
                    <td>${item.EMT_Direccion}</td>
                    <td>${item.RUT_Nombre}</td>
                    <td>${item.RUT_Descripcion}</td>
                    
                    <td>${item.EMT_Telefono}</td>




                    <td>
                    <form action="{{route('vista_emp_ru_tra')}}" method="GET">
                    <input type="submit" name="submit" value="Ver Ruta" class="btn btn-dark">
                    <input type="hidden" value="<?php echo '${item.ID_Ruta}';?>" name="ID_Ruta">
                    <input type="hidden" value="<?php echo '${item.ID_Empresa_Transp}';?>" name="ID_Empresa_Transp">
                    </form>
                    </td>
                    </tr>




                    `

                }

            }
        }

    </script>
    @endsection