@extends('layouts.admin')
@section('content')

<div class="row justify-content-center">
    <div class="col-sm-8">
    <form>        

            <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar Lugar Turistico</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNombre">Nombre</label>
                    <input type="Nombre" class="form-control" id="exampleInputEmail1" placeholder=" Nombre">
                  </div>

                  <div class="form-group col-md-12">
                   <label for="inputEmail4">Descripción</label>
                   <input type="email" class="form-control" id="inputEmail4">
                  </div>

                  <div class="form-group col-md-5">
            <label for="inputProvincia">Provincia</label>
            <select id="inputState" class="form-control">
                <option selected>A</option>
                <option selected>B</option>
                <option selected>C</option>
                <option selected>D</option>
                <option selected>E</option>
                <option>...</option>
            </select>
            </div>

            <div class="form-group col-md-5">
            <label for="inputdistrito">Distrito</label>
            <select id="inputState" class="form-control">
                <option selected>A</option>
                <option selected>B</option>
                <option selected>C</option>
                <option selected>D</option>
                <option selected>E</option>
                <option>...</option>
            </select>
            </div>


                  <div class="form-group col-md-5">
                    <label for="exampleInputHorario">Horario de Visita</label>                    
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputInicio">Inicio</label>
                    <input type="Nombre" class="form-control" id="exampleInputEmail1" placeholder=" Inicio">                
                    <label for="exampleInputFin">Fin</label>
                    <input type="Fin" class="form-control" id="exampleInputEmail1" placeholder=" Fin">
                  </div>
              
            
                  <div class="form-group col-md-10">
                <label for="inputAddress">Fotografía </label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Elegir archivo...</label>
                </div>

            </div>
            <div class="form-group col-md-5">
             <button type="submit" class="btn btn-primary">Crear</button>
             <button type="submit" class="btn btn-primary">Cancelar</button>
              </div>
        </form>
    </div>
</div>

</div>
@endsection
