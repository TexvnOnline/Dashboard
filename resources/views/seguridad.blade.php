@extends('layouts.admin')
@section('title','Seguridad Ciudadana')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')

<style type="text/css">
#map{
  height:25em;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?libraries=drawing&key=AIzaSyBzi3S9cTrkjwYl6QcizSW2gLz4foG2HsA" type="text/javascript"></script>

<script type="text/javascript">
const getLocations = () => {
    fetch('http://smartcityhyo.tk/api/Seguridad/Listar_delitos.php')
    .then(response => response.json())
    .then(locations => {
        let locationsInfo = []
         
        locations.forEach(location => {
            let locationData = {
                position:{lat:parseFloat(location.RD_Latitud),lng:parseFloat(location.RD_Longitud)},
                name:location.RD_Descripcion                
            }
            locationsInfo.push(locationData)
            console.log(locationData);
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
        center: { lat: -12.0665806, lng: -75.2128854, },
        zoom: 14
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
            title: place.name
        })
    })
}
window.addEventListener('load',getLocations)
</script>

@section('content')

<div id="map"></div>
<h5 class="mt-4 mb-2">Detalle delitos</h5>

<div class="row">
  <div class="col-md-6">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-exclamation-triangle"></i>
          Alertas
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i>Delito más frecuente!</h5>
          <h6><ul id=resis></ul></h6>
        </div>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i>Zona más peligrosa!</h5>
          <h6><ul id=resi></ul></h6>
        </div>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Cantidad delitos captados!</h5>
          <h6><ul id=resiste></ul></h6>
        </div>
      </div>
</div>


</div>
<div class="col-sm-6">
  <div class="form-group">
    <label>Seleccione tipo delito</label>
    <select class="form-control" id="res">
    <option>Delito 1</option>
    <option>Delito 2</option>
    <option>Delito 3</option>
    <option>Delito 4</option>
    <option>Delito 5</option>
    </select>
    </div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detalle de delitos hasta la fecha</h3>
  </div>
  <div class="card-body p-0">
    <div class="card-body table-responsive p-0">
      <table class="table table-head-fixed">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Tipo Delito</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Lugar</th>
          </tr>
        </thead>
        <tbody id="resist">
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
</div>

@endsection

@section('scripts')
    <script>
        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', 'http://smartcityhyo.tk/api/Seguridad/Listar_delitos.php', true);
        xhttp.send();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                //console.log(this.responseText);

                //transformar a json
                let datos = JSON.parse(this.responseText);

                let red = document.querySelector('#res');
                res.innerHTML = '';
                console.log(datos);

                for(let item of datos){
                    res.innerHTML += `
                    <tr>
                        <option>${item.RD_Tipo_Delito}</option>
                    </tr>
                    `
                }

                let redi = document.querySelector('#resi');
                resi.innerHTML = '';
                console.log(datos);

                let i = 0;

                for(let item of datos){

                    i++;
                    resi.innerHTML += `
                    <tr>
                        <option>${item.RD_Lugar_Delito} &nbsp ${item.RD_Fecha_Hora.substr(0,10)}</option>
                    </tr>
                    `

                    if(i<2){
                      break;
                    }
                }


                let redis = document.querySelector('#resis');
                resis.innerHTML = '';
                console.log(datos);

                let d = 0;

                for(let item of datos){

                    d++;
                    resis.innerHTML += `
                    <tr>
                        <option>${item.RD_Tipo_Delito} &nbsp ${item.RD_Fecha_Hora.substr(0,10)}</option>
                    </tr>
                    `

                    if(d<2){
                      break;
                    }
                }

                let redil = document.querySelector('#resist');
                resist.innerHTML = '';
                console.log(datos);

                for(let item of datos){
                    resist.innerHTML += `
                    <tr>
                        <td>${item.ID_Camara}</td>
                        <td>${item.RD_Tipo_Delito}</td>
                        <td>${item.RD_Descripcion}</td>
                        <td>${item.RD_Fecha_Hora.substr(0,10)}</td>
                        <td>${item.RD_Lugar_Delito}</td>
                    </tr>
                    `
                }

                let redila = document.querySelector('#resiste');
                resiste.innerHTML = '';
                console.log(datos);


                for(let item of datos){

                    resiste.innerHTML += `
                    <tr>
                        <td>${item.ID_Camara}</td>
                    </tr>
                    `
                }

            }
        }

    </script>
@endsection
