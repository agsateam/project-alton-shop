<?php

namespace App\Livewire\Category;

use Livewire\Component;

class Filter extends Component
{
    public $products;

    public function render()
    {
        return view('livewire.category.filter');
    }

    public function filter_terbaru()
    {
        $productfilter = [];
        foreach ($this->products as $product) {
            $prices = $product['price'];
            if ($prices > 120.000) {
                $productfilter[] = $product;
            }
        }

        $this->products = $productfilter;
    }

    public function filter_terlaris()
    {
        $productfilter = [];
        foreach ($this->products as $rating) {
            $rating = $rating['rating'];
            if ($rating > 3) {
                $productfilter[] = $rating;
            }
        }
        $this->products = $productfilter;
    }

    public function check_terbaru()
    {
        if ($this->prices > 'checked') {
            $this->filter_terbaru();
        }
    }

    public function check_terlaris()
    {
        if ($this->rating > 'checked') {
            $this->filter_terlaris();
        }
    }
}
