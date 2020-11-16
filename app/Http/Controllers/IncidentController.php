<?php

namespace App\Http\Controllers;

use App\Incident;
use App\Company;
use App\Vehicle;
use Session;
use Illuminate\Http\Request;

class IncidentController extends Controller

{
    public function index()
    {
        return view('dashboard.incidents.index');
    }
    
    public function create()
    {
        return view('dashboard.incidents.create');
    }
    public function store(Request $request, Incident $incident)
    {
        return redirect()->route('vehicles.index');
    }
    public function show(Incident $incident)
    {
        return view('dashboard.incidents.show');
    }
    public function edit(Incident $incident)
    {
        return view('dashboard.incidents.edit');
    }
    public function update(Request $request, Incident $incident)
    {
        return redirect()->route('vehicles.index'); 
    }
    public function destroy(Incident $incident)
    {
        return redirect()->route('vehicles.index'); 
    }
}
