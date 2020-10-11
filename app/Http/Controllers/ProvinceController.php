<?php

namespace App\Http\Controllers;

use App\Province;
use Session;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        if(!empty(Session::get('department_id'))){
            $provinces = Province::orderBy('id', 'DESC')->where('department_id', Session::get('department_id'))->paginate(10);
            return view('dashboard.provinces.index',compact('provinces'));
        }else{
            return response()->view('errors.404', [], 404);
        }
    }
    public function create()
    {
        //
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
        //
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
