<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class SecurityController extends Controller
{
    public function index()
    {
        return view('dashboard.security.index');
    }
}
