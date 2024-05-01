<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request['keyword'] == null) {
            return redirect('/');
        }

        $getKeyword = "%" . $request['keyword'] . "%";

        $category = Category::all();
        $products = Product::whereAny(['name'], 'LIKE', $getKeyword)->get();

        return view('search', [
            'categories' => $category,
            'products' => $products,
            'keyword' => $request['keyword']
        ]);
    }
}
