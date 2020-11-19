<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographyController extends Controller
{

    public function index()
    {
        return view('dashboard.photographs.index');
    }
    public function create()
    {
        return view('dashboard.photographs.create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Photography $photography)
    {
        //
    }
    public function edit(Photography $photography)
    {
        return view('dashboard.photographs.edit');
    }
    public function update(Request $request, Photography $photography)
    {
        //
    }

        public function destroy(Photography $photography)
    {
        //
    }

    public function delete(){
        return view('dashboard.photographs.delete');
    }
}
