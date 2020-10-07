<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Incident;

class IncidentController extends Controller
{
    public function graphic(){
        $incidents = Incident::with('vehicles','user','vehicles.company')->get();
        
        $incidents0 = Incident::where('type', 0)->get();
        $incidents1 = Incident::where('type', 1)->get();
        $incidents2 = Incident::where('type', 2)->get();
        $incidents3 = Incident::where('type', 3)->get();
        $incidents4 = Incident::where('type', 4)->get();
        $incidents5 = Incident::where('type', 5)->get();

        $incidents0->toJson();
        $incidents1->toJson();
        $incidents2->toJson();
        $incidents3->toJson();
        $incidents4->toJson();
        
        return view('dashboard.vehicles.dashboard', [
            'incidents0'=>$incidents0,
            'incidents1'=>$incidents1,
            'incidents2'=>$incidents2,
            'incidents3'=>$incidents3,
            'incidents4'=>$incidents4,
            'incidents5'=>$incidents5,
    
        ]);
    }
}
