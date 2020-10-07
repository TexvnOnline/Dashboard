@extends('layouts.admin')
@section('title','Seguridad Ciudadana')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')

        <!-- START ALERTS AND CALLOUTS -->
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
                  <h5><i class="icon fas fa-info"></i>Delito más frecuente!</h5>
                  Info alert preview. This alert is dismissable.
                </div>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i>Zona más peligrosa!</h5>
                  Warning alert preview. This alert is dismissable.
                </div>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Cantidad delitos captados!</h5>
                  Success alert preview. This alert is dismissable.
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>

        </div>

@endsection

@section('scripts')
{!! Html::script('adminlte/dist/js/pages/dashboard2.js') !!}
{!! Html::script('adminlte/plugins/raphael/raphael.min.js') !!}
{!! Html::script('adminlte/plugins/jquery-mapael/jquery.mapael.min.js') !!}
{!! Html::script('adminlte/plugins/jquery-mapael/maps/usa_states.min.js') !!}
@endsection

