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
                        <span class="text-bold text-lg">{{
                            $incidents0 +
                            $incidents1 +
                            $incidents2 +
                            $incidents3 +
                            $incidents4 +
                            $incidents5 
                        }}</span>
                        <span>Incidentes a lo largo del tiempo</span>
                    </p>
                    {{--  <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 12.5%
                        </span>
                        <span class="text-muted">Último mes</span>
                    </p>  --}}
                </div>
                <div class="position-relative mb-4">

                    {{--  GRAFICA  --}}
                    {{--  <canvas id="visitors-chart" height="200"></canvas>  --}}


                    <canvas id="myChart" height="100"></canvas>

                </div>
                <div class="d-flex flex-row justify-content-end">
                    {{--  <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> Esta semana
                    </span>

                    <span>
                        <i class="fas fa-square text-gray"></i> Semana pasada
                    </span>  --}}
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



        <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Online Store Visitors</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>
                <div class="card-body">
                  {{--  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">820</span>
                      <span>Visitors Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 12.5%
                      </span>
                      <span class="text-muted">Since last week</span>
                    </p>
                  </div>  --}}
                  <div class="position-relative mb-4">
                    <canvas id="bar-chart-horizontal" height="200"></canvas>
                  </div>
  
                  <div class="d-flex flex-row justify-content-end">
                    {{--  <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> This Week
                    </span>
  
                    <span>
                      <i class="fas fa-square text-gray"></i> Last Week
                    </span>  --}}
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sales</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text-muted">Since last month</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
  
                  <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                  </div>
  
                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> This year
                    </span>
  
                    <span>
                      <i class="fas fa-square text-gray"></i> Last year
                    </span>
                  </div>
                </div>
              </div>
            
            </div>
            <!-- /.col-md-6 -->
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



{!! Html::script('https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js') !!}
{{--  {!! Html::script('adminlte/dist/js/demo.js') !!}  --}}
{{--  {!! Html::script('adminlte/dist/js/pages/dashboard3.js') !!}  --}}














<script>
   

    let chartData = ['Pasarse la luz roja del semáforo','Sobre carga de pasajeros','Exceso de velocidad','Exceso de tiempo de espera','Maltrato psicológico y fisco del conductor','Accidentes de tránsito'
    ];

  
    var companies = <?php echo $companies; ?>;

    let data0 = {{$incidents0}};
    let data1 = {{$incidents1}};
    let data2 = {{$incidents2}};
    let data3 = {{$incidents3}};
    let data4 = {{$incidents4}};
    let data5 = {{$incidents5}};

    var ctx = document.getElementById('myChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: chartData,
        datasets: [{
            label: 'Incidentes de trancito',
            data: [data0, data1, data2, data3, data4, data5],
            backgroundColor     : 'transparent',
            borderColor         : '#007bff',
            pointBorderColor    : '#007bff',
            pointBackgroundColor: '#007bff',
            fill                : false
        }]
    },
    options: {

        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],

            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: 'rgb(255, 99, 132)'
                }
            }
        }
    }
});





var ctz = document.getElementById('bar-chart-horizontal').getContext('2d');
var myhorizontalBarChart = new Chart(ctz, {
    type: 'horizontalBar',
    data: {
      labels: companies,
      datasets: [
        {
          label: "Population (millions)",
          {{--  backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],  --}}
          backgroundColor: '#007bff',
          borderColor    : '#007bff',
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Empresas con mayor número de incidentes registrados'
      }
    }
});










</script>



@endsection
