<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\Company;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.vehiculos.index',compact('vehicles'));
    }
    public function create()
    {
        $companies =Company::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('dashboard.vehiculos.create', compact('companies'));
    }
    public function store(Request $request)
    {
        $vehicles  = Vehicle::create($request->all());
        return redirect()->route('vehicle.index');
    }
    public function show(Vehicle $vehicle)
    {
        //
    }
    public function edit(Vehicle $vehiculo)
    {
        return view('dashboard.vehiculos.edit', compact('vehiculo'));
    }
    public function update(Request $request, Vehicle $vehiculo)
    {
        
        $vehiculo->fill($request->all())->save(); 
        return redirect()->route('vehicle.index'); 
    }
    public function destroy(Vehicle $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehicle.index'); 
    }
}
