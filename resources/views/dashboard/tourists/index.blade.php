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
                    <th scope="col">Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>URL</th>
                    <th>Distrito</th>
                    <th>Hora inicio</th>
                    <th>Hora fin </th>
                </tr>
            </thead>
            <tbody id="res">
             
                {{--  <tr>
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
                </tr>  --}}

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
            xhttp.open('GET', 'http://smartcityhuancayo.herokuapp.com/LugarTuristico/Listar_lugar_turistico.php', true);
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
                            <td>${item.ID_Lugar_Turistico}</td>
                            <td>${item.LT_Nombre}</td>
                            <td>${item.LT_Descripcion}</td>
                            <td>${item.LT_URL_Map}</td>
                            <td>${item.ID_Distrito}</td>
                            <td>${item.LT_Hora_Inicio}</td>
                            <td>${item.LT_Hora_Fin}</td>
                        </tr>
                        `
                    }
                }
            }
    
        </script>
@endsection
