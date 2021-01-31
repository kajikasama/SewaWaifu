<?php

namespace App\Http\Livewire;

use App\Fandom;
use Livewire\Component;
use Livewire\WithPagination;
use App\Product;

class ProductFandom extends Component
{
    use WithPagination;

    public $search, $fandom;
    protected $updateQuery = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function mount($fandomid)
    {
        $fandomDetail = Fandom::find($fandomid);
        if ($fandomDetail) {
            $this->fandom = $fandomDetail;
        }
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('fandom_id', $this->fandom->id)->where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $products = Product::where('fandom_id', $this->fandom->id)->paginate(6);
        }

        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'List Waifu ' . $this->fandom->nama
        ]);
    }
}
