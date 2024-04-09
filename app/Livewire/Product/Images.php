<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Images extends Component
{
    public $images = [];

    public function render()
    {
        return view('livewire.product.images');
    }
}
