<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $fillable = [
        'park_id', 'type', 'level', 'name','status',
    ];
}
