@extends('layouts.admin')
@section('title','Gestión de parques y jardines')
@section('style')
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') !!}
{!! Html::style('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') !!}



@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('parks.index')}}">Parques</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de parques y jardines</h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('parks.index')}}" title="Agregar" >
                        <i class="fas fa-list"></i> Lista de parques
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








@endsection
@section('scripts')

{!! Html::script('https://code.jquery.com/jquery-3.5.1.js') !!}
{!! Html::script('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') !!}
{!! Html::script('https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js') !!}



<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzi3S9cTrkjwYl6QcizSW2gLz4foG2HsA&callback=initMap&libraries=&v=weekly"></script>

<script>
    const getLocations = () => {
        fetch('https://smartcityhyo.tk/api/Parque/List_parque.php')
        .then(response => response.json())
        .then(locations => {
            let locationsInfo = []
            
            locations.records.forEach(location => {
                let locationData = {
                    position:{lat:parseFloat(location.PQ_Latitud), lng:parseFloat(location.PQ_Longitud)},
                    name:location.PQ_Nombre                
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
@endsection
