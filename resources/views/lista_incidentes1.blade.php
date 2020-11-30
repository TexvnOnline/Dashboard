@extends('layouts.admin')
@section('title','Listado de incidentes')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Listado de incidentes</h3>
        

    </div>
    <div class="card-body table-responsive p-0">

        <div class="row" id="res">

        </div>
        
    </div>
    <div  class="card-footer">
        
        

        <a href=""></a>
    </div>
</div>
@endsection
@section('scripts')


    <script>
        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', 'https://smartcityhyo.tk/api/Incidente/listar_incidentes.php', true);
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
                   
                    


                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img   class="card-img-top" style="height:300px ; width:300px"  src="${item.ind_Fotografia}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text"><strong>Descripción</strong>${item.ind_Descripcion}</p>
                            <p class="card-text"><strong>fecha</strong>${item.ind_Fecha_Incidente}</p>
                            <p class="card-text"><strong>Tipo</strong>${item.ind_Tipo_incidente}</p>

                            <p class="card-text"><strong>ID</strong>${item.ID_Incidente}</p>
                            

 

                          </div>

                          <div class="card-footer text-muted">
                            <a href="/dashboardcity/eliminar_incidente" class="btn btn-danger float-right"><i class="fas fa-trash-alt"></i></a>
                        </div>

                        </div>
                      </div>









                    `

                }

            }
        }

    </script>








@endsection
