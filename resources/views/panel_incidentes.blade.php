@extends('layouts.admin')
@section('title','Agestión de incidentes')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Agestión de incidentes</h3>
        

            {{--  <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="{{route('parks.dashboard')}}" title="Agregar" >
                            <i class="fas fa-tachometer-alt"></i> Ver Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('parks.create')}}" title="Agregar" >
                            <i class="fas fa-plus"></i> Agregar parque
                        </a>
                    </li>
                </ul>
            </div>  --}}
    </div>
    <div class="card-body ">
   
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="text-center">Gráfico de incidentes</h5>
            </div>
            <div class="card-content">
                <div class="ct-chart">
                    <canvas id="humedad">
                    </canvas>
                </div>
            </div>
        </div>


    </div>
    <div  class="card-footer">
       
    </div>
</div>
@endsection
@section('scripts')

<script>

    function readTextFile(file, callback) {
        var rawFile = new XMLHttpRequest();
        rawFile.overrideMimeType("application/json");
        rawFile.open("GET", file, true);
        rawFile.onreadystatechange = function() {
            if (rawFile.readyState === 4 && rawFile.status == "200") {
                callback(rawFile.responseText);
            }
        }
        rawFile.send(null);
 }
 
 //usage:
 // readTextFile("DATA.json", function(text){
 //     var data = JSON.parse(text);
 //     console.log(data); 
 // });
 
 


 var task1 = function (){
    return new Promise (function(resolve, reject){
      readTextFile("http://localhost/smartcity/Incidente/exceso_de_Tiempo.php", function(text){
      var data = JSON.parse(text);
      
      resolve(data);
      }); 
    });
};

var task2 = function (){
    return new Promise (function(resolve, reject){
      readTextFile("http://localhost/smartcity/Incidente/exceso_de_tiempo_de_espera.php", function(text){
      var data2 = JSON.parse(text);
      
      resolve(data2);
      });
    });
}

var task3 = function (){
  return new Promise (function(resolve, reject){
    readTextFile("http://localhost/smartcity/Incidente/incidentes_por_Exceso_de_velocidad.php", function(text){
    var data3 = JSON.parse(text);
    
    resolve(data3);
    });
  });
}
var task4 = function (){
  return new Promise (function(resolve, reject){
    readTextFile("http://localhost/smartcity/Incidente/pasarce_la_luz_roja_del_semaforo.php", function(text){
    var data4 = JSON.parse(text);
    
    resolve(data4);
    });
  });
}
var task5 = function (){
  return new Promise (function(resolve, reject){
    readTextFile("http://localhost/smartcity/Incidente/accidentes_de_transito.php", function(text){
    var data5 = JSON.parse(text);
    
    resolve(data5);
    });
  });
}
var task6 = function (){
  return new Promise (function(resolve, reject){
    readTextFile("http://localhost/smartcity/Incidente/accidente.php", function(text){
    var data6 = JSON.parse(text);
    
    resolve(data6);
    });
  });
}

let uno = task1().then(function(fromResolve){
  let numero = fromResolve.records.length;
  return numero;

});
let dos = task2().then(function(fromResolve){
  let numero = fromResolve.records.length;
  return numero;
});
let tres = task3().then(function(fromResolve){
  let numero = fromResolve.records.length;
  return numero;

});
let cuatro = task4().then(function(fromResolve){
  let numero = fromResolve.records.length;
  return numero;

});
let cinco = task5().then(function(fromResolve){
  let numero = fromResolve.records.length;
  return numero;

});

let seis = task6().then(function(fromResolve){
  let numero = fromResolve.records.length;
  return numero;

});


console.log(uno);

//Promise.race([task1(), task2(), task3(), task4(), task5(), task6()])
//           .then(function(fromResolve){
//              console.log(fromResolve.records.length); 
//           });

</script>
@endsection
