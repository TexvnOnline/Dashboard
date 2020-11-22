<?php

namespace App\Http\Controllers;

use App\Tourist;
use Illuminate\Http\Request;

class TouristController extends Controller
{


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
        
    }
    public function show(Contact $contact)
    {
       
    }
    public function edit(Contact $contact)
    {
        return view('dashboard.tourists.edit');
    }
    public function update(Request $request, Contact $contact)
    {
        return redirect()->route('tourists.index'); 
    }
    public function destroy(Contact $contact)
    {
        return redirect()->route('tourists.index'); 
    }

    public function delete(){
        return view('dashboard.tourists.delete');
    }



}
