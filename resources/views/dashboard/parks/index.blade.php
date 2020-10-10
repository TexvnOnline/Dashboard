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
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="{{route('parks.dashboard')}}" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('parks.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar parque
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
                @foreach ($parks as $park)
                <tr>
                    <td>{{$park->id}}</td>
                    <td>{{$park->name}}</td>
                    <td>{{$park->direction}}</td>
                    <td>{{$park->reference}}</td>
                    <td>{{$park->description}}</td>
                    <td class="text-center">
                        {!! Form::open(['route'=>['parks.destroy', $park], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('parks.show', $park)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('parks.edit', $park)}}">
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
        {{$parks->render()}}
    </div>
</div>
@endsection
