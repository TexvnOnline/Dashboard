@extends('layouts.admin')
@section('title','Gestión de obras')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de obras</h3>
        

            {{--  <div class="card-tools">
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
            </div>  --}}
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>Monto</th>
                    <th>Encargado</th>
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
        xhttp.open('GET', 'http://smartcityhyo.tk/api/Obra/Listar_Obra.php', true);
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
                        <td>${item.OBR_Nombre}</td>
                        <td>${item.OBR_Descripcion}</td>
                        <td>${item.OBR_Fecha_Inicio}</td>
                        <td>${item.OBR_Fecha_Fin}</td>
                        <td>${item.OBR_Monto}</td>
                        <td>${item.Encargado_Nombre}</td>
                    </tr>
                    `
                }

            }
        }

    </script>
@endsection
