<?php

namespace App\Http\Controllers;

use App\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index(){
        return view('dashboard.sensors.index');
    }
    public function create()
    {
        return view('dashboard.sensors.create');
    }
    public function store(Request $request)
    {
        return redirect()->back();
    }
    public function show(Sensor $sensor)
    {
        
    }
    public function edit(Sensor $sensor)
    {
        return view('dashboard.sensors.edit');
    }
    public function update(Request $request, Sensor $sensor)
    {
        return redirect()->route('sensors.index'); 
    }
    public function destroy(Sensor $sensor)
    {
        return redirect()->route('sensors.index'); 
    }
    public function active(Request $request, Sensor $sensor){
        return redirect()->back();
    }
}
