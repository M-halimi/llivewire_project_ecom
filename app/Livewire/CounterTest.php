<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;

use Livewire\Component;

class CounterTest extends Component
{
    public $text = 'halimi';
    public $counter = 0;
    public function increment(){

        $this->counter++;
    }

    public function decrament(){

        $this->counter--;

    }

    public function render()
    {
        App::setLocale('fr');

        return view('livewire.counter-test')->layout('components.layouts.app')->with('counter');
    }
}
