@extends('layouts.admin')
@section('title','Gestión de Tipos de incidente')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gestión de Tipos de incidente</h3>
        

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
                    
                    
                    <th>Nombre</th>
                    <th>Descripción</th>
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
        xhttp.open('GET', 'http://smartcityhyo.tk/api/Tipo_incidente/List_Tipo_incidente.php', true);
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
                        <td>${item.TIN_Nombre}</td>
                        <td>${item.TIN_Descripcion}</td>
                        

                    </tr>
                    
                    `

                }

            }
        }

    </script>
@endsection
