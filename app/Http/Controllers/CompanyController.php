<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.company.index',compact('companies'));
    }
    public function create()
    {
        return view('dashboard.company.create');
    }
    public function store(Request $request)
    {
        $companies  = Company::create($request->all());
        return redirect()->route('companies.index');
    }
    public function show(Company $company)
    {
        //
    }
    public function edit(Company $vehiculo)
    {
        return view('dashboard.company.edit', compact('vehiculo'));
    }
    public function update(Request $request, Company $vehiculo)
    {
        
        $vehiculo->fill($request->all())->save(); 
        return redirect()->route('companies.index'); 
    }
    public function destroy(Company $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('companies.index'); 
    }
}
