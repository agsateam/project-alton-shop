<?php

namespace App\Livewire\Category;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;

class Products extends Component
{
    public $products;
    public $backupProducts;
    // LoadMore
    public $count;
    public $loadByCategory = null;
    public $loadBySubCategory = null;
    public $loadBySearch = null;
    public $filter_terbaru = false;
    public $filter_rating = false;
    public $filter_harga_min = 0;
    public $filter_harga_max = 0;

    public function mount()
    {
        $this->count = count($this->products);
        $this->backupProducts = $this->products;
    }

    public function loadMore()
    {
        $this->count += 4;

        if($this->loadByCategory == null && $this->loadBySubCategory == null){
            $this->products = Product::take($this->count)->get();
        }
        
        if($this->loadByCategory != null){
            $this->products = Product::where('category', $this->loadByCategory)->take($this->count)->get();
        }
        
        if($this->loadBySubCategory != null){
            $this->products = Product::where('sub_category', $this->loadBySubCategory)->take($this->count)->get();
        }

        if($this->loadBySearch != null){
            $getKeyword = "%" . $this->loadBySearch . "%";
            $this->products = Product::whereAny(['name'], 'LIKE', $getKeyword)->take($this->count)->get();
        }

        $this->backupProducts = $this->products;
        $this->loadMoreFiltered();
        // $this->dispatch('resetFilter');
    }

    private function loadMoreFiltered(){
        // Filter by Terbaru
        if ($this->filter_terbaru) {
            $this->products = $this->products->sortByDesc('updated_at');
        } else {
            $this->products = $this->products->sortBy('updated_at');
        }
        
        // Filter by Rating
        if ($this->filter_rating) {
            $this->products = $this->products->sortByDesc('rating');
        } else {
            $this->products = $this->backupProducts;
        }

        // Filter by Harga
        // $min = $this->filter_harga_min;
        // $max = $this->filter_harga_max;

        // $max == 0 ? $max = 100000000 : $max = $max;
        // $this->products = $this->backupProducts->   whereBetween('price', [$min, $max]);
    }

    public function render()
    {
        return view('livewire.category.products');
    }

    #[On('filterTerbaru')]
    public function filterByTerbaru($filter)
    {
        $this->filter_terbaru = $filter;

        if ($filter) {
            $this->products = $this->products->sortByDesc('updated_at');
        } else {
            $this->products = $this->products->sortBy('updated_at');
        }
    }

    #[On('filterRating')]
    public function filterByRating($filter)
    {
        $this->filter_rating = $filter;
        
        if ($filter) {
            $this->products = $this->products->sortByDesc('rating');
        } else {
            $this->products = $this->backupProducts;
        }
    }

    #[On('filterHarga')]
    public function filterByHarga($min, $max)
    {
        $this->filter_harga_min = $min;
        $this->filter_harga_max = $max;

        $max == 0 ? $max = 100000000 : $max = $max;
        $this->products = $this->backupProducts->whereBetween('price', [$min, $max]);
    }
}
