
@extends('layouts.admin')
@section('title','Obras')
@section('style')
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') !!}
{!! Html::style('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') !!}



@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('parks.index')}}">Obras</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Obras</h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('parks.index')}}" title="Agregar" >
                        <i class="fas fa-list"></i> Obras
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="card-body">
        <div id="map" class="z-depth-1-half map-container" style="height: 500px">
            
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>


<div class="card">
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered">
            
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Referencia</th>
                    <th>Descripción</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
    </div>
</div>





@endsection
@section('scripts')

{!! Html::script('https://code.jquery.com/jquery-3.5.1.js') !!}
{!! Html::script('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') !!}
{!! Html::script('https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js') !!}

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "info": "_TOTAL_ registros",
                "search": "Buscar",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                },
                "lengthMenu": 'Mostrar <select class="form-control">' +
                    '<option value="10">10</option>' +
                    '<option value="30">30</option>' +
                    '<option value="50">50</option>' +
                    '<option value="100">100</option>' +
                    '<option value="-1">Todo</option>' +
                    '</select> registros',
                "loadinRecords": "Cargando...",
                "processing": "Procesando...",
                "emptyTable": "No hay datos",
                "zeroRecords": "No hay coincidencias",
                "infoEmpty": "",
                "infoFiltered": "",
            }
        });
    });

</script>

{{--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVPNYNXFVLnZTPeiLBDm3CzjsQ_H3Kq4c&callback=initMap">
</script>  --}}
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzi3S9cTrkjwYl6QcizSW2gLz4foG2HsA&callback=initMap&libraries=&v=weekly"
defer
></script>

<script>
    const getLocations = () => {
        fetch('https://smartcityhyo.tk/api/Obra/Listar_Obra.php')
        .then(response => response.json())
        .then(locations => {
            let locationsInfo = []
            
            locations.records.forEach(location => {
                let locationData = {
                    position:{lat:parseFloat(location.OBR_Coordenada_X), lng:parseFloat(location.OBR_Coordenada_Y)},
                    name:location.OBR_Nombre                
                }
                console.log(locationData.position)

                
                locationsInfo.push(locationData)
            })
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition((data)=>{
                    let currentPosition = {
                        lat: -12.062813,
                        lng: -75.1964915
                    }
                    dibujarMapa(currentPosition, locationsInfo)
                })
            }
            
        })
    }
    
    const dibujarMapa = (obj, locationsInfo) => {
       let map = new google.maps.Map(document.getElementById('map'),{
            zoom: 
            13,
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
                title: place.name
            })

           
        })
    }
    window.addEventListener('load',getLocations)
</script>


{{--  <script>
    const getLocations = () => {
        fetch('https://www.datos.gov.co/resource/g373-n3yy.json')
        .then(response => response.json())
        .then(locations => {
            let locationsInfo = []
            
            locations.forEach(location => {
                let locationData = {
                    position:{lat:location.punto.coordinates[1],lng:location.punto.coordinates[0]},
                    name:location.nombre_sede                
                }
                console.log(locationData)

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
            zoom: 4,
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
                title: place.name
            })
        })
    }
    window.addEventListener('load',getLocations)
</script>  --}}

@endsection
