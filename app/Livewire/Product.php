<?php

namespace App\Livewire;

// use App\Livewire\Product;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function Laravel\Prompts\search;

class Product extends Component
{
    private $title1 = 'test';
    public function clickme(){
        dump('click me!');
    }
    public $search = '';

    // protected $queryString = ['search'];
    public $products = [];
    public function mount(){
        // dd($this->products = Auth::user()->products);
    }
    // public $product = $categorie->product;


    public function render()
    {
         $title  = 'title';
        // dd($this->products->categorie);
        // testing
        // Benchmark::dd( [    'product 1' => fn () => \App\Models\Product::all(),
        // ]);
        $this->products = \App\Models\Product::all();

        $this->categorie = \App\Models\Categorie::all();

        return view('livewire.product',[
        //   'products' => Product::search($this->search),
        ])->layout('components.layouts.app')->title('Pgae de Product');
    }
}
