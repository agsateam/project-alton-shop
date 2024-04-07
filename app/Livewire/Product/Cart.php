<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Livewire\Attributes\On;

class Cart extends Component
{
    public $cart = [];
    public $subTotal = 0;
    public $totalQty = 0;

    public $isHideDrawer = true;

    public function render()
    {
        // define init value of cart by current session
        $this->cart = session()->get('cart');
        // count subtotal & qty
        $this->sumPrice();
        $this->sumQty();

        return view('livewire.product.cart');
    }

    public function sumPrice()
    {
        $this->subTotal = 0;
        foreach ($this->cart as $i) {
            $this->subTotal += $i['price'] * $i['qty'];
        }
    }

    public function sumQty()
    {
        $this->totalQty = 0;
        foreach ($this->cart as $i) {
            $this->totalQty += $i['qty'];
        }
    }

    #[On('cartChange')]
    public function cartChange()
    {
        // refresh data cart when some item added
        $this->cart = session()->get('cart');

        $this->sumPrice();
        $this->sumQty();
    }

    public function addQty($id)
    {
        $cart = session()->get('cart');

        if ($cart[$id]['qty'] < $cart[$id]['stock']) {
            $cart[$id]['qty']++;

            session()->put('cart', $cart);

            $this->cartChange();
            $this->showDrawer();

            $this->dispatch('cartChange')->to(CartButton::class);
        }
    }

    public function reduceQty($id)
    {
        $cart = session()->get('cart');

        if ($cart[$id]['qty'] > 1) {
            $cart[$id]['qty']--;

            session()->put('cart', $cart);

            $this->cartChange();
            $this->showDrawer();

            $this->dispatch('cartChange')->to(CartButton::class);
        }
    }

    public function removeItem($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);

        session()->put('cart', $cart);

        $this->cartChange();
        $this->showDrawer();

        $this->dispatch('cartChange')->to(CartButton::class);
    }

    public function hideDrawer()
    {
        $this->isHideDrawer = true;
    }

    public function showDrawer()
    {
        $this->isHideDrawer = false;
    }

    public function continueShopping()
    {
        $this->hideDrawer();
        return $this->redirect('/', navigate: true);
    }
}
