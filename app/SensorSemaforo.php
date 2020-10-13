<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorSemaforo extends Model
{
    protected $fillable = [
        'park_id', 'type', 'level', 'name','status',
    ];
}
