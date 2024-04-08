<?php

namespace App\Livewire\Product;

use Livewire\Component;

class DataCheckout extends Component
{
    public $product;
    public $quantity = 1;
    public $size = '';
    public $mainImage;

    public function render()
    {
        if ($this->size == '') {
            $this->changeSize($this->product['sizes'][0]);
        }

        return view('livewire.product.data-checkout');
    }

    public function incrementQty($stock)
    {
        if ($this->quantity < $stock) {
            $this->quantity++;
        }
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
        $this->quantity = 1;
    }

    public function addToCart()
    {
        // define data product yg akan ditambahkan ke cart
        $cartProductID = $this->product['product_id'] . '-' . $this->size;
        $productToAdd = [
            "product_id" => $this->product['product_id'],
            "photo" => $this->mainImage,
            "name" => $this->product['name'],
            "size" => $this->size,
            "price" => $this->product['price'],
            "stock" => $this->product['stock'][$this->size],
            "qty" => $this->quantity
        ];

        // get data cart yg sudah ada
        $cart = session()->get('cart', []);

        // jika ada data cart dengan id sekian, quantity ditambahkan, bukan ditimpa
        $already = array_key_exists($cartProductID, $cart);
        if ($already) {
            $productToAdd['qty'] = $cart[$cartProductID]['qty'] + $this->quantity;
        }

        // update data cart
        $cart[$cartProductID] = $productToAdd;
        session()->put('cart', $cart);

        $this->dispatch('cartChange')->to(Cart::class);
        $this->dispatch('cartChange')->to(CartButton::class);

        // reset qty value
        $this->quantity = 1;
    }
}
