<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = [
        'user_id', 'title', 'description','image'
    ];
    public function vehicles(){
        return $this->belongsToMany(Vehicle::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
