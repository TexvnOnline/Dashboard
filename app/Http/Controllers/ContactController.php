<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('dashboard.contacts.index');
    }
    public function create()
    {
        return view('dashboard.contacts.create');
    }
    public function store(Request $request)
    {
        
    }
    public function show(Contact $contact)
    {
       
    }
    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit');
    }
    public function update(Request $request, Contact $contact)
    {
        return redirect()->route('contacts.index'); 
    }
    public function destroy(Contact $contact)
    {
        return redirect()->route('contacts.index'); 
    }

    public function delete(){
        return view('dashboard.contacts.delete');
    }


}
