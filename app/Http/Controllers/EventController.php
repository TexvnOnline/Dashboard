<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('dashboard.events.index');
    }
    public function create()
    {
        return view('dashboard.events.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('events.index');
    }
    public function show(Event $event)
    {
       
    }
    public function edit(Event $event)
    {
        return view('dashboard.events.edit');
    }
    public function update(Request $request, Event $event)
    {
        return redirect()->route('events.index'); 
    }
    public function destroy(Event $event)
    {
        return redirect()->route('events.index'); 
    }
}
