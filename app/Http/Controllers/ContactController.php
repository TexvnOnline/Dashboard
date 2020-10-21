<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('id', 'DESC')->paginate(10);  
            return view('dashboard.contacts.index',compact('contacts'));
           
    
    }
    public function create()
    {
        return view('dashboard.contacts.create');
    }
    public function store(Request $request)
    {
        
        $contact = new Contact($request->all());
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        $contact->image = $urlimage;
        $contact->save();
        return redirect()->route('contacts.index');
    }
    public function show(Contact $contact)
    {
       
    }
    public function edit(Contact $contact)
    {
        return view('dashboard.contacts.edit', compact('contact'));
    }
    public function update(Request $request, Contact $contact)
    {
        $contact->fill($request->all());
         
        if($request->hasfile('image')){
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $ruta = public_path().'/images';
            $image->move($ruta, $name);
            $urlimage ='/images/'.$name;
        }
        if ($request->hasFile('image')){
            $contact->image =  $urlimage;
        }
        $contact->save();
        return redirect()->route('contacts.index'); 
    }
    public function destroy(Contact $contact)
    {
        if(file_exists(public_path('/images/'. $contact->image))){
            unlink(public_path('/images/'. $contact->image));
        }
        $contact->delete();
        return redirect()->route('contacts.index'); 
    }
}
