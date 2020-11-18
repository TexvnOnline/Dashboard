@extends('layouts.admin')
@section('title','Forografias')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Forografias</h3>
        

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
        xhttp.open('GET', 'http://smartcityhyo.tk/api/Fotografia_Lugar/Listar_Fotografia.php', true);
        xhttp.send();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                //console.log(this.responseText);

                //transformar a json
                let datos = JSON.parse(this.responseText);

                let red = document.querySelector('#res');
                res.innerHTML = '';
                console.log(datos.fotos);

                for(let item of datos.fotos){
                    res.innerHTML += `
                   
                    


                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="${item.FG_URL}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">${item.FG_Descripcion}</p>
                            
                          </div>
                        </div>
                      </div>









                    `

                }

            }
        }

    </script>








@endsection
