<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.hotels.index',compact('hotels'));
    }
    public function create()
    {
        return view('dashboard.hotels.create');
    }
    public function store(Request $request)
    {
        $hotel = new Hotel($request->all());
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $hotel->image =  $urlimage;
        $hotel->save();

        return redirect()->route('hotels.index');
    }
    public function show(Hotel $hotel)
    {
       
    }
    public function edit(Hotel $hotel)
    {
        return view('dashboard.hotels.edit', compact('hotel'));
    }
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->fill($request->all()); 
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        if ($request->hasFile('image')){
            $hotel->image =  $urlimage;
        }
        $hotel->save();
        return redirect()->route('hotels.index'); 
    }
    public function destroy(Hotel $hotel)
    {
        if(file_exists(public_path('/images/'. $hotel->image))){
            unlink(public_path('/images/'. $hotel->image));
        }
        $hotel->delete();
        return redirect()->route('hotels.index'); 
    }
}
