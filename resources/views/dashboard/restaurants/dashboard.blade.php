@extends('layouts.admin')
@section('title','Dashboard restaurantes')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        {{--  <h3 class="card-title">Sección de Empresas</h3>
	  <div class="card-tools">
		<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
		  <i class="fas fa-minus"></i></button>
		<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
		  <i class="fas fa-times"></i></button>
	  </div>  --}}
    </div>
    <div class="card-body ">
        
        <table class="table" id="example">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Distrito</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                <tr>
                    <th scope="row">{{$restaurant->id}}</th>
                    <td>{{$restaurant->name}}</td>
                    <td>{{$restaurant->description}}</td>
                    <td>{{$restaurant->district}}</td>
                    <td class="text-center">
                        {!! Form::open(['route'=>['restaurants.destroy', $restaurant], 'method'=>'DELETE']) !!}
                        <a class="btn btn-light" href="{{route('restaurants.show', $restaurant)}}">
                            <i class="far fa-eye"></i>
                        </a>
                        <a class="btn btn-light" href="{{route('restaurants.edit', $restaurant)}}">
                            <i class="far fa-edit"></i>
                        </a>
                        <button class="btn btn-light">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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

{!! Html::script('https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js') !!}

@endsection
