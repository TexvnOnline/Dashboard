@extends('layouts.admin')
@section('title','Gestión de incidentes')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de incidentes</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
	</div>
	<div class="card-body table-responsive p-0">
		<a class="m-2 float-right btn btn-primary" href="{{route('incidents.create')}}">Crear</a>
	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Usuario</th>
                  <th>Titulo</th>
                  <th>Descripción</th>
                  <th>foto</th>
                  <th colspan="2">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($incidents as $incident)
			<tr>
				  <th scope="row">{{$incident->id}}</td>
					<td>{{$incident->user->name}}</td>
                  <td>{{$incident->title}}</td>
                  <td>{{$incident->description}}</td>
                  <td>
					<img src="{{$incident->photo}}" alt="..." class="img-thumbnail">
				  </td>
			  	{{--  <td width="10px">
				  <a class="btn btn-default" href="{{route('incident.show', $incident->id)}}">Ver</a>
			  	</td>  --}}
			  	<td width="10px">
					<a class="btn btn-info" href="{{route('incidents.edit', $incident->id)}}">Editar</a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['incidents.destroy',$incident->id], 'method'=>'DELETE']) !!}
					<button class="btn btn-danger">Eliminar</button>
					{!! Form::close() !!}
				</td>
			</tr>
			  @endforeach
		  </tbody>
	  </table>
	{{$incidents->render()}}
	</div>
	<div class="card-footer">
	  Footer
	</div>
  </div>
@endsection