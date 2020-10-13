@extends('layouts.admin')
@section('title','Gestión de Semáforos')
@section('style')
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') !!}
{!! Html::style('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') !!}



@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('semaforos.index')}}">Semáforos</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de semáforos</h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('semaforos.index')}}" title="Agregar" >
                        <i class="fas fa-list"></i> Lista de semáforos
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="card-body">
        <div id="mapCanvas" class="z-depth-1-half map-container" style="height: 500px">
            
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
                @foreach ($semaforos as $semaforo)
                <tr>
                    <td>{{$semaforo->id}}</td>
                    <td>{{$semaforo->name}}</td>
                    <td>{{$semaforo->direction}}</td>
                    <td>{{$semaforo->reference}}</td>
                    <td>{{$semaforo->description}}</td>
                    <td class="text-center">
                        <a class="btn btn-light" href="{{route('semaforos.show', $semaforo)}}">
                            <i class="far fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
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
            if($cont < $semaforosCount){
              echo '['.'"'.$marker['name'].'"'.','.$marker['latitude'].','.$marker['length'].'],';
              $cont++;
            }else if($cont == $semaforosCount){
              echo '['.'"'.$marker['name'].'"'.','.$marker['latitude'].','.$marker['length'].']';
            }
          }
       ?>];

        // Info window content
          <?php $cont2 = 1; ?>
          var infoWindowContent = [<?php foreach($markers as $marker) {
            if($cont2 < $semaforosCount){
                ?>
                ['<div class="info_content justify-content-center">'+
                    '<h3> <?php echo $marker['name']; ?> </h3>'+
                    '<p> <?php echo $marker['description']; ?> </p>'+

                    '<a class="btn btn-success" href="{{route('semaforos.show', $marker['id'])}}">'+
                        'Ver detalles <i class="far fa-eye"></i>'+
                    '</a>'+


                 '</div>'
                ], 
                <?php
              $cont2++;
            }else if($cont2 == $semaforosCount){
                ?>
                ['<div class="info_content justify-content-center">'+
                    '<h3> <?php echo $marker['name']; ?> </h3>'+
                    '<p> <?php echo $marker['description']; ?> </p>'+

                   '<a class="btn btn-success" href="{{route('semaforos.show', $marker['id'])}}">'+
                        'Ver detalles <i class="far fa-eye"></i>'+
                    '</a>'+

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
