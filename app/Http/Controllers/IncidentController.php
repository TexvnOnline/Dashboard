<?php

namespace App\Http\Controllers;

use App\Incident;
use App\Company;
use Illuminate\Http\Request;

class IncidentController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('dashboard.incidents.create');
    }
    public function store(Request $request)
    {
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $incident  = Incident::create($request->all() + 
        [
            'image' => $urlimage,
        ]);
        return redirect()->route('vehicles.index');
    }
    public function show(Incident $incident)
    {
        //
    }
    public function edit(Incident $incident)
    {
        return view('dashboard.incidents.edit', compact('incident'));
    }
    public function update(Request $request, Incident $incident)
    {
        
        $incident->fill($request->all())->save(); 
        return redirect()->route('vehicles.index'); 
    }
    public function destroy(Incident $incident)
    {
        $incident->delete();
        return redirect()->route('vehicles.index'); 
    }
}
