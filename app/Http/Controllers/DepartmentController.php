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
        return redirect()->route('citizen_participation.index');
    }
    public function show(Department $department)
    {
        return redirect()->route('provinces.index');
    }
    public function edit(Department $department)
    {
        return view('dashboard.departments.edit');
    }
    public function update(Request $request, Department $department)
    {
        return redirect()->route('citizen_participation.index'); 
    }
    public function destroy(Department $department)
    {
        return redirect()->route('citizen_participation.index'); 
    }
}
