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
        $RoleUser = Role::updateOrCreate(
            ['name' => 'user'],
            ['name' => 'user']
        );

        $RoleAdmin = Role::updateOrCreate(
            ['name' => 'admin'],
            ['name' => 'admin']
        );

        $Permission = Permission::updateOrCreate(
            ['name' => 'profile'],
            ['name' => 'profile']
        );

        $Permission2 = Permission::updateOrCreate(
            ['name' => 'tambah profile'],
            ['name' => 'tambah profile']
        );

        $Permission3 = Permission::updateOrCreate(
            ['name' => 'edit profile'],
            ['name' => 'edit profile']
        );

        $Permission4 = Permission::updateOrCreate(
            ['name' => 'produk'],
            ['name' => 'produk'],
        );

        Permission::updateOrCreate(
            ['name' => 'tambah produk'],
            ['name' => 'tambah produk'],
        );

        Permission::updateOrCreate(
            ['name' => 'edit produk'],
            ['name' => 'edit produk'],
        );

        $user = User::find(3);
        $user->givePermissionTo('produk');
    }
}
