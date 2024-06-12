<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $data = Product::select('name', 'category', 'sub_category', 'price', 'stock')->paginate(10);
        return view('admin.product.index', ['products' => $data]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function delete($id)
    {
        $data = Product::find($id);
        // $data->delete();
        session()->flash('hapus', 'Data berhasil dihapus');
        return redirect()->to(url('admin/product'));
    }
}
