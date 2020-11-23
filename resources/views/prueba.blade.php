@extends('layouts.admin')
@section('title','Lugares turísticos')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lugares turísticos</h3>

        <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{route('tourists.create')}}" title="Agregar" >
                        Registrar lugar turístico <i class="fas fa-plus"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <div class="card-body ">



        <!-- STACKED BAR CHART -->
        <div class="card ">
          <div class="card-header">
            <h3 class="card-title">Lugares turísticos más visitados</h3>

            
          </div>
          <div class="card-body">
            <div class="chart">
              <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->



        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lugares turísticos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Distrito</th>
                  <th>Horario de visita </th>
                  <th>Opciones</th>
                </tr>
                </thead>
                <tbody id="res">
                    {{--  <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>
                            <a href="" class="btn btn-light"><i class="far fa-edit"></i></a>
                            <a href="" class="btn btn-light"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>  --}}
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->



    </div>
    <div  class="card-footer">
     
    </div>
</div>
@endsection
@section('scripts')

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


        <script>
            const xhttp = new XMLHttpRequest();
            xhttp.open('GET', 'http://smartcityhyo.tk/api/LugarTuristico/Listar_lugar_turistico.php', true);
            xhttp.send();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    //console.log(this.responseText);
    
                    //transformar a json
                    let datos = JSON.parse(this.responseText);
    
                    let red = document.querySelector('#res');
                    res.innerHTML = '';
                    console.log(datos.records);
    
                    for(let item of datos.records){
                        res.innerHTML += `
                        <tr>
                            <td>${item.ID_Lugar_Turistico}</td>
                            <td>${item.LT_Nombre}</td>
                            <td>${item.LT_Descripcion}</td>
                            <td>${item.LT_URL_Map}</td>
                            <td>${item.ID_Distrito}</td>
                            <td>
                                <a href="/tourists/edit" class="btn btn-light"><i class="far fa-edit"></i></a>

                                <a href="/tourists/delete" class="btn btn-light"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            
                        </tr>
                        `
                    }
                }
            }
    
        </script>
@endsection

