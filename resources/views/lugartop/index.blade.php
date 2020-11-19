@extends('layouts.admin')
@section('title','Lugares top')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Lugares top</h3>
        

            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="{{route('parks.dashboard')}}" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('parks.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar Lugar top
                        </a>
                    </li>
                </ul>
            </div>
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



    {{-- <script>
        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', 'http://smartcityhyo.tk/api/Identidad_Cultural/Lista_Lugares_Top.php', true);
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
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="${item.FG_URL}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">${item.LT_Nombre}</h5>
                          <p class="card-text">${item.LT_Descripcion}</p>
                          <a href="#" class="btn btn-primary">${item.LT_Ranking}</a>
                        </div>
                      </div>
                    `
                }

            }
        }

    </script> --}}







    <script>
        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', 'http://smartcityhyo.tk/api/Identidad_Cultural/Lista_Lugares_Top.php', true);
        xhttp.send();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                //console.log(this.responseText);

                //transformar a json
                let datos = JSON.parse(this.responseText);

                let red = document.querySelector('#res');
                res.innerHTML = '';
                console.log(datos.places);

                for(let item of datos.places){
                    res.innerHTML += `
                    <div class="col-md-4">
                        <img class="card-img-top" src="${item.FG_URL}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">${item.LT_Nombre}</h5>
                          <p class="card-text">${item.LT_Descripcion}</p>
                          <a href="#" class="btn btn-primary">${item.LT_Ranking}</a>
                        </div>
                      </div>
                    
                    `

                    


                }

            }
        }

    </script>








@endsection
