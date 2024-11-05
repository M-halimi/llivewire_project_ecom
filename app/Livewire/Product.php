<?php

namespace App\Livewire;

use App\Models\Product as ProductModel;
use App\Models\Categorie;
use Livewire\Component;

class Product extends Component
{
    public $products = [];
    public $search = '';

    public function render()
    {
        $query = ProductModel::query();

        return view('livewire.product', [
            'products' => $query->with('categorie_id')->get(),
            'categories' => Categorie::all()
        ])->layout('components.layouts.app')->title('Page de Product');
    }
}
