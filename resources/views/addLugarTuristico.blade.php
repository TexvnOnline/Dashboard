@extends('layouts.admin')
@section('content')
<h1>Agregar Lugar</h1>
<div class="row justify-content-center">
    <div class="col-sm-10 ">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre</label>
            <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Descripción</label>
            <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Categoría</label>
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
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Fotografía</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Elegir archivo...</label>
                </div>  
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Referencia</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

</div>
@endsection
