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
                    <th scope="col">URL</th>
                    <th scope="col">Distrito</th>
					<th scope="col">Hora inicio</th>
					<th scope="col">Hora fin</th>
                    <th>&nbsp;</th>
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