<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Session;

class DepartmentController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
        return view('dashboard.departments.create');
    }
    public function store(Request $request)
    {
        $departments  = Department::create($request->all());
        return redirect()->route('citizen_participation.index');
    }
    public function show(Department $department)
    {
        Session::put('department_id',$department->id);
        return redirect()->route('provinces.index');
    }
    public function edit(Department $department)
    {
        return view('dashboard.departments.edit', compact('department'));
    }
    public function update(Request $request, Department $department)
    {
        $department->fill($request->all())->save(); 
        return redirect()->route('citizen_participation.index'); 
    }
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('citizen_participation.index'); 
    }
}
