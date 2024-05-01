<?php

namespace App\Livewire\Category;

use Livewire\Component;
use Livewire\Attributes\On;

class Products extends Component
{
    public $products;
    public $backupProducts; // untuk menampung backup data product
    public $backupFilteredProducts; // untuk menampung backup data product yg difilter
    // for LoadMore
    public $count;
    public $filter_terbaru = true; // by default, product diurutkan dari yg terbaru
    public $filter_rating = false;
    public $filter_harga_min = 0;
    public $filter_harga_max = 0;

    public function mount()
    {
        // backup data saat pertama kali halaman di load
        $this->backupProducts = $this->products;
        $this->backupFilteredProducts = $this->products;

        $this->products = $this->products->take(20); // menampilkan 20 data pertama

        $this->count = count($this->products); // isi nilai awal var count, jane nek langsung this->count = 20; dobae rpp si h3h3
    }

    public function loadMore()
    {
        $this->count += 4; // menambah nilai var count yg awalnya 20
        $this->products = $this->backupProducts->take($this->count); // update var product, ambil dari backup product

        $this->runFilters(); // jalankan filter
    }

    private function runFilters()
    {
        // Filter by Terbaru, just remember.. nilai default true / default aktif
        if ($this->filter_terbaru) {
            $this->products = $this->backupFilteredProducts->sortByDesc('updated_at'); // filter terbaru tidak aktif
        } else {
            $this->products = $this->backupFilteredProducts->sortBy('updated_at'); // filter terbaru aktif
        }

        // Filter by Rating
        if ($this->filter_rating) {
            $this->products = $this->backupFilteredProducts->sortByDesc('rating'); // aktif
        } else {
            $this->products = $this->backupProducts; // nonaktif
        }

        // Filter by Harga
        $min = $this->filter_harga_min;
        $max = $this->filter_harga_max;

        $max == 0 ? $max = 100000000 : $max = $max; // jika max=0, isi max dgn nilai 1jt, jadi between 0-1jt, tidak 0-0
        $this->products = $this->products->whereBetween('price', [$min, $max]);

        $this->products = $this->products->take($this->count);
    }

    public function render()
    {
        return view('livewire.category.products');
    }

    // semua function dibawah dijalankan ketika ada trigger di component Livewire/Category/Filter (dispatch)
    #[On('filterTerbaru')]
    public function filterByTerbaru($filter)
    {
        $this->filter_terbaru = $filter;

        $this->runFilters();
    }

    #[On('filterRating')]
    public function filterByRating($filter)
    {
        $this->filter_rating = $filter;

        $this->runFilters();
    }

    #[On('filterHarga')]
    public function filterByHarga($min, $max)
    {
        $this->filter_harga_min = $min;
        $this->filter_harga_max = $max;

        $this->runFilters();
    }
}
