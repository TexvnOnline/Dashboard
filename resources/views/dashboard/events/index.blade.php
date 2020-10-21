@extends('layouts.admin')
@section('title','Gestión de Eventos')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Eventos</h3>
        

            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('events.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar Eventos
                        </a>
                    </li>
                </ul>
            </div>
    </div>
    <div class="card-body table-responsive p-0">

        <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th>Nombres</th>
                    <th>Descripción</th>
                    <th>Detalles</th>
                    <th>Fotografia</th>
                    <th>Fecha y Hora</th>
                    <th>Longitud </th>
                    <th>Id Distrito</th>
                    <th>Distrito</th>
                    <th>Latitud </th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody id="res">
                @foreach ($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->name}}</td>
                    <td>{{$event->description}}</td>
                    <td>{{$event->province}}</td>
                    <td>{{$event->district}}</td>
					<td>{{$event->date}}</td>
					<td>{{$event->time}}</td>
                    <td class="text-center">
                        {!! Form::open(['route'=>['events.destroy', $event], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('events.show', $event)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('events.edit', $event)}}">
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
        {{$events->render()}}
    </div>
</div>
@endsection



@section('scripts')

        <script>
            const xhttp = new XMLHttpRequest();
            xhttp.open('GET', 'http://smartcityhuancayo.herokuapp.com/Evento/List_Evento.php', true);
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
                            <td>${item.ID_Eventos}</td>
                            <td>${item.EVE_Nombres}</td>
                            <td>${item.EVE_Descripcion}</td>
                            <td>${item.EVE_Detalles}</td>
                            <td>${item.EVE_Fotografia}</td>
                            <td>${item.EVE_Fecha_Hora}</td>
                            <td>${item.EVE_Longitud}</td>
                            <td>${item.ID_Distrito}</td>
                            <td>${item.Distrito}</td>
                            <td>${item.EVE_Latitud}</td>
                        </tr>
                        `
                    }
                }
            }
    
        </script>
@endsection
