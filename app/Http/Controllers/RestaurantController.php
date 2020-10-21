<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function dashboard()
    {
        $restaurants = Restaurant::orderBy('id', 'DESC')->get();
        return view('dashboard.restaurants.dashboard',compact('restaurants'));
    }
    public function index()
    {
        $restaurants = Restaurant::orderBy('id', 'DESC')->paginate(10);

      
        return view('dashboard.restaurants.index',compact('restaurants'));
    }
    public function create()
    {
        return view('dashboard.restaurants.create');
    }
    public function store(Request $request)
    {
        $restaurant = new Restaurant($request->all());
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $restaurant->image =  $urlimage;
        $restaurant->save();
        return redirect()->route('restaurants.index');
    }
    public function show(Restaurant $restaurant)
    {
        
    }
    public function edit(Restaurant $restaurant)
    {
        return view('dashboard.restaurants.edit', compact('restaurant'));
    }
    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->fill($request->all()); 
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        if ($request->hasFile('image')){
            $restaurant->image =  $urlimage;
        }
        $restaurant->save();

        return redirect()->route('restaurants.index'); 
    }
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('restaurants.index'); 
    }
}
