@extends('layouts.admin')
@section('title','Gestión de etiquetas ')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de etiquetas</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>
	</div>
	<div class="card-body table-responsive p-0">
		<a class="m-2 float-right btn btn-primary" href="{{route('vehicle.create')}}">Crear</a>
	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
                  <th>Conductor</th>
                  <th>Placa</th>
                  <th>Empresa</th>
                  <th colspan="2">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($vehicles as $vehicle)
			<tr>
				  <th scope="row">{{$vehicle->id}}</td>
                  <td>{{$vehicle->driver}}</td>
                  <td>{{$vehicle->plate}}</td>
                  <td>{{$vehicle->company}}</td>
			  	{{--  <td width="10px">
				  <a class="btn btn-default" href="{{route('vehicle.show', $vehicle->id)}}">Ver</a>
			  	</td>  --}}
			  	<td width="10px">
					<a class="btn btn-info" href="{{route('vehicle.edit', $vehicle->id)}}">Editar</a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['vehicle.destroy',$vehicle->id], 'method'=>'DELETE']) !!}
					<button class="btn btn-danger">Eliminar</button>
					{!! Form::close() !!}
				</td>
			</tr>
			  @endforeach
		  </tbody>
	  </table>
	{{$vehicles->render()}}
	</div>
	<div class="card-footer">
	  Footer
	</div>
  </div>
@endsection