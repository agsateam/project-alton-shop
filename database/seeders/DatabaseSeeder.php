<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            WebConfigSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            PermissionSeeder::class
        ]);

        $user = User::factory()->create([
            'name' => 'Mas Padhil',
            'email' => 'test@example.com',
        ]);
        $user->assignRole("user");

        $admin = User::factory()->create([
            'name' => 'Mas Agoy',
            'email' => 'admin@example.com',
        ]);
        $admin->assignRole("admin");
    }
}
