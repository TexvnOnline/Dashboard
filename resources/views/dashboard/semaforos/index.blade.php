@extends('layouts.admin')
@section('title','Gestión de semáforos')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de semáforos</h3>
        

            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active btn-success" href="{{route('semaforos.dashboard')}}" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver semáforos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active btn-success " href="{{route('semaforos.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar semaforo
                        </a>
                    </li>
                </ul>
            </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed">
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
                        {!! Form::open(['route'=>['semaforos.destroy', $semaforo], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('parks.show', $semaforo)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('parks.edit', $semaforo)}}">
                            <i class="far fa-edit"></i>
                        </a>
                        <button class="btn btn-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$semaforos->render()}}
    </div>
</div>
@endsection
