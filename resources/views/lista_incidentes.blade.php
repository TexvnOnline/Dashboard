@extends('layouts.admin')
@section('title','Incidentes de empresas de transportes')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Empresas de transportes</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-plus-square"></i></button>



            <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-filter"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Incidente 1</a>
                    <a href="#" class="dropdown-item">Incidente 2</a>
                    <a href="#" class="dropdown-item">Incidente 3</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Empresa 1</a>
                </div>
            </div>


            {{--  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>  --}}
        </div>
    </div>
    <div class="card-body table-responsive p-0">

        <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th colspan="1">&nbsp;</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td>Nombre Ejemplo</td>

                    <td>Descripción Ejemplo</td>
                    <td width="10px">
                        <a class="btn btn-default" href="">Detalles</a>
                    </td>
                    {{--  <td width="10px">
						{!! Form::open() !!}
						<button class="btn btn-danger">Eliminar</button>
						{!! Form::close() !!}
					</td>  --}}
                </tr>
            </tbody>
        </table>

    </div>
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </div>
</div>
@endsection
