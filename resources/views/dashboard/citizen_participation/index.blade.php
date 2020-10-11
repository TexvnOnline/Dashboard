@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="ion ion-clipboard mr-1"></i>
            Departamentos registrados
        </h3>
        <div class="card-tools">
            {{$departments->render()}}
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>name</th>
              <th>Provincias</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($departments as $department)
              <tr>
                <td>{{$department->id}}</td>
                <td>{{$department->name}}</td>
                <th>
                    <a href="{{route('departments.show', $department)}}" class="btn btn-warning">Provincias</a>
                </th>
                <td class="text-center">
                    {!! Form::open(['route'=>['departments.destroy', $department], 'method'=>'DELETE']) !!}
                    <a class="btn btn-light" href="{{route('departments.edit', $department)}}" data-toggle="modal" data-target="#modal-edit-department{{$department->id}}">
                        <i class="far fa-edit"></i>
                    </a>
                    <button type="submit" class="btn btn-light">
                        <i class="far fa-trash-alt"></i>
                    </button>
                    {!! Form::close() !!}
                </td>
              </tr>
              @include('dashboard.departments.edit')
              @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a href="{{route('departments.create')}}" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-create-department"><i class="fas fa-plus"></i> Agregar</a>
    </div>
</div>

@include('dashboard.departments.create')


@endsection
