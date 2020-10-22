<?php

namespace App\Http\Controllers;

use App\Park;
use App\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Session;

class ParkController extends Controller
{
    public function dashboard()
    {
        $parks = Park::get();
        // $markers = Park::get(['name','latitude', 'length'])->toJson();

        $markers = Park::get(['id','name','description','latitude', 'length'])->toArray();
        // $markers->toString();
        // $markers = Arr::only($data,['name','direction','latitude', 'length']);

        
        $parksCount = Park::count();
        return view('dashboard.parks.dashboard',compact('parks','markers','parksCount'));
        // return view('dashboard.parks.dashboard',compact('parks'))->with('markers',json_encode($markers,JSON_NUMERIC_CHECK));;
    }

    public function index()
    {
        $parks = Park::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.parks.index',compact('parks'));
    }
    public function create()
    {
        return view('dashboard.parks.create');
    }
    public function store(Request $request)
    {
        dd($request);
        $slug = Str::of($request->name)->slug('-');
        $parks = new Park($request->all() + [
            'slug' => $slug, 
        ]);
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $parks->image = $urlimage;
        $parks->save();
        return redirect()->route('parks.index');
    }
    public function show(Park $park)
    {
        Session::put('park_id',$park->id);

        $sensors = Sensor::where('park_id', $park->id)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.parks.show', compact('park','sensors'));
    }
    public function edit(Park $park)
    {
        return view('dashboard.parks.edit', compact('park'));
    }
    public function update(Request $request, Park $park)
    {
        $slug = Str::of($request->name)->slug('-');
        $park->fill($request->all()+ [
            'slug' => $slug, 
        ]); 
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        if ($request->hasFile('image')){
            $park->image =  $urlimage;
        }
        $park->save();
        return redirect()->route('parks.index'); 
    }
    public function destroy(Park $park)
    {
        if(file_exists(public_path('/images/'. $park->image))){
            unlink(public_path('/images/'. $park->image));
        }
        $park->delete();
        return redirect()->route('parks.index'); 
    } 
}
