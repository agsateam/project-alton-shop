<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Livewire\Attributes\On;

class CartButton extends Component
{
    public $cartSum = 0;

    public function render()
    {
        $this->sumCart();

        return view('livewire.product.cart-button');
    }

    #[On('cartChange')]
    public function sumCart()
    {
        $cart = session()->get('cart');
        $total = 0;

        foreach ($cart as $i) {
            $total += $i['qty'];
        }

        $this->cartSum = $total;
    }
}
