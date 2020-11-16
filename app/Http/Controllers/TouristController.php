<?php

namespace App\Http\Controllers;

use App\Tourist;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    
    public function dashboard()
    {
        return view('dashboard.tourists.dashboard');
    }
    public function index()
    {
        return view('dashboard.tourists.index');
    }
    public function create()
    {
        return view('dashboard.tourists.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('tourists.index');
    }
    public function show(Tourist $tourist)
    {
        
    }
    public function edit(Tourist $tourist)
    {
        return view('dashboard.tourists.edit');
    }
    public function update(Request $request, Tourist $tourist)
    {
        return redirect()->route('tourists.index'); 
    }
    public function destroy(Tourist $tourist)
    {
        return redirect()->route('tourists.index'); 
    }

    public function images(Tourist $tourist){

        return view('dashboard.tourists.images');
    }

    public function save_image(Request $request, Tourist $tourist)
    {
       return redirect()->back();
    }







}
