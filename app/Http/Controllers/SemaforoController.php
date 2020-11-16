<?php

namespace App\Http\Controllers;

use App\Semaforo;
use App\SensorSemaforo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Session;

class SemaforoController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.semaforos.dashboard');
    }

    public function index()
    {
        return view('dashboard.semaforos.index');
    }
    public function usuario()
    {
        return view('dashboard.semaforos.index');
    }
    public function camara()
    {
        return view('dashboard.semaforos.camara');
    }
    public function create()
    {
        return view('dashboard.semaforos.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('semaforos.index');
    }
    public function show(Semaforo $semaforo)
    {
        return view('dashboard.semaforos.show');
    }
    public function edit(Semaforo $semaforo)
    {
        return view('dashboard.semaforos.edit');
    }
    public function update(Request $request, Semaforo $semaforo)
    {
        return redirect()->route('semaforos.index'); 
    }
    public function destroy(Semaforo $semaforo)
    {
        return redirect()->route('semaforos.index'); 
    } 
}
