<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
       'company_id','driver', 'plate',
    ];
    public function incidents(){
        return $this->belongsToMany(Incident::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
