<?php

namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        return view('dashboard.provinces.index');
    }
    public function create()
    {
        return view('dashboard.provinces.create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Province $province)
    {
        //
    }
    public function edit(Province $province)
    {
        return view('dashboard.provinces.edit');
    }
    public function update(Request $request, Province $province)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        //
    }
}
