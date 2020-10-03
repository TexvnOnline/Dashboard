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
        if(!empty(Session::get('company_id'))){

            $incidents = Incident::orderBy('id', 'DESC')->paginate(10);

            $vehicles = Vehicle::orderBy('id', 'DESC')->where('company_id', Session::get('company_id'))->paginate(10);
            return view('dashboard.vehicles.index',compact('vehicles','incidents'));
        }else{
            return (403);
        }
    }
    public function create()
    {
        // $vehicles = Company::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('dashboard.vehicles.create');
    }
    public function store(Request $request)
    {
        $vehicle  = Vehicle::create($request->all() + 
        [
            'company_id' => Session::get('company_id'),
        ]);
        return redirect()->route('vehicles.index');
    }
    public function show(Vehicle $vehicle)
    {
        // return redirect()->route('vehicles.index', compact('company'));
    }
    public function edit(Vehicle $vehicle)
    {
        return view('dashboard.vehicles.edit', compact('vehicle'));
    }
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->fill($request->all())->save(); 
        return redirect()->route('vehicles.index'); 
    }
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index'); 
    }
}
