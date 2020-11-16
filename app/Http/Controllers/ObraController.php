<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObraController extends Controller
{
    public function index(){
        return view('obras.index');
    }
}
