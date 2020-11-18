<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoIncidenteController extends Controller
{
   public function index(){
    return view('tipoincidente.index');
   }
   public function create(){
    return view('tipoincidente.create');
   }
}
