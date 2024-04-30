<?php

namespace App\Livewire\Category;

use Livewire\Component;

class Sidebar extends Component
{
    public $products;
    public $categories;
    public $slug;
    public $isHideDrawer = true;

    public function render()
    {
        return view('livewire.category.sidebar');
    }

    public function hideDrawer()
    {
        $this->isHideDrawer = true;
    }

    public function showDrawer()
    {
        $this->isHideDrawer = false;
    }
}
