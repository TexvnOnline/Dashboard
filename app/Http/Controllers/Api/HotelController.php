<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function getHotels(){
        $hotels = Hotel::get();
        return $hotels->toJson();
    }
}
