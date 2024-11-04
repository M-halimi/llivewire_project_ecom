<?php

namespace App\Livewire;

use Illuminate\Support\Benchmark;
use Livewire\Component;

class Product extends Component
{
    public $products = [];
    public $search = '';

    public function render()
    {
        // testing
        // Benchmark::dd( [    'product 1' => fn () => \App\Models\Product::all(),
        // ]);
        // $this->products = \App\Models\Product::all();
        return view('livewire.product',[
            'produtcs' => \App\Models\Product::paginate(10)
        ])->layout('components.layouts.app');
    }
}
