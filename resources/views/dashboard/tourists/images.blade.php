@extends('layouts.admin')
@section('title','Agregar fotografías')
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('tourists.index')}}">Lugar Turistico</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Agregar fotografías </h3>
    </div>
    {!! Form::open(['route'=>['tourists.save_image',$tourist], 'method'=>'POST','files' => true, 'enctype'=>'multipart/form-data']) !!}

    <div class="card-body ">

        <div class="form-group">
            <label for="imagenes">Agregar fotografías</label>
            <input type="file" class="form-control-file" name="imagenes[]"id="imagenes[]" multiple accept="image/*">
            <small class="form-text text-muted">
                Solo archivos de imágenes de dimensiones 750x450 px.
            </small>
        </div>
    </div>


<div class="col-12">
    <div class="card card-primary">
      <div class="card-header">
        <div class="card-title">
        Galería de imágenes
        </div>
      </div>
      <div class="card-body">
        <div class="row">
        @foreach ($tourist->images as $image)
          <div class="col-sm-2">
            <a href="{{$image->url}}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
              <img src="{{$image->url}}" class="img-fluid mb-2" alt="white sample"/>
            </a>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
    {!! Form::close() !!}
    
</div>
@endsection
