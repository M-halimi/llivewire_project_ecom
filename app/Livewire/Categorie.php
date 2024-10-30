<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
// use App\Models\Categorie; // Make sure to import the Categorie model

class Categorie extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';


    public $categories = [];

    public function render()
    {
        // Fetch categories and assign them to $categories
        $this->categories = \App\Models\Categorie::all();

        return view('livewire.categorie', [
            'categories' => $this->categories
        ])->layout('components.layouts.app');
    }
}
