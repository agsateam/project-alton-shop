<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index($slug = null)
    {
        if ($slug == null) {
            return redirect('/');
        }

        $category = Category::all();
        $categoryName = Category::where('slug', $slug)->first()->categoryName;
        $products = Product::where('category', $slug)->take(8)->get();

        return view('category.category', [
            'categories' => $category,
            'categoryName' => $categoryName,
            'products' => $products,
        ]);
    }

    public function subCategory($slug = null, $subSlug = null)
    {
        if ($slug == null) {
            return redirect('/');
        }

        if ($subSlug == null) {
            return redirect('/category/' . $subSlug);
        }

        $categories = Category::all();
        $categoryName = Category::where('slug', $slug)->first()->categoryName;
        $subCategoryName = SubCategory::where('slug', $subSlug)->first()->subName;
        $products = Product::where('sub_category', $subSlug)->take(8)->get();

        return view('category.subCategory', [
            'categories' => $categories,
            'categoryName' => $categoryName,
            'subCategoryName' => $subCategoryName,
            'products' => $products,
        ]);
    }
}
