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


        $companies = Company::pluck('name')->toArray();
    
        // $companiesIncidents = Company::

        $incidents0 = Incident::where('type', 0)->count();
        $incidents1 = Incident::where('type', 1)->count();
        $incidents2 = Incident::where('type', 2)->count();
        $incidents3 = Incident::where('type', 3)->count();
        $incidents4 = Incident::where('type', 4)->count();
        $incidents5 = Incident::where('type', 5)->count();


        $incidents = Incident::with('vehicles','user','vehicles.company')->get();

        return view('dashboard.vehicles.dashboard', compact('incidents','incidents0','incidents1','incidents2','incidents3','incidents4','incidents5'))->with('companies',json_encode($companies,JSON_NUMERIC_CHECK));

    }
}
