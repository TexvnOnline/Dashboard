@extends('layouts.admin')
@section('title','Gestión de restaurantes')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        {{--  <h3 class="card-title">Sección de Empresas</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>  --}}
        <div class="row">
            <div class="col-sm-8 ">
                <input class="form-control " type="search" placeholder="Buscar" aria-label="Buscar">
            </div>
            <div class="col-sm-4 ">
                <button class="btn btn-success" type="submit">Buscar</button>
                <a href="{{route('restaurants.create')}}" class="btn btn-success" type="submit">Agregar</a>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Distrito</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                <tr>
                    <th scope="row">{{$restaurant->id}}</th>
                    <td>{{$restaurant->name}}</td>
                    <td>{{$restaurant->description}}</td>
                    <td>{{$restaurant->district}}</td>
                    <td class="text-center">
                        {!! Form::open(['route'=>['restaurants.destroy', $restaurant], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('restaurants.show', $restaurant)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('restaurants.edit', $restaurant)}}">
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

    </div>
</div>
@endsection
