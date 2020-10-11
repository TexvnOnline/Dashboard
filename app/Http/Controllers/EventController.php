<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
   
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.events.index',compact('events'));
           
       dd($events);
    }
    public function create()
    {
        return view('dashboard.events.create');
    }
    public function store(Request $request)
    {
        $event = new Event($request->all());
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $event->image =  $urlimage;
        $event->save();

        return redirect()->route('events.index');
    }
    public function show(Event $event)
    {
       
    }
    public function edit(Event $event)
    {
        return view('dashboard.events.edit', compact('event'));
    }
    public function update(Request $request, Event $event)
    {
        $event->fill($request->all()); 
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        if ($request->hasFile('image')){
            $event->image =  $urlimage;
        }
        $event->save();
        return redirect()->route('events.index'); 
    }
    public function destroy(Event $event)
    {
        if(file_exists(public_path('/images/'. $event->image))){
            unlink(public_path('/images/'. $event->image));
        }
        $event->delete();
        return redirect()->route('events.index'); 
    }
}
