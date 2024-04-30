<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            [
                'slug' => 'baby',
                'category_id' => 1,
                'subName' => 'Baby'
            ],
            [
                'slug' => 'kids',
                'category_id' => 1,
                'subName' => 'Kids'
            ],
            [
                'slug' => 'kain',
                'category_id' => 2,
                'subName' => 'Kain'
            ],
            [
                'slug' => 'katun',
                'category_id' => 2,
                'subName' => 'Katun'
            ],
            [
                'slug' => 'flannel',
                'category_id' => 3,
                'subName' => 'Flannel'
            ],
            [
                'slug' => 'kemeja',
                'category_id' => 3,
                'subName' => 'Kemeja'
            ],
            [
                'slug' => 'koko',
                'category_id' => 4,
                'subName' => 'Koko'
            ],
            [
                'slug' => 'mukena',
                'category_id' => 4,
                'subName' => 'Mukena'
            ],
            [
                'slug' => 'jam-tangan',
                'category_id' => 5,
                'subName' => 'Jam Tangan'
            ],
            [
                'slug' => 'kalung',
                'category_id' => 5,
                'subName' => 'Kalung'
            ],
        ]);
    }
}
