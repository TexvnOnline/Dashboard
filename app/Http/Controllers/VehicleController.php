<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\Company;
use Illuminate\Http\Request;
use Session;
use App\Incident;

class VehicleController extends Controller
{
    public function index()
    {
        return view('dashboard.vehicles.index');
    }
    public function create()
    {
        return view('dashboard.vehicles.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('vehicles.index');
    }
    public function show(Vehicle $vehicle)
    {

    }
    public function edit(Vehicle $vehicle)
    {
        return view('dashboard.vehicles.edit');
    }
    public function update(Request $request, Vehicle $vehicle)
    {
        return redirect()->route('vehicles.index'); 
    }
    public function destroy(Vehicle $vehicle)
    {
        return redirect()->route('vehicles.index'); 
    }
}
