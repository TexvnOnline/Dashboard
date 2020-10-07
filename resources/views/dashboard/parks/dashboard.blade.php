@extends('layouts.admin')
@section('title','Gestión de parques y jardines')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de parques y jardines</h3>
        <div class="card-tools">

        </div>
    </div>
    <div class="card-body">
        {{--  <div id="mapCanvas" class="z-depth-1-half map-container" style="height: 500px"></div>  --}}
        <div id="mapCanvas" class="z-depth-1-half map-container" style="height: 500px"></div>
    </div>
    <div class="card-footer">

    </div>
</div>
@endsection
@section('scripts')


{{--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4P11ikLTgBjGY_tWHvdkxTF0JC7jYzH4&callback=initMap">
</script>  --}}

<script>
    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var mapOptions = {
            mapTypeId: 'roadmap'
        };

        // Display a map on the web page
        map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
        map.setTilt(50);

        // Multiple markers location, latitude, and longitude
        <?php $cont = 1; ?>
        var markers = [<?php foreach($markers as $marker) {
            if($cont < $parksCount){
              echo '['.'"'.$marker['name'].'"'.','.$marker['latitude'].','.$marker['length'].'],';
              $cont++;
            }else if($cont == $parksCount){
              echo '['.'"'.$marker['name'].'"'.','.$marker['latitude'].','.$marker['length'].']';
            }
          }
       ?>];

        // Info window content
          <?php $cont2 = 1; ?>
          var infoWindowContent = [<?php foreach($markers as $marker) {
            if($cont2 < $parksCount){
                ?>
                ['<div class="info_content">'+
                    '<h3> <?php echo $marker['name']; ?> </h3>'+
                    '<p> <?php echo $marker['description']; ?> </p>'+
                 '</div>'
                ], 
                <?php
              $cont2++;
            }else if($cont2 == $parksCount){
                ?>
                ['<div class="info_content">'+
                    '<h3> <?php echo $marker['name']; ?> </h3>'+
                    '<p> <?php echo $marker['description']; ?> </p>'+
                 '</div>'
                ], 
                <?php
            }
          }
       ?>];
          
          

        // Add multiple markers to map
        var infoWindow = new google.maps.InfoWindow(),
            marker, i;

        // Place each marker on the map  
        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                title: markers[i][0]
            });

            // Add info window to marker    
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));

            // Center the map to fit all markers on the screen
            map.fitBounds(bounds);
        }

        // Set zoom level
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
            this.setZoom(14);
            google.maps.event.removeListener(boundsListener);
        });

    }

    // Load initialize function
    google.maps.event.addDomListener(window, 'load', initMap);

</script>


@endsection
