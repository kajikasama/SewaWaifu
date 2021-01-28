<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Fandom;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar', [
            'fandoms' => Fandom::all()
        ]);
    }
}
