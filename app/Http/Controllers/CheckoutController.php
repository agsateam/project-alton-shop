<?php

namespace App\Http\Controllers;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        $subTotal = $this->sumPrice($cart);

        return view('checkout', [
            'cart' => $cart,
            'subTotal' => $subTotal,
        ]);
    }

    private function sumPrice($cart)
    {
        $subTotal = 0;
        foreach ($cart as $i) {
            $subTotal += $i['price'] * $i['qty'];
        }

        return $subTotal;
    }
}
