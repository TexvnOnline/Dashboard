@extends('layouts.admin')
@section('title','Sensores activos')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Sensores activos</h3>
      
    </div>
    <div class="card-body ">
       

 
        <div class="row">
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="text-center">Sensor de humedad</h4>
                    </div>
                    <div class="card-content">
                        <div class="ct-chart">
                            <canvas id="humedad">
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
          
             
            
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="text-center">Sensor de radiación</h4>
                    </div>
                    <div class="card-content">
                        <div class="ct-chart">
                            <canvas id="radiacion">
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="text-center">Sensor de temperatura</h4>
                    </div>
                    <div class="card-content">
                        <div class="ct-chart">
                            <canvas id="temperatura">
                            </canvas>
                        </div>
                    </div>
                </div>
            </div>
          
              
              
            
            
            <div class="col-md-6">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="text-center">Sensor de ruido</h4>
                    </div>
                    <div class="card-content">
                        <div class="ct-chart">
                            <canvas id="ruido">
                            </canvas>
                        </div>
                    </div>
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
    $(function () {


        var varCompra=document.getElementById('humedad').getContext('2d');
    

 
        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', 'https://smartcityhyo.tk/api/Sensores/list_sensores_tipo_humedad.php', true);
        xhttp.send();
        xhttp.onreadystatechange = function(){

            let datos = JSON.parse(this.responseText);

            let datosjson = datos.records;

            console.log(datosjson);

            var labels = datosjson.map(function(e) {
                return e.SE_Tipo;
             });

             var data = datosjson.map(function(e) {
                return e.SE_Nivel;
             });

             var charCompra = new Chart(varCompra, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Humedad',
                        data: data,
                    
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth:3
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        }



        var varComprar=document.getElementById('radiacion').getContext('2d');
    

 
        const xhttpr = new XMLHttpRequest();
        xhttpr.open('GET', 'https://smartcityhyo.tk/api/Sensores/list_sensores_tipo_radiacio.php', true);
        xhttpr.send();
        xhttpr.onreadystatechange = function(){

            let datosr = JSON.parse(this.responseText);

            let datosjsonr = datosr.records;

            console.log(datosjsonr);

            var labelsr = datosjsonr.map(function(e) {
                return e.SE_Tipo;
             });

             var datar = datosjsonr.map(function(e) {
                return e.SE_Nivel;
             });

             var charCompra = new Chart(varComprar, {
                type: 'line',
                data: {
                    labels: labelsr,
                    datasets: [{
                        label: 'Radiación',
                        data: datar,
                    
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth:3
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        }



        var varCompraru=document.getElementById('ruido').getContext('2d');
    

 
        const xhttpru = new XMLHttpRequest();
        xhttpru.open('GET', 'https://smartcityhyo.tk/api/Sensores/list_sensores_tipo_ruido.php', true);
        xhttpru.send();
        xhttpru.onreadystatechange = function(){

            let datosru = JSON.parse(this.responseText);

            let datosjsonru = datosru.records;

            console.log(datosjsonru);

            var labelsru = datosjsonru.map(function(e) {
                return e.SE_Tipo;
             });

             var dataru = datosjsonru.map(function(e) {
                return e.SE_Nivel;
             });

             var charCompra = new Chart(varCompraru, {
                type: 'line',
                data: {
                    labels: labelsru,
                    datasets: [{
                        label: 'Ruido',
                        data: dataru,
                    
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth:3
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        }



        var varComprate=document.getElementById('temperatura').getContext('2d');
    

 
        const xhttpte = new XMLHttpRequest();
        xhttpte.open('GET', 'https://smartcityhyo.tk/api/Sensores/list_sensores_tipo_temperatura.php', true);
        xhttpte.send();
        xhttpte.onreadystatechange = function(){

            let datoste = JSON.parse(this.responseText);

            let datosjsonte = datoste.records;

            console.log(datosjsonte);

            var labelste = datosjsonte.map(function(e) {
                return e.SE_Tipo;
             });

             var datate = datosjsonte.map(function(e) {
                return e.SE_Nivel;
             });

             var charCompra = new Chart(varComprate, {
                type: 'line',
                data: {
                    labels: labelste,
                    datasets: [{
                        label: 'Temperatura',
                        data: datate,
                    
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth:3
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        }

    });
    </script>
@endsection
