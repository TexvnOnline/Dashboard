<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class Citizen_participationController extends Controller
{
    public function index(){
        $departments = Department::orderBy('id', 'DESC')->paginate(5);
        return view('dashboard.citizen_participation.index', compact('departments'));
    }
}
