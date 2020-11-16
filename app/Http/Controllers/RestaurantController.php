<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.restaurants.dashboard');
    }
    public function index()
    {
        return view('dashboard.restaurants.index');
    }
    public function create()
    {
        return view('dashboard.restaurants.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('restaurants.index');
    }
    public function show(Restaurant $restaurant)
    {
        
    }
    public function edit(Restaurant $restaurant)
    {
        return view('dashboard.restaurants.edit');
    }
    public function update(Request $request, Restaurant $restaurant)
    {
        return redirect()->route('restaurants.index'); 
    }
    public function destroy(Restaurant $restaurant)
    {
        return redirect()->route('restaurants.index'); 
    }
}
