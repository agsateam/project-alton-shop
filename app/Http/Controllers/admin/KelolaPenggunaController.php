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
        $data = permission::findById($id);
        // dd($data);
        return view('admin.pengguna.edit', ['permissions' => $data]);
    }

    public function delete($id)
    {
        $data = permission::findById($id);
        // $data->delete();
        session()->flash('hapus', 'Data berhasil dihapus');
        return redirect()->to(url('admin/pengguna/kelola-pengguna'));
    }
}
