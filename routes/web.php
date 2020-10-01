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

Route::resource('/incidentes/vehiculos', 'VehicleController')->names('vehicle');

Route::resource('reporte-de-incidentes/incident', 'IncidentController')->names('incidents');


Route::get('incident/empresa', 'IncidentController@empresa')->name('incidents.empresa');


Route::resource('empresas', 'CompanyController')->names('companies');





// Route::get('/estadodeobra', function () {
//     return view('estadodeobra');
// })->name('estado.obra');

// Route::get('/detallesdeobra', function () {
//     return view('detallesdeobra');
// })->name('obra.detalles');



// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/incidentes',function(){
//     return view('lista_incidentes');
// })->name('incidentes');

// Route::get('/turismo',function(){
//     return view('turismo');
// })->name('turismo');
// Route::get('/addLugarTuristico',function(){
//     return view('addLugarTuristico');
// })->name('addLugarTuristico');


// Route::get('/registroObras',function(){
// 	return view ('registroObras');
// })->name('registroObras');

// Route::get('/VistaAutori', function(){
// 	return view('VistaAutori');
// })->name('VistaAutori');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/reporteincidentes', function () {
//     return view('reporte_incidente');
// })->name('reporteincidentes');