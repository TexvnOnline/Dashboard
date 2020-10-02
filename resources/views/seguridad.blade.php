@extends('layouts.admin')
@section('content')

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


@endsection



