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
        return view('dashboard.companies.index');
    }
    public function create()
    {
        return view('dashboard.companies.create');
    }
    public function store(Request $request)
    {
        return redirect()->route('companies.index');
    }
    public function show(Company $company)
    {
        return redirect()->route('vehicles.index');
    }
    public function edit(Company $company)
    {
        return view('dashboard.companies.edit');
    }
    public function update(Request $request, Company $company)
    {
        return redirect()->route('companies.index'); 
    }
    public function destroy(Company $company)
    {
        return redirect()->route('companies.index'); 
    }
}
