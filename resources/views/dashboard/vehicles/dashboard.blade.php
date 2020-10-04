@extends('layouts.admin')
@section('title','Incidentes de transporte')
@section('style')
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') !!}
{!! Html::style('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') !!}



@endsection
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Incidentes registrados</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body ">
        <div class="card">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">incidentes de transito</h3>
                    <a href="javascript:void(0);">Ver reporte</a>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg">820</span>
                        <span>Incidentes a lo largo del tiempo</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 12.5%
                        </span>
                        <span class="text-muted">Último mes</span>
                    </p>
                </div>
                <div class="position-relative mb-4">
                    <canvas id="visitors-chart" height="200"></canvas>
                </div>
                <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> Esta semana
                    </span>

                    <span>
                        <i class="fas fa-square text-gray"></i> Semana pasada
                    </span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>

                            <th>Empresa</th>
                            <th>Informante</th>
                            <th>Titulo</th>
                            <th>Descripción</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($incidents as $incident)
                        <tr>
                            <td scope="row">{{$incident->id}}</td>
                            <td>
                                @foreach ($incident->vehicles as $vehicle)
                                <a href="">{{$vehicle->company->name}}</a>
                                @endforeach
                            </td>
                            <td><a href="">{{$incident->user->name}}</a></td>
                            <td>{{$incident->title}}</td>
                            <td>{{$incident->description}}</td>
                            <td class="text-center">
                                {{--  {!! Form::open(['route'=>['incidents.destroy',$incident], 'method'=>'DELETE']) !!}  --}}

                                <a class="btn btn-info btn-sm" href="{{route('incidents.show', $incident)}}">
                                    <i class="far fa-eye"></i> Ver detalles de incidente
                                </a>
                                {{--  <a class="btn btn-default btn-sm" href="{{route('incidents.edit', $incident)}}">
                                <i class="far fa-edit"></i>
                                </a> --}}
                                {{--  <button class="btn btn-default btn-sm">
                            <i class="far fa-trash-alt"></i>
                        </button>  --}}
                                {{--  {!! Form::close() !!}  --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('https://code.jquery.com/jquery-3.5.1.js') !!}
{!! Html::script('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') !!}
{!! Html::script('https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js') !!}

<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "info": "_TOTAL_ registros",
                "search": "Buscar",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                },
                "lengthMenu": 'Mostrar <select class="form-control">' +
                    '<option value="10">10</option>' +
                    '<option value="30">30</option>' +
                    '<option value="50">50</option>' +
                    '<option value="100">100</option>' +
                    '<option value="-1">Todo</option>' +
                    '</select> registros',
                "loadinRecords": "Cargando...",
                "processing": "Procesando...",
                "emptyTable": "No hay datos",
                "zeroRecords": "No hay coincidencias",
                "infoEmpty": "",
                "infoFiltered": "",
            }
        });
    });

</script>



{!! Html::script('adminlte/plugins/chart.js/Chart.min.js') !!}
{!! Html::script('adminlte/dist/js/demo.js') !!}
{!! Html::script('adminlte/dist/js/pages/dashboard3.js') !!}

@endsection
