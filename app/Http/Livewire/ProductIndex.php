<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Product;

class ProductIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $product = Product::paginate(6);
        return view('livewire.product-index', [
            'products' => $product
        ]);
    }
}
