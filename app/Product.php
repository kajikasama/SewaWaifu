<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //one to many
    public function fandom(){
        return $this->belongsTo(Fandom::class, 'fandom_id', 'id');
    }
    //many to many
    public function pesanan_details(){
        return $this->hasMany(PesananDetail::class, 'pesanan_id', 'id');
    }
}
