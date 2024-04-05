<?php

namespace App\Livewire\Product;

use Livewire\Component;

class DataCheckout extends Component
{
    public $product;
    public $quantity = 1;
    public $size = '';

    public function render()
    {
        if ($this->size == '') {
            $this->changeSize($this->product['sizes'][0]);
        }

        return view('livewire.product.data-checkout');
    }

    public function incrementQty()
    {
        $this->quantity++;
    }

    public function decrementQty()
    {
        if ($this->quantity != 0) {
            $this->quantity--;
        }
    }

    public function changeSize($size)
    {
        $this->size = $size;
    }

    public function addToCart()
    {
        dd([
            "name" => $this->product['name'],
            "size" => $this->size,
            "price" => $this->product['price'],
            "qty" => $this->quantity
        ]);
    }
}
