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
    public function index()
    {
        $incidents = Incident::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.incidentes.index',compact('incidents'));
    }
    public function create()
    {
        
        return view('dashboard.incidentes.create', compact('companies'));
    }
    public function store(Request $request)
    {
        $incident = new Incident($request->all());

        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
            $incident->image =$urlimage;
        }

        $incident->save();
        // $incidents  = Incident::create($request->all());
        return redirect()->route('incidents.index');
    }
    public function show(Incident $incident)
    {
        //
    }
    public function edit(Incident $incident)
    {
        return view('dashboard.incidentes.edit', compact('incident'));
    }
    public function update(Request $request, Incident $incident)
    {
        
        $incident->fill($request->all())->save(); 
        return redirect()->route('incidents.index'); 
    }
    public function destroy(Incident $incident)
    {
        $incident->delete();
        return redirect()->route('incidents.index'); 
    }

    public function empresa(){

        $incidents = Incident::orderBy('id', 'DESC')->paginate(10);
    }
}
