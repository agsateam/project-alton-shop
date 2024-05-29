<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'lihat produk',
            'tambah produk',
            'edit produk',
            'hapus produk',
            'lihat kategori',
            'tambah kategori',
            'edit kategori',
            'hapus kategori',
            'lihat transaksi',
            'tambah transaksi',
            'edit transaksi',
            'hapus transaksi',
            'lihat tentang kami',
            'tambah tentang kami',
            'edit tentang kami',
            'hapus tentang kami',
            'lihat kebijakan privasi',
            'tambah kebijakan privasi',
            'edit kebijakan privasi',
            'hapus kebijakan privasi',
            'lihat syarat dan ketentuan',
            'tambah syarat dan ketentuan',
            'edit syarat dan ketentuan',
            'hapus syarat dan ketentuan',
            'lihat faq',
            'tambah faq',
            'edit faq',
            'hapus faq',
            'lihat banner',
            'tambah banner',
            'edit banner',
            'hapus banner',
            'lihat warna tema',
            'tambah warna tema',
            'edit warna tema',
            'hapus warna tema',
            'lihat kelola pengguna',
            'tambah pengguna',
            'edit pengguna',
            'hapus pengguna',
        ];

        Role::updateOrCreate(
            ['name' => 'user'],
            ['name' => 'user']
        );

        Role::updateOrCreate(
            ['name' => 'admin'],
            ['name' => 'admin']
        );

        foreach ($permissions as $item) {
            Permission::updateOrCreate(
                ['name' => $item],
                ['name' => $item]
            );
        }
    }
}
