<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// agregar para usar SoftDeletes
use Illuminate\Database\Eloquent\SoftDeletes;
class Park extends Model
{ 
    // agregar para usar SoftDeletes
    use SoftDeletes;
    protected $fillable = [
        'name', 'slug', 'direction','reference','description','image','latitude','length'
    ];
}
