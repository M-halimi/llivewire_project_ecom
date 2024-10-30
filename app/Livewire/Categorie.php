<?php

namespace App\Livewire;

use Livewire\Component;

class Categorie extends Component
{

    public $categories = [];
    public $categorie = '';
    //    dd($categories);
    public function render()
    {
dd(    $this->categorie = \App\Models\Categorie::all() ) ;       
        return view('livewire.categorie', [
            'categorie' => $this->categorie
        ])->layout('components.layouts.app')->with('categorie');
    }
}
