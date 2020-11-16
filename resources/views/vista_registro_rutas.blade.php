@extends('layouts.admin')

@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')

<h1>Empresas</h1>


<div class="row justify-content-center ">
    <div class="col-sm-8 ">
        <input class="form-control " type="search" placeholder="Buscar" aria-label="Buscar">
    </div>
    <div class="col-sm-2 ">
        <button class="btn btn-outline-success" type="submit">Recargar</button>
        
        <a href="{{route('registro_rutas')}}"> <button class="btn btn-outline-primary" type="submit">Nuevo</button></a>
    </div>
    <div class="col-sm-10 mr-2">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th >Nombre</th>
                    <th> Ruta</th>
                    <th >Direccion</th>
                    <th >Telefono</th>
                    <th >Editar</th>
                    <th >Registrar Ruta</th>
                    <th >Registrar Tramo</th>
                    <th > Ver Ruta</th>
                    
                </tr>
            </thead>
            <tbody id="res">

            </tbody>
        </table>
    </div>
</div>



@endsection

@section('scripts')
<script>
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'http://127.0.0.1/wb-pdo/EmpresaTransporte/consulta_empresa_ruta.php', true);
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
                    <td>${item.ID_Empresa_Transp}</td>
                    <td>${item.EMT_Nombre}</td>
                    <td>${item.RUT_Nombre}</td>
                    <td>${item.EMT_Direccion}</td>
                    <td>${item.EMT_Telefono}</td>

                    <td>
                    <a  type="button" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                    <a href="{{route('registro_tramo_rutas')}}?codigo=<?php echo'${item.ID_Empresa_Transp}'; ?>" type="button" class="btn btn-success">Registrar Ruta</a>
                    </td>
                    <td>
                    <a href="{{route('registrar_tramo')}}?codigo=<?php echo'${item.ID_Ruta}'; ?>" type="button" class="btn btn-danger">Registrar Tramo</a>
                    </td>

                    <td>
                    <form action="{{route('vista_emp_ru_tra')}}" method="GET">
                    <input type="submit" name="submit" value="Ver Ruta" class="btn btn-dark">
                    <input type="hidden" value="<?php echo '${item.ID_Ruta}';?>" name="ID_Ruta">
                    <input type="hidden" value="<?php echo '${item.ID_Empresa_Transp}';?>" name="ID_Empresa_Transp">
                    </form>
                    </td>
                    </tr>




                    `

                }

            }
        }

    </script>
    @endsection

