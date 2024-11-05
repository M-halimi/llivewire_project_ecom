<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Benchmark;

class Categorie extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    // protected $paginationTheme = 'bootstrap';


    public $categories = [];
    // public $perPage = 10;

    public function render()
    {
        // testing Query
        // Benchmark::dd([
        //     'categorie 1' => fn () => \App\Models\Categorie::where('id', '4'),
        //     'categorie 2' => fn () => \App\Models\Categorie::all()->count(),
        // ]);
       $this->categories = \App\Models\Categorie::paginate(10);

       return view('livewire.categorie', [
        // 'categories' => \App\Models\Categorie::all()
    ])->layout('components.layouts.app')->title('Page de Categorie');
    }
}
