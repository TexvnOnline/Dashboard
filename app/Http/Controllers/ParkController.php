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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
        return view('dashboard.parks.dashboard');
    }

    public function index()
    {
        return view('dashboard.parks.index');
    }
    public function create()
    {
        return view('dashboard.parks.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('parks.index');
    }
    public function show(Park $park)
    {
        return view('dashboard.parks.show');
    }
    public function edit(Park $park)
    {
        return view('dashboard.parks.edit');
    }
    public function update(Request $request, Park $park)
    {
        return redirect()->route('parks.index'); 
    }
    public function destroy(Park $park)
    {
        return redirect()->route('parks.index'); 
    } 
}
