<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

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
        $data = Permission::all();
        return view('admin.pengguna.tambah', ['permissions' => $data]);
    }

    public function edit($id)
    {
        $data = User::select('id', 'name', 'email')->find($id);
        return view('admin.pengguna.edit', ['user' => $data]);
    }
}
