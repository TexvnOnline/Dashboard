<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Hotel;
use App\Restaurant;


class CulturalIdentityController extends Controller
{
    public function dashboard(){
        $events = Event::get();
        $hotels = Hotel::get();
        $hotels_count = Hotel::count();
        $restaurants = Restaurant::get();
        return view('dashboard.culturalIdentity.dashboard', compact('hotels_count','events','hotels','restaurants'));

    }
}
