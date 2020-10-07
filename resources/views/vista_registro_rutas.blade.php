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
                <td>Huancayo</td>
                <td>Rojo</td>
                
                <td>435</td>
                <td>S/.1,500</td>
                <td>Celular</td>
                <td>Facebook</td>
                <td><button type="submit" class="btn btn-outline-info">Editar</button></td>
                <td><button type="submit" class="btn btn-outline-danger">Ver Ruta</button></td>
            </tr>
            <tr>
                
                <td>Jose</td>
                <td>Huancayo</td>
                <td>Verde</td>
                
                <td>460</td>
                <td>S/.1,800</td>
                <td>Celular</td>
                <td>Facebook</td>
                 <td><button type="submit" class="btn btn-outline-info">Editar</button></td>
                <td><button type="submit" class="btn btn-outline-danger">Ver Ruta</button></td>
            </tr>
            
        </tbody>
        </table>
    </div>
</div>



@endsection