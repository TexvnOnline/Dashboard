@extends('layouts.admin')
@section('content')
<h1>Lugares Turísticos</h1>
<div class="row justify-content-center">
    <div class="col-sm-7 ">
        <input class="form-control " type="search" placeholder="Buscar" aria-label="Buscar">
    </div>
    <div class="col-sm-2 ">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
        <button class="btn btn-success my-2 my-sm-0" type="submit">Agregar</button>
    </div>
    <div class='col-sm-9'>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td></td>
                <td></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td></td>
                <td></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
                     
        </tbody>
        </table>
    </div>
</div>
@endsection