<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConductoresController extends Controller
{
    public function conductores(){
        return view('conductores.index');
    }
    public function create(){
        return view('conductores.create');
    }
}
