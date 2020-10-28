<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// agregar para usar SoftDeletes
use Illuminate\Database\Eloquent\SoftDeletes;
class SemaforoUsuarios extends Model
{ 
    // agregar para usar SoftDeletes
    use SoftDeletes;
    protected $fillable = [
        'name', 'surname', 'direction','fech_nac','nacionalidad','telefono','email'
    ];
}
