<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('registrar_imagen', function() {
    return view('registrar_imagen');
})->name('registrar_imagen');



Route::get('panel_incidentes', function() {
    return view('panel_incidentes');
})->name('panel_incidentes');



Route::get('lista_incidentes', function() {
    return view('lista_incidentes1');
})->name('lista_incidentes');




Route::get('editar_obra', function() {
    return view('editar_obra');
})->name('editar_obra');



Route::get('registrar_obra', function() {
    return view('registrar_obra');
})->name('registrar_obra');



Route::get('sensores', function() {
    return view('dashboard.parks.sensores');
})->name('sensores');


// pruebas

Route::get('prueba', function() {
    return view('prueba');
})->name('prueba');

Route::get('prueba/form', function() {
    return view('prueba_form');
})->name('prueba.form');

// tipo de incidente



Route::get('eliminar_incidente', function() {
    return view('eliminar_incidente');
})->name('eliminar_incidente');


Route::get('mapadeobras', function() {
    return view('mapaobra');
})->name('mapadeobra');

Route::get('fotografias', function() {
    return view('fotografias');
})->name('fotografias');

Route::get('tipoincidente', 'TipoIncidenteController@index')->name('tipo.incidente.index');
Route::get('tipoincidente/create', 'TipoIncidenteController@create')->name('tipo.incidente.create');



// fin de tipo de incidente

Route::resource('vehicle', 'VehicleController')->names('vehicles');


route::get('conductores', 'ConductoresController@conductores')->name('conductores.index');
route::get('conductores/registrar', 'ConductoresController@create')->name('conductores.create');


Route::get('lugar/top', 'LugarTopController@index')->name('lugar.top');



Route::resource('obras', 'ObraController')->names('obras');



Route::resource('sensors', 'SensorController')->names('sensors');


Route::get('photographs/edit', 'PhotographyController@edit')->name('photographs.edit');
Route::get('photographs', 'PhotographyController@index')->name('photographs.index');
Route::get('photographs/create', 'PhotographyController@create')->name('photographs.create');
Route::get('photography/delete', 'PhotographyController@delete')->name('photographs.delete');


Route::get('provinces/edit', 'ProvinceController@edit')->name('provinces.edit');
Route::get('provinces', 'ProvinceController@index')->name('provinces.index');
Route::get('provinces/create', 'ProvinceController@create')->name('provinces.create');

Route::resource('incident', 'IncidentController')->names('incidents');

// UNO
Route::resource('restaurants', 'RestaurantController')->names('restaurants');
Route::get('dashboard/restaurant', 'RestaurantController@dashboard')->name('restaurants.dashboard');

//hoteles
Route::resource('hotels', 'HotelController')->names('hotels');
Route::get('dashboard/hotels', 'HotelController@dashboard')->name('restaurants.dashboard');
//hoteles fin

//semaforos
Route::resource('semaforo', 'SemaforoController')->names('semaforos');
Route::get('dashboard/semaforo', 'SemaforoController@dashboard')->name('semaforos.dashboard');
Route::get('camara/semaforo', 'SemaforoController@camara')->name('semaforos.camara');
Route::get('usuario/semaforo', 'SemaforoController@usuario')->name('semaforos.usuario');

//lugarturistiContacto//

Route::get('contacts/edit', 'ContactController@edit')->name('contacts.edit');
Route::get('contacts', 'ContactController@index')->name('contacts.index');
Route::get('contacts/create', 'ContactController@create')->name('contacts.create');
Route::get('contacts/delete', 'ContactController@delete')->name('contacts.delete');
//finlugarturistiContacto//




//lugarturisticoIdentidad//

Route::get('tourists/edit', 'TouristController@edit')->name('tourists.edit');
Route::get('tourists', 'TouristController@index')->name('tourists.index');
Route::get('tourists/create', 'TouristController@create')->name('tourists.create');
Route::get('tourists/delete', 'TouristController@delete')->name('tourists.delete');


//finlugarturisticoIdentidad//




//eventos
Route::resource('events', 'EventController')->names('events');


Route::get('cultural_identity', 'CulturalIdentityController@dashboard')->name('culturalIdentity.dashboard');


// Route::get('dashboard/hotels', 'HotelController@dashboard')->name('restaurants.dashboard');
//eventos fin

Route::resource('park', 'ParkController')->names('parks');
Route::get('dashboard/park', 'ParkController@dashboard')->name('parks.dashboard');

//semaforos
Route::resource('semaforo', 'SemaforoController')->names('semaforos');
Route::get('dashboard/semaforo', 'SemaforoController@dashboard')->name('semaforos.dashboard');
Route::get('camara/semaforo', 'SemaforoController@camara')->name('semaforos.camara');
Route::get('usuario/semaforo', 'SemaforoController@usuario')->name('semaforos.usuario');

Route::resource('company', 'CompanyController')->names('companies');


Route::get('dashboard/incident', 'IncidentBoardController@incident')->name('dashboard.incidents');



Route::get('/fotografia', function () {
    return view('fotografia');
})->name('fotografia');

Route::get('/resumen', function () {
    return view('resumen');
})->name('resumen');

Route::get('/addanimacion', function () {
    return view('addanimacion');
})->name('addanimacion');

Route::get('/addfotografia', function () {
    return view('addfotografia');
})->name('addfotografia');

Route::get('/addlugarturistica', function () {
    return view('addlugarturistica');
})->name('addlugarturistica');

Route::get('/TuristaCiudad', function () {
    return view('TuristaCiudad');
})->name('TuristaCiudad');


Route::get('/addHospedaje', function () {
    return view('addHospedaje');
})->name('addHospedaje');

Route::get('/Hospedaje', function () {
    return view('Hospedaje');
})->name('Hospedaje');

Route::get('/nuevorestaurante', function () {
    return view('nuevorestaurante');
})->name('nuevorestaurante');

Route::get('/detallesderestaurantes', function () {
    return view('detallesderestaurantes');
})->name('detallesderestaurantes');

Route::get('/addeventos', function () {
    return view('addeventos');
})->name('addeventos');

Route::get('/eventos', function () {
    return view('eventos');
})->name('eventos');


 Route::get('/estadodeobra', function () {
     return view('estadodeobra');
 })->name('estado.obra');

 Route::get('/detallesdeobra', function () {
     return view('detallesdeobra');
 })->name('obra.detalles');



 Route::get('/', function () {
     return view('welcome');
 });
 Route::get('/incidentes',function(){
     return view('lista_incidentes');
 })->name('incidentes');

 Route::get('/turismo',function(){
     return view('turismo');
 })->name('turismo');
 
 Route::get('/addLugarTuristico',function(){
     return view('addLugarTuristico');
 })->name('addLugarTuristico');

 Route::get('/registroObras',function(){
 	return view ('registroObras');
 })->name('registroObras');

 Route::get('/VistaAutori', function(){
 	return view('VistaAutori');
 })->name('VistaAutori');
 
Auth::routes();

Route::get('/seguridad', function(){
     return view('seguridad');
 })->name('seguridad');

Route::get('/livestream', function(){
     return view('livestream');
 })->name('livestream');

 Route::get('/home', 'HomeController@index')->name('home');

 Route::get('/reporteincidentes', function () {
     return view('reporte_incidente');
 })->name('reporteincidentes');

 Route::get('/vista_registro_rutas',function()
 {

 	return view('vista_registro_rutas');


 })->name('vista_registro_rutas');


  Route::get('/registro_rutas',function()
 {

 	return view('registro_rutas');


 })->name('registro_rutas');


  Route::get('/inicio_rutas_trans',function()
 {

    return view('inicio_rutas_trans');


 })->name('inicio_rutas_trans');


  Route::get('/registro_tramo_rutas',function()
  {
    return view('registro_tramo_rutas');
})->name('registro_tramo_rutas');


  Route::get('/registrar_tramo',function()

{

    return view('registrar_tramo');

})->name('registrar_tramo');


  Route::get('/vista_emp_ru_tra',function()
  {
    return view('vista_emp_ru_tra');
  })->name('vista_emp_ru_tra');
