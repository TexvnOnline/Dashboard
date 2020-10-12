<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Hotel;
use App\Restaurant;
use App\Contact;


class CulturalIdentityController extends Controller
{
    public function dashboard(){
        $events = Event::get();
        $events_count = Event::count();
        $hotels = Hotel::get();
        $hotels_count = Hotel::count();
        $restaurants = Restaurant::get();
        $restaurants_count = Restaurant::count();
        $contact = Contact::get();
        $contact_count = Contact::count();
        return view('dashboard.culturalIdentity.dashboard', compact('hotels_count','events_count','restaurants_count','events','hotels','restaurants','contacts'));

    }
}
