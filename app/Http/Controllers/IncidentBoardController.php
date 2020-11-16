<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\Company;
use Illuminate\Support\Arr;

class IncidentBoardController extends Controller
{
    
    public function incident()
    {
        return view('dashboard.vehicles.dashboard');
    }
}
