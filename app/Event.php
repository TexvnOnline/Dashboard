<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'description', 'province','district', 'image', 'imageDescription','linkMaps', 'date', 'time',
    ];



}
