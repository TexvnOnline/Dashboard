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
}
