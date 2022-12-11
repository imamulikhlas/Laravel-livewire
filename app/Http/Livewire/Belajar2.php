<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar2 extends Component
{   
    public $keranjang = 0;

    public function render()
    {
        return view('livewire.belajar2');
    }

    public function plus()
    {
        $this->keranjang++;
    }

    public function minus()
    {
        $this->keranjang--;
    }
}
