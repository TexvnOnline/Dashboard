@extends('layouts.admin')
@section('content')
<h1>Agregar Lugar</h1>
<div class="row justify-content-center">
    <div class="col-sm-10 ">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre </label>
            <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Descripción</label>
            <input type="email" class="form-control" id="inputEmail4">
            </div>
            
            <div class="form-group col-md-6">
            <label for="inputEmail4">Detalles</label>
            <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="form-group col-md-6">
            <label for="inputEmail4">Costos</label>
            <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="form-group col-md-6">
            <label for="inputEmail4">Provincia</label>
            <select id="inputState" class="form-control">
                <option selected>A</option>
                <option selected>B</option>
                <option selected>C</option>
                <option selected>D</option>
                <option selected>E</option>
                <option>...</option>
            </select>
            </div>

            <div class="form-group col-md-6">
            <label for="inputEmail4">Distrito</label>
            <select id="inputState" class="form-control">
                <option selected>A</option>
                <option selected>B</option>
                <option selected>C</option>
                <option selected>D</option>
                <option selected>E</option>
                <option>...</option>
            </select>
            </div>

            <div class="form-group col-md-6">
                <label for="inputAddress">Fotografía Principal </label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Elegir archivo...</label>
                </div> 
                 
<li></li>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-14">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  
                  Fotografia
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-4">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Enlace de 360º</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>

</div>
@endsection
