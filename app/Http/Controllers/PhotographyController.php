<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographyController extends Controller
{
    public function delete(){
        return view('dashboard.photographs.delete');
    }
}
