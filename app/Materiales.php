<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiales extends Model
{
    protected $fillable = [
        'nombre','puntaje','kilos'
    ];
}
