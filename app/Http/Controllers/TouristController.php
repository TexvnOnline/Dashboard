<?php

namespace App\Http\Controllers;

use App\Tourist;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    
    public function dashboard()
    {
        $tourists = Tourist::orderBy('id', 'DESC')->get();
        return view('dashboard.tourists.dashboard',compact('tourists'));
    }
    public function index()
    {
        $tourists = Tourist::orderBy('id', 'DESC')->with('images')->paginate(5);
  
                 return view('dashboard.tourists.index',compact('tourists'));
    }
    public function create()
    {
        return view('dashboard.tourists.create');
    }
    public function store(Request $request)
    {
        $tourist = new Tourist($request->all());
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $tourist->image =  $urlimage;
        $tourist->save();
        return redirect()->route('tourists.index');
    }
    public function show(Tourist $tourist)
    {
        
    }
    public function edit(Tourist $tourist)
    {
        return view('dashboard.tourists.edit', compact('tourist'));
    }
    public function update(Request $request, Tourist $tourist)
    {
        $tourist->fill($request->all()); 
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        if ($request->hasFile('image')){
            $tourist->image =  $urlimage;
        }
        $tourist->save();

        return redirect()->route('tourists.index'); 
    }
    public function destroy(Tourist $tourist)
    {
        $tourist->delete();
        return redirect()->route('tourists.index'); 
    }

    public function images(Tourist $tourist){

        return view('dashboard.tourists.images', compact('tourist'));
    }

    public function save_image(Request $request, Tourist $tourist){
        $urlimages = [];
        if($request->hasFile('imagenes')){
            $imagenes = $request->file('imagenes');
            foreach ($imagenes as $imagen) {
               $nombre = time().'_'.$imagen->getClientOriginalName();
               $ruta = public_path().'/imagenes';
               $imagen->move($ruta, $nombre);
               $urlimages[]['url'] ='/imagenes/'.$nombre;
            }
        }
        $tourist->images()->createMany($urlimages);
       return redirect()->back();
    }







}
