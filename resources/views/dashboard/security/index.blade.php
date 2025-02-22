@extends('layouts.admin')
@section('title','Seguridad Ciudadana')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')

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


<script>

      let map;
      let marker; //Animación

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -12.0665806, lng: -75.2128854, },
          zoom: 14,
        });
        var huancayo={lat:-12.068546, lng:-75.212144};
        var huanca={lat:-12.070835,  lng:-75.204644};
        var ocopilla={lat:-12.073043,  lng:-75.198949};

       var marker=new google.maps.Marker(
       {
        position:huancayo,
        map: map,
        icon:'https://maps.google.com/mapfiles/ms/icons/orange-dot.png',
       });


       var marker=new google.maps.Marker(
       {
        position:huanca,
        map: map,
        icon:'https://maps.google.com/mapfiles/ms/icons/orange-dot.png',
        draggable: true,
        animation: google.maps.Animation.DROP,
       });

        marker.addListener("click", toggleBounce);

       function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
        }

        var marker=new google.maps.Marker(
        {
        position:ocopilla,
        map: map,
        icon:'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
        });

      }

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
          Información de la base de datos.
        </div>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i>Zona más peligrosa!</h5>
          Información de la base de datos.
        </div>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Cantidad delitos captados!</h5>
          Información de la base de datos.
        </div>
      </div>
</div>


</div>
<div class="col-sm-6">
  <div class="form-group">
    <label>Seleccione tipo delito</label>
    <select class="form-control">
    <option>Delito 1</option>
    <option>Delito 2</option>
    <option>Delito 3</option>
    <option>Delito 4</option>
    <option>Delito 5</option>
    </select>
    </div>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Porcentaje general delitos</h3>
  </div>
  <div class="card-body p-0">
    <table class="table table-sm">
      <thead>
        <tr>
          <th style="width: 10px">#</th>
          <th>Delito</th>
          <th>Progreso</th>
          <th style="width: 40px">Porcentaje</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Delito 1</td>
          <td>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
            </div>
          </td>
          <td><span class="badge bg-danger">55%</span></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Delito 2</td>
          <td>
            <div class="progress progress-xs">
              <div class="progress-bar bg-warning" style="width: 70%"></div>
            </div>
          </td>
          <td><span class="badge bg-warning">70%</span></td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Delito 3</td>
          <td>
            <div class="progress progress-xs progress-striped active">
              <div class="progress-bar bg-primary" style="width: 30%"></div>
            </div>
          </td>
          <td><span class="badge bg-primary">30%</span></td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Delito 4</td>
          <td>
            <div class="progress progress-xs progress-striped active">
              <div class="progress-bar bg-success" style="width: 90%"></div>
            </div>
          </td>
          <td><span class="badge bg-success">90%</span></td>
        </tr>
        <tr>
          <td>5.</td>
          <td>Delito 5</td>
          <td>
            <div class="progress progress-xs progress-striped active">
              <div class="progress-bar bg-success" style="width: 15%"></div>
            </div>
          </td>
          <td><span class="badge bg-success">15%</span></td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
</div>
</div>

@endsection

@section('scripts')




@endsection
