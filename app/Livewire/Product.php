<?php

namespace App\Livewire;

// use App\Livewire\Product;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Product extends Component
{
    public $search;

    protected $queryString = ['search'];
    public $products = [];
    public function mount(){
        // dd($this->products = Auth::user()->products);
    }
    // public $product = $categorie->product;


    public function render()
    {
        // dd($this->products->categorie);
        // testing
        // Benchmark::dd( [    'product 1' => fn () => \App\Models\Product::all(),
        // ]);
        $this->products = \App\Models\Product::all();

        $this->categorie = \App\Models\Categorie::all();

        return view('livewire.product',[
          'products' => \App\Models\Product::where('name', 'like', '%'.$this->search.'%')->get(),
        ])->layout('components.layouts.app')->title('Pgae de Product');
    }
}
