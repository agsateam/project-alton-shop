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

        $user2 = User::factory()->create([
            'name'          => 'First Name',
            'email'         => 'user2@example.com',
            'last_name'     => 'Last Name',
            'date_of_birth' => '1999-01-01',
            'phone_number'  => '081234567890',
            'province'      => 'JAWA TENGAH',
            'city'          => 'KABUPATEN BLORA',
            'district'      => 'Blora',
            'postal_code'   => '05241',
          ]);
        $user2->assignRole("user");
      
        $admin = User::factory()->create([
            'name' => 'Mas Agoy',
            'email' => 'admin@example.com'
        ]);
        $admin->assignRole("admin");
    }
}
