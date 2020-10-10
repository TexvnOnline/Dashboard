@extends('layouts.admin')
@section('title','....')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">...</h3>
        

            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('hotels.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar hoteles
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
                    <th>Descripción</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                <tr>
                    <td>{{$hotel->id}}</td>
                    <td>{{$hotel->name}}</td>
                    <td>{{$hotel->description}}</td>
                    <td>{{$hotel->province}}</td>
                    <td>{{$hotel->district}}</td>
                    <td class="text-center">
                        {!! Form::open(['route'=>['hotels.destroy', $hotel], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('hotels.show', $hotel)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('hotels.edit', $hotel)}}">
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
        {{$hotels->render()}}
    </div>
</div>
@endsection
