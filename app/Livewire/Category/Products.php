<?php

namespace App\Livewire\Category;

use Livewire\Component;
use Livewire\Attributes\On;

class Products extends Component
{
    public $products;

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
}
