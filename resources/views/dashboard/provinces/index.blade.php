@extends('layouts.admin')
@section('title','Provincias de ')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de provincias</h3>
	  <div class="card-tools row">
		<div class="col-sm-8">
            <div class="row">
                <div class="col-sm-8">
                    <input class="form-control " type="search" placeholder="Buscar" aria-label="Buscar">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-success" type="submit">Buscar</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 ">
            <a href="{{route('provinces.create')}}" class="btn btn-primary" type="submit">Agregar</a>
        </div>
	  </div>
       
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($provinces as $province)
                <tr>
                    <th scope="row">{{$province->id}}</th>
                    <td>{{$province->name}}</td>
                    <td class="text-center">
                        {!! Form::open(['route'=>['provinces.destroy', $province], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('provinces.show', $province)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('provinces.edit', $province)}}">
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
        {{$provinces->render()}}
    </div>
</div>
@endsection
