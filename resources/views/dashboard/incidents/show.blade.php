@extends('layouts.admin')
@section('title','Incidente '.$incident->title)
@section('breadcrumb')
<li class="breadcrumb-item active">
    <a href="{{route('vehicles.index')}}">Incidentes</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$incident->title}}</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 order-2 order-md-1">
                <div class="card-body">
                    <div class="">
                        <h3 class="text-primary"><i class="fas fa-car-crash"></i> {{$incident->title}}</h3>
                        <p class="text-muted">{{$incident->description}}</p>
                        <br>
                        <div class="text-muted">
                            <p class="text-sm">Empresa
                                <b class="d-block"> @foreach ($incident->vehicles as $vehicle)
                                    <a href="">{{$vehicle->company->name}}</a>
                                    @endforeach</b>
                            </p>
                            <p class="text-sm">Usuario que realizo el reporte
                                <b class="d-block"><a href="">{{$incident->user->name}}</a></b>
                            </p>
                            <p class="text-sm">Tipo de incidente
                                <b class="d-block">{{$incident->type}}</b>
                            </p>
                        </div>
                        <h5 class="mt-5 text-muted">Vehículos involucrados</h5>
                        <ul class="list-unstyled">
                            @foreach ($incident->vehicles as $vehicle)
                            <li>
                                <a href="" class="btn-link text-secondary"><i class="fas fa-car-crash"></i>
                                    {{$vehicle->plate}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 order-1 order-md-2">
                <div class="card-header">
                    <div class="card-title">
                        Imágenes de incidentes
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox"
                                data-title="sample 1 - white" data-gallery="gallery">
                                <img src="{{$incident->image}}" class="img-fluid mb-2" alt="white sample" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5 mb-3">
            {{--  <a href="#" class="btn btn-sm btn-primary">Add files</a>  --}}
            <a href="#" class="btn btn-sm btn-secondary">Regresar</a>
        </div>
    </div>
</section>
@endsection
