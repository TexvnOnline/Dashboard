@extends('layouts.admin')
@section('title','Gestion Lugar Turistico')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lugar Turistico</h3>
        

            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('tourists.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar Lugar Turistico
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
                    <th>fotografías</th>
                    
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tourists as $tourist)
                <tr>
                    <td>{{$tourist->id}}</td>
                    <td>{{$tourist->name}}</td>
                    <td>{{$tourist->description}}</td>
                    <td>{{$tourist->province}}</td>
                    <td>{{$tourist->district}}</td>
                    <td><a href="{{route('tourists.images',$tourist)}}" class="btn btn-primary">
                        Agregar fotografías
                        </a>
                    </td>
                    <td class="text-center">
                        {!! Form::open(['route'=>['tourists.destroy', $tourist], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('tourists.show', $tourist)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('tourists.edit', $tourist)}}">
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
        {{$tourists->render()}}
    </div>
</div>
@endsection
