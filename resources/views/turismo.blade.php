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
            <th scope="col">Descripción</th>
            <th scope="col">Distrito</th>
            <th scope="col">Fotografía</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td><img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" alt="" height="70px"></td>
                <td><i class="fas fa-pen-square mr-4"></i><i class="fas fa-trash"></i></td>
            </tr>
        </tbody>
        </table>
    </div>
</div>
@endsection
