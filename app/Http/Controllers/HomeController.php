<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $this->initCartSession();

        return view('home');
    }

    private function initCartSession()
    {
        $cart = session()->get('cart');

        if ($cart == null) {
            session()->put('cart', []);
        }
    }
}
