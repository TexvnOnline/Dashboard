@extends('layouts.admin')
<style type="text/css">
	
.map-container{

padding-bottom:30%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
</style>
@section('content')

<div id="map-container-google-1" class="z-depth-1-half map-container ">
  <iframe src="https://maps.google.com/maps?q=huancayo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>
 <div class="row">
        <div class="col-sm-2 col-md-7">
            <H3>Empresa</H3>
        </div>
        <div class="col-md-5 text-center">
            <h3>Ruta</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <div class="row justify-content-left ">
    <div class="col-sm-9 ">
        <input class="form-control " type="search" placeholder="Buscar" aria-label="Buscar">
    </div>
    <div class="col-sm-3 ">
        <button class="btn btn-outline-success" type="submit">Recargar</button>
       
       <a href="{{route('registro_rutas')}}"> <button class="btn btn-outline-primary" type="submit">Nuevo</button></a>
    </div>
    <div class='col-sm-2 '>
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
        </div>
        <div class="col-md-3">
            <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
            <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
            <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
            <img src="https://ichef.bbci.co.uk/news/320/cpsprodpb/6AFE/production/_102809372_machu.jpg" class="rounded float-center"height="70px" alt="...">
        </div>
    </div>


@endsection


