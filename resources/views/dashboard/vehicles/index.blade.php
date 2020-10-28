@extends('layouts.admin')
@section('title','Gestión de autos')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de autos</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <a class="m-2 float-right btn btn-primary" href="{{route('vehicles.create')}}">Registrar</a>
        <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Conductor</th>
                    <th>Placa</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                <tr>
                    <th scope="row">{{$vehicle->id}}</td>
                    <td>{{$vehicle->driver}}</td>
                    <td>{{$vehicle->plate}}</td>

                    <td width="10px">
                        <a class="btn btn-default" href="{{route('vehicles.show', $vehicle)}}">Incidentes</a>
                    </td>
                    <td width="10px">
                        <a class="btn btn-info" href="{{route('vehicles.edit', $vehicle)}}">Editar</a>
                    </td>
                    <td width="10px">
                        {!! Form::open(['route'=>['vehicles.destroy',$vehicle], 'method'=>'DELETE']) !!}
                        <button class="btn btn-danger">Eliminar</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="card-footer">
        {{$vehicles->render()}}
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de incidentes</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <a class="m-2 float-right btn btn-primary" href="{{route('incidents.create')}}">Registrar</a>
        <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th scope="col">Placa</th>
                    <th>Color</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Tipo de vehículo</th>
                    <th>Conductor</th>
                </tr>
            </thead>
            <tbody id="res">

            </tbody>
        </table>
    </div>
    <div class="card-footer">
      
    </div>
</div>
@endsection

@section('scripts')
    <script>
        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', 'http://smartcityhuancayo.herokuapp.com/Parque/List_parque.php', true);
        xhttp.send();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                //console.log(this.responseText);

                //transformar a json
                let datos = JSON.parse(this.responseText);

                let red = document.querySelector('#res');
                res.innerHTML = '';
                console.log(datos.records);

                for(let item of datos.records){
                    res.innerHTML += `
                    <tr>
                        <td>${item.ID_Parque}</td>
                        <td>${item.PQ_Nombre}</td>
                        <td>${item.PQ_Descripcion}</td>
                        <td>${item.Distrito}</td>
                        <td>${item.PQ_Direccion}</td>
                        <td>
                            <a  type="button" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                    `
                }

            }
        }

    </script>
@endsection

