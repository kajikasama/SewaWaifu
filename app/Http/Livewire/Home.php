<?php

namespace App\Http\Livewire;

use App\Product;
use App\Fandom;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        // return view('livewire.home', {
        //     // 'products' => Product::take(4)->get(),
        //     // 'ligas' => Liga::all()
        // });
        return view('livewire.home',[
            'products' => Product::take(4)->orderBy('nama','desc')->get(),
            'fandoms' => Fandom::all() //select * from 
        ]);
    }
}
