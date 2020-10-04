@extends('layouts.admin')
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
    <div class='col-sm-10 mr-2'>
    <table class="table table-striped">
        <thead>
            <tr>
           
            <th scope="col">Nombre</th>
            <th scope="col">Locación</th>
            <th scope="col">Color</th>
            <th scope="col">Pasajeros</th>
            <th scope="col">Ganancias</th>
            <th scope="col">Contacto</th>
            <th scope="col">Social</th>
            <th scope="col">Editar</th>
            <th scope="col">Ruta</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
              
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            <tr>
                
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            
        </tbody>
        </table>
    </div>
</div>



@endsection