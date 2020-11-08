@extends('layouts.admin')
@section('title','Gestión de parques y jardines')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de parques y jardines</h3>
        

            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="{{route('parks.dashboard')}}" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('parks.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar parque
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
                    <th>Distrito</th>
                    <th>Dirección</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody id="res">

            </tbody>
        </table>
    </div>
    <div  class="card-footer">
        

        <a href=""></a>
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
