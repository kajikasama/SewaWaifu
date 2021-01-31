<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.product-detail');
    }
    public function mount($id)
    {
        $productDetail = Product::find($id);
        if ($productDetail) {
            $this->product = $productDetail;
        }
    }
}
