<?php

namespace App\Livewire\Category;

use Livewire\Component;

class Sidebar extends Component
{
    public $accordions = [
        // [
        //     'no' => '1',
        //     'name' => 'Category',
        // ],
        [
            'no' => '2',
            'name' => 'Sub Category',
        ]
    ];
    public $categoryName = "Atasan"; // iki mngko ngeget dek db
    public $subCategories = ['flanel', 'katun', 'sutra', 'rayon', 'spandek', 'kaos', 'kain', 'bahan', 'kemeja'];
    public $products = [];
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
