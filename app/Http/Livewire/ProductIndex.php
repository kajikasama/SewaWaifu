<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Product;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;
    protected $updateQuery = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        if ($this->search) {
            $products = Product::where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $products = Product::paginate(6);
        }

        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'List Waifu All Fandom'
        ]);
    }
}
