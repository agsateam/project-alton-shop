<?php

namespace App\Livewire\Category;

use Livewire\Component;
use Livewire\Attributes\On;

class Products extends Component
{
    public $products;
    public $backupProducts;

    public function mount()
    {
        $this->backupProducts = $this->products;
    }

    public function render()
    {
        return view('livewire.category.products');
    }

    #[On('filterTerbaru')]
    public function filterByTerbaru($filter)
    {
        if ($filter) {
            $this->products = $this->products->sortByDesc('updated_at');
        } else {
            $this->products = $this->products->sortBy('updated_at');
        }
    }

    #[On('filterRating')]
    public function filterByRating($filter)
    {
        if ($filter) {
            $this->products = $this->products->sortByDesc('rating');
        } else {
            $this->products = $this->backupProducts;
        }
    }

    #[On('filterHarga')]
    public function filterByHarga($min, $max)
    {
        $max == 0 ? $max = 100000000 : $max = $max;
        $this->products = $this->backupProducts->whereBetween('price', [$min, $max]);
    }
}
