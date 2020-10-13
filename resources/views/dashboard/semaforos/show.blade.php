@extends('layouts.admin')
@section('title','Parque '.$semaforo->name)
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('semaforos.index')}}">Semáforos</a>
</li>
<li class="breadcrumb-item active">
    <a href="{{route('semaforos.dashboard')}}">Dashboard semáforos</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$semaforo->name}}</h3>




    </div>
    <div class="card-body">

    </div>
    <div class="card-footer">

    </div>

    {{--  VENTANA MODAL  --}}
    <div class="modal fade" id="modal-create-sensor">
        <div class="modal-dialog modal-create-sensor">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar nuevo sensor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route'=>'sensorsSemaforos.store', 'method'=>'POST']) !!}
                <div class="modal-body">
                    <div class="card-body ">
                        @include('dashboard.sensorsSemaforos._form')
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    {{--  FIN DE VENTANA MODAL  --}}
</div>


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sensores registrados</h3>
        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('sensorsSemaforos.create')}}" title="Agregar" data-toggle="modal"
                        data-target="#modal-create-sensor">
                        <i class="fas fa-plus"></i> Agregar sensor
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th style="width: 40px">Estatus</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($sensorsSemaforos))
                @foreach ($sensorsSemaforos as $sen)
                <tr>
                    <td>{{$sen->id}}</td>
                    <td>{{$sen->name}}</td>
                    <td>{{$sen->type}}</td>
                    @if ($sens->status == 'DISABLED')
                    <td>
                        {!! Form::model($sensor, ['route'=>['semaforos.active',$sen],'method'=>'PUT']) !!}
                        <button type="submit" class="btn btn-danger">Desactivado</button>
                        {!! Form::close() !!}
                    </td>
                    @else
                    <td>
                        {!! Form::model($sen, ['route'=>['semaforos.active',$sen],'method'=>'PUT']) !!}
                        <button type="submit" class="btn btn-success">Activado</button>
                        {!! Form::close() !!}
                    </td>
                    @endif


                    <td class="text-center">
                        {!! Form::open(['route'=>['sensorsSemaforos.destroy', $sen], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('sensors.edit', $sen)}}">
                            <i class="far fa-edit" style="color: blue"></i>
                        </a>
                        <button class="btn btn-light">
                            <i class="far fa-trash-alt" style="color: red"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>


@endsection
