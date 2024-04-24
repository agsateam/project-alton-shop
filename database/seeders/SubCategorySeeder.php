<?php

namespace Database\Seeders;

use App\Models\subCategory;
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
                'subName' => 'baby'
            ],
            [
                'slug' => 'kids',
                'category_id' => 1,
                'subName' => 'kids'
            ],
            [
                'slug' => 'kain',
                'category_id' => 2,
                'subName' => 'kain'
            ],
            [
                'slug' => 'katun',
                'category_id' => 2,
                'subName' => 'katun'
            ],
            [
                'slug' => 'flanel',
                'category_id' => 3,
                'subName' => 'flanel'
            ],
            [
                'slug' => 'kemeja',
                'category_id' => 3,
                'subName' => 'kemeja'
            ],
            [
                'slug' => 'kokoh',
                'category_id' => 4,
                'subName' => 'kokoh'
            ],
            [
                'slug' => 'mukena',
                'category_id' => 4,
                'subName' => 'mukena'
            ],
            [
                'slug' => 'jam-tangan',
                'category_id' => 5,
                'subName' => 'jam tangan'
            ],
            [
                'slug' => 'kalung',
                'category_id' => 5,
                'subName' => 'kalung'
            ],
        ]);
    }
}
