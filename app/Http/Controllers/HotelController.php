<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
         return view('dashboard.hotels.index');
        
    }
    public function create()
    {
        return view('dashboard.hotels.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('hotels.index');
    }
    public function show(Hotel $hotel)
    {
       
    }
    public function edit(Hotel $hotel)
    {
        return view('dashboard.hotels.edit');
    }
    public function update(Request $request, Hotel $hotel)
    {
        return redirect()->route('hotels.index'); 
    }
    public function destroy(Hotel $hotel)
    {
        return redirect()->route('hotels.index'); 
    }
}
