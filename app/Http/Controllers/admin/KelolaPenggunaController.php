<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KelolaPenggunaController extends Controller
{
    public function index()
    {
        $data = User::select('id', 'name', 'email')->whereHas("roles", function ($q) {
            $q->where("name", "admin");
        })->with(['roles', 'permissions'])->paginate(2);

        return view('admin.pengguna.index', ['users' => $data]);
    }

    public function tambah()
    {
        return view('admin.pengguna.tambah');
    }

    public function edit($id)
    {
        $data = User::select('id', 'name', 'email')->find($id);
        return view('admin.pengguna.edit', ['user' => $data]);
    }
}
