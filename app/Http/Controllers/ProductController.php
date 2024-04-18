<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index($id = null)
    {
        $images = [
            "https://down-id.img.susercontent.com/file/id-11134207-7r990-lq8sagk24tume5",
            "https://down-id.img.susercontent.com/file/id-11134201-23030-s6ak6mlipsov24",
            "https://down-id.img.susercontent.com/file/id-11134207-7qul7-lhr78ni1btm1dc",
        ];

        $product = Product::where('product_id', $id)->first();
        if ($product == null) {
            return redirect('/');
        }

        return view('productDetail', [
            'product' => $product,
            'images' => $images
        ]);
    }
}
