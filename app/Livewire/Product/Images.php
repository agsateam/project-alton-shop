<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Images extends Component
{
    public $images = [];
    public $mainImages = '';

    public function render()
    {
        $this->mainImages == '' ? $this->changeMainImages($this->images[0]) : [];

        return view('livewire.product.images');
    }

    public function changeMainImages($image)
    {
        $this->mainImages = $image;
    }
}
