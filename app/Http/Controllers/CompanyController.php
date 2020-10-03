<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Auth\SessionGuard;
use Illuminate\Http\Request;
use Session;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.companies.index',compact('companies'));
    }
    public function create()
    {
        return view('dashboard.companies.create');
    }
    public function store(Request $request)
    {
        $companies  = Company::create($request->all());
        return redirect()->route('companies.index');
    }
    public function show(Company $company)
    {
        Session::put('company_id',$company->id);
        return redirect()->route('vehicles.index', compact('company'));
    }
    public function edit(Company $company)
    {
        return view('dashboard.companies.edit', compact('company'));
    }
    public function update(Request $request, Company $company)
    {
        $company->fill($request->all())->save(); 
        return redirect()->route('companies.index'); 
    }
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index'); 
    }
}
