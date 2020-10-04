<?php

namespace App\Http\Controllers;

use App\Incident;
use App\Company;
use App\Vehicle;
use Session;
use Illuminate\Http\Request;

class IncidentController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        $vehicles = Vehicle::where('company_id', Session::get('company_id'))->get();
        return view('dashboard.incidents.create', compact('vehicles'));
    }
    public function store(Request $request, Incident $incident)
    {
        $incident = new Incident($request->all());
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $incident->image =  $urlimage;
        $incident->save();
        $incident->vehicles()->attach($request->get('vehicles'));
        return redirect()->route('vehicles.index');
    }
    public function show(Incident $incident)
    {
        return view('dashboard.incidents.show', compact('incident'));
    }
    public function edit(Incident $incident)
    {
        $vehicles = Vehicle::where('company_id', Session::get('company_id'))->get();
        return view('dashboard.incidents.edit', compact('incident','vehicles'));
    }
    public function update(Request $request, Incident $incident)
    {
        
        $incident->fill($request->all()); 
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        if ($request->hasFile('image')){
            $incident->image =  $urlimage;
        }
        $incident->save();
        $incident->vehicles()->sync($request->get('vehicles'));
        return redirect()->route('vehicles.index'); 
    }
    public function destroy(Incident $incident)
    {
        if(file_exists(public_path('/images/'. $incident->image))){
            unlink(public_path('/images/'. $incident->image));
        }
        $incident->delete();
        return redirect()->route('vehicles.index'); 
    }
}
