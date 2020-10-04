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
Route::resource('company', 'CompanyController')->names('companies');
Route::resource('vehicle', 'VehicleController')->names('vehicles');
Route::resource('incident', 'IncidentController')->names('incidents');

Route::get('dashboard/incident', 'IncidentBoardController@incident')->name('dashboard.incidents');


Route::get('/detalleturistalugar', function () {
    return view('detalleturistalugar');
})->name('detalleturistalugar');


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