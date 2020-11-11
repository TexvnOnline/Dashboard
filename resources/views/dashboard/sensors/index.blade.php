@extends('layouts.admin')
@section('title','Sensores')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sensores</h3>
        

            {{-- <div class="card-tools">
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
            </div> --}}
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Id parque</th>
                    <th>Nombre de parque</th>
                    <th>Nivel</th>
                    <th>Fecha</th>

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
        xhttp.open('GET', 'http://smartcityhyo.tk/api/Sensores/Listar_Sensores.php', true);
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
                        <td>${item.ID_Sensor}</td>
                        <td>${item.SE_Tipo}</td>
                        <td>${item.ID_Parque}</td>
                        <td>${item.Parque}</td>
                        <td>${item.SE_Nivel}</td>
                        <td>${item.SE_Fecha}</td>    
                    </tr>
                    `
                }

            }
        }

    </script>
@endsection
