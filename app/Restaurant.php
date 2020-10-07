<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name', 'description', 'province', 'district', 'image', 'facebook', 'imageDescription', 'weblink', 'Celular', 'linkMaps',
    ];
}
