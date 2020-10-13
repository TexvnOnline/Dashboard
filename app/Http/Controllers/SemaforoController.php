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
        $semaforos = Semaforo::get();
        // $markers = Park::get(['name','latitude', 'length'])->toJson();

        $markers = Semaforo::get(['id','name','description','latitude', 'length'])->toArray();
        // $markers->toString();
        // $markers = Arr::only($data,['name','direction','latitude', 'length']);

        
        $semaforosCount = Semaforo::count();
        return view('dashboard.semaforos.dashboard',compact('semaforos','markers','semaforosCount'));
        // return view('dashboard.parks.dashboard',compact('parks'))->with('markers',json_encode($markers,JSON_NUMERIC_CHECK));;
    }

    public function index()
    {
        $semaforos = Semaforo::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.semaforos.index',compact('semaforos'));
    }
    public function create()
    {
        return view('dashboard.semaforos.create');
    }
    public function store(Request $request)
    {
        $slug = Str::of($request->name)->slug('-');
        $semaforos = new Semaforo($request->all() + [
            'slug' => $slug, 
        ]);
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $semaforos->image = $urlimage;
        $semaforos->save();
        return redirect()->route('semaforos.index');
    }
    public function show(Semaforo $semaforo)
    {
        Session::put('semaforo_id',$semaforo->id);

        $sensors = SensorSemaforo::where('semaforo_id', $semaforo->id)->orderBy('id', 'DESC')->paginate(10);

        return view('dashboard.semaforos.show', compact('semaforo','sensors'));//falta
    }
    public function edit(Semafoto $semaforo)
    {
        return view('dashboard.semaforos.edit', compact('semaforo'));
    }
    public function update(Request $request, Semaforo $semaforo)
    {
        $slug = Str::of($request->name)->slug('-');
        $park->fill($request->all()+ [
            'slug' => $slug, 
        ]); 
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        if ($request->hasFile('image')){
            $semaforo->image =  $urlimage;
        }
        $semaforo->save();
        return redirect()->route('parks.index'); 
    }
    public function destroy(Semaforo $semaforo)
    {
        if(file_exists(public_path('/images/'. $semaforo->image))){
            unlink(public_path('/images/'. $semaforo->image));
        }
        $semaforo->delete();
        return redirect()->route('semaforos.index'); 
    } 
}
