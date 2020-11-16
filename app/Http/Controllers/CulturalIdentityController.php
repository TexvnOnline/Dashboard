<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Hotel;
use App\Restaurant;
use App\Tourist;


class CulturalIdentityController extends Controller
{
    public function dashboard(){
        return view('dashboard.culturalIdentity.dashboard');
    }
}
