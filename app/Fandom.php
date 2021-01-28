<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fandom extends Model
{
    public function products(){
        return $this->hasMany(Products::class, 'fandom_id', 'id');
    }
}
