<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;

class IncidentBoardController extends Controller
{
    
    public function incident()
    {
        $incidents = Incident::with('vehicles','user','vehicles.company')->get();
        return view('dashboard.vehicles.dashboard');
    }
}
