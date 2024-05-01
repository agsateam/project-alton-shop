<?php

namespace App\Livewire\Category;

use Livewire\Component;

class Filter extends Component
{
    public $filter_terbaru = true;
    public $filter_rating = false;
    public $filter_harga_min = 0;
    public $filter_harga_max = 0;
    public $rentang_harga_salah = false;

    public function render()
    {
        return view('livewire.category.filter');
    }

    public function check_terbaru()
    {
        $this->filter_terbaru = !$this->filter_terbaru;
        $this->dispatch('filterTerbaru', filter: $this->filter_terbaru);
    }

    public function check_rating()
    {
        $this->filter_rating = !$this->filter_rating;
        $this->dispatch('filterRating', filter: $this->filter_rating);
    }

    public function harga_min($value)
    {
        if ($value == "" || $value < 0) {
            $value = 0;
        }

        if ($this->filter_harga_max > 1 && $value > $this->filter_harga_max) {
            $this->rentang_harga_salah = true;
            $value = 0;
        } else {
            $this->rentang_harga_salah = false;
        }

        $this->filter_harga_min = $value;
        $this->dispatch('filterHarga', min: $this->filter_harga_min, max: $this->filter_harga_max);
    }

    public function harga_max($value)
    {
        if ($value == "" || $value < 0) {
            $value = 0;
        }

        if ($this->filter_harga_min > 1 && $value < $this->filter_harga_min) {
            $this->rentang_harga_salah = true;
            $value = 0;
        } else {
            $this->rentang_harga_salah = false;
        }

        $this->filter_harga_max = $value;
        $this->dispatch('filterHarga', min: $this->filter_harga_min, max: $this->filter_harga_max);
    }
}
