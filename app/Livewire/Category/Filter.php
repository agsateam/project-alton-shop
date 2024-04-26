<?php

namespace App\Livewire\Category;

use Livewire\Component;

class Filter extends Component
{
    public $filter_terbaru = true;

    public function render()
    {
        return view('livewire.category.filter');
    }

    public function check_terbaru()
    {
        $this->filter_terbaru = !$this->filter_terbaru;
        $this->dispatch('filterTerbaru', filter: $this->filter_terbaru);
    }
}
