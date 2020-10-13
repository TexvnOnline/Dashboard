@extends('layouts.admin')
@section('title','Gestión de Lugar turistico')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lugar turistico</h3>
        

            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('contacts.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar Lugar turistico
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Distrito</th>
					<th scope="col">Inicio</th>
					<th scope="col">Fin</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->description}}</td>
                    <td>{{$contact->province}}</td>
                    <td>{{$contact->district}}</td>
					<td>{{$contact->start}}</td>
					<td>{{$contact->end}}</td>
                    <td class="text-center">
                        {!! Form::open(['route'=>['contacts.destroy', $contact], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('contacts.show', $contact)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('contacts.edit', $contact)}}">
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
        {{$contacts->render()}}
    </div>
</div>
@endsection