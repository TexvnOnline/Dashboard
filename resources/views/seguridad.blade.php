@extends('layouts.admin')
@section('title','Seguridad Ciudadana')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detalles de seguridad</h3>
    </div>

<div class="col-md-3">
    <div class="card bg-warning">
    <div class="card-header">
    <h3 class="card-title">Delito más frecuente</h3>

    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
    </button>
    </div>
    <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    inf base de datos
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="col-md-3">
    <div class="card bg-warning">
    <div class="card-header">
    <h3 class="card-title">Zonas más peligrosa</h3>

    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
    </button>
    </div>
    <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    inf base de datos
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="col-md-3">
    <div class="card bg-warning">
    <div class="card-header">
    <h3 class="card-title">Cantidad delitos captados</h3>

    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
    </button>
    </div>
    <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    inf base de datos
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="form-group">
    <label>Seleccione acto delictivo</label>
    <select class="form-control">
    <option>Hurto</option>
    <option>Robo</option>
    <option>Abigeato</option>
    <option>Asesinato</option>
    </select>
</div>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<section class="content">        
<!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">US-Visitors Report</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px; overflow: hidden">
                      <div class="map"></div>
                    </div>
                  </div>
                  <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block mb-4">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">70%</h5>
                      <span class="description-text">Organic</span>
                    </div>
                    <!-- /.description-block -->
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection

@section('scripts')
{!! Html::script('adminlte/dist/js/pages/dashboard2.js') !!}
{!! Html::script('adminlte/plugins/raphael/raphael.min.js') !!}
{!! Html::script('adminlte/plugins/jquery-mapael/jquery.mapael.min.js') !!}
{!! Html::script('adminlte/plugins/jquery-mapael/maps/usa_states.min.js') !!}
@endsection

