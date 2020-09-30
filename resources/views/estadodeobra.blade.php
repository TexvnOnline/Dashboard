@extends('layouts.admin')
@section('content')
    

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Bordered Table</h3>


      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fas fa-plus-square"></i>
        </button>



        <div class="btn-group">
            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-filter"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
                <a href="#" class="dropdown-item">Departamentos</a>
                <a href="#" class="dropdown-item">Provincias</a>
                <a href="#" class="dropdown-item">Distritos</a>
                <a class="dropdown-divider"></a>
                <a href="#" class="dropdown-item">Municipalidad</a>
            </div>
        </div>


        {{--  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
      <i class="fas fa-times"></i></button>  --}}
    </div>


    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>                  
          <tr>
            <th style="width: 10px">#</th>
            <th>Fecha de inicio</th>
            <th>Presupuesto</th>
            <th>Empresa ejecutora</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            {{-- Foreach --}}
          <tr>
            <td>1</td>
            <td>Fecha de inicio 1</td>
            <td>Presupuesto 1</td>
            <td>Empresa ejecutora 1</td>
            <td>
                <a href="{{route('obra.detalles')}}" type="button" class="btn btn-primary">Ver detalles</a>
            </td>
          </tr>
         
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
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