<?php

namespace App\Http\Controllers;

use App\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    // public function index()
    // {
    //     $sensors = Sensor::orderBy('id', 'DESC')->paginate(10);
    //     return view('dashboard.parks.show',compact('sensors'));
    // }
    public function create()
    {
        return view('dashboard.sensors.create');
    }
    public function store(Request $request)
    {
        $sensors  = Sensor::create($request->all());
        return redirect()->back();
    }
    public function show(Sensor $sensor)
    {
        
    }
    public function edit(Sensor $sensor)
    {
        return view('dashboard.sensors.edit', compact('sensor'));
    }
    public function update(Request $request, Sensor $sensor)
    {
        $sensor->fill($request->all())->save(); 
        return redirect()->route('sensors.index'); 
    }
    public function destroy(Sensor $sensor)
    {
        $sensor->delete();
        return redirect()->route('sensors.index'); 
    }
    public function active(Request $request, Sensor $sensor){
        if($sensor->status == 'DISABLED'){
            $sensor->status = 'ACTIVATED';
            $sensor->save();
            return redirect()->back();
        }else{
            $sensor->status = 'DISABLED';
            $sensor->save();
            return redirect()->back();
        }
    }
}
