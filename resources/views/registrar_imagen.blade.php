@extends('layouts.admin')
@section('title','Registrar fotografía')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('parks.index')}}">Registrar fotografía</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registrar fotografía</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
	</div>
	<form id="form" method="POST">
        <div class="card-body ">
        
            <div class="form-group">
              <label for="">Descripción</label>
              <input type="text"
                class="form-control" name="FG_Descripcion" id="FG_Descripcion">
            </div>
            <div class="form-group">
                 
                    <label for="">Imagen</label>
                    <input type="file" class="form-control-file" name="FG_URL" id="FG_URL">
                 
              </div>
              <div class="form-group">
                <label for="">Lugar turístico</label>
                <input type="text"
                  class="form-control" name="ID_Lugar_Turistico" id="ID_Lugar_Turistico">
              </div>
              <div class="form-group">
                <label for="">Tipo de fotografía</label>
                <input type="text"
                  class="form-control" name="ID_Tipo_Fotografia" id="ID_Tipo_Fotografia">
              </div>
              <div class="form-group">
                <label for="">Recurso</label>
                <input type="text"
                  class="form-control" name="ID_Recursos" id="ID_Recursos">
              </div>

        </div>
        <div class="card-footer">
			<a class="btn btn-danger float-right" href="{{route('parks.index')}}">Cancelar</a>
			<input id="submit" type="button" name="submit" class="btn btn-primary" value="Guardar">
		</div>
	</form>
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


@endsection
