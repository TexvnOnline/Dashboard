<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    //


    protected $fillable = [
        'name', 'description', 'province', 'district', 'image', 'imageDescription', 'weblink', 'image360', 'imageDescription360',
    ];


}
