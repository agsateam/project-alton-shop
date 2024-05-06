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
            SubCategorySeeder::class
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name'          => 'First Name',
            'email'         => 'admin@example.com',
            'last_name'     => 'Last Name',
            'date_of_birth' => '1999-01-01',
            'phone_number'  => '081234567890',
            'province'      => '33',
            'city'          => '33.16',
            'district'      => '33.16.09',
            'postal_code'   => '05241',
        ]);
    }
}
