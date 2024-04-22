<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index($slug = null)
    {
        if ($slug == null) {
            return redirect('/');
        }

        $accordion = [
            // [
            //     'no' => '1',
            //     'name' => 'Category',
            // ],
            [
                'no' => '2',
                'name' => 'Sub Category',
            ]
        ];

        $categoryName = "Atasan"; // iki mngko ngeget dek db
        $subCategory = ['flanel', 'katun', 'sutra', 'rayon', 'spandek', 'kaos', 'kain', 'bahan', 'kemeja'];

        $product = [
            [
                'sub_kategori' => 'flanel',
                'kategori' => 'baby & kids',
                'name' => 'Product 1',
                'price' => 100000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'flanel',
                'kategori' => 'baby & kids',
                'name' => 'Product 2',
                'price' => 150000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'flanel',
                'kategori' => 'baby & kids',
                'name' => 'Product 3',
                'price' => 120000,
                'rating' => 5,
            ],
            [
                'sub_kategori' => 'flanel',
                'kategori' => 'baby & kids',
                'name' => 'Product 4',
                'price' => 80000,
                'rating' => 2,
            ],
            [
                'sub_kategori' => 'katun',
                'kategori' => 'set',
                'name' => 'Product 5',
                'price' => 200000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'katun',
                'kategori' => 'set',
                'name' => 'Product 6',
                'price' => 90000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'katun',
                'kategori' => 'set',
                'name' => 'Product 7',
                'price' => 110000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'katun',
                'kategori' => 'set',
                'name' => 'Product 8',
                'price' => 130000,
                'rating' => 5,
            ],
            [
                'sub_kategori' => 'sutra',
                'kategori' => 'atasan',
                'name' => 'Product 9',
                'price' => 70000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'sutra',
                'kategori' => 'atasan',
                'name' => 'Product 10',
                'price' => 180000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'sutra',
                'kategori' => 'atasan',
                'name' => 'Product 11',
                'price' => 100000,
                'rating' => 5,
            ],
            [
                'sub_kategori' => 'sutra',
                'kategori' => 'atasan',
                'name' => 'Product 12',
                'price' => 160000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'rayon',
                'kategori' => 'muslim',
                'name' => 'Product 13',
                'price' => 140000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'rayon',
                'kategori' => 'muslim',
                'name' => 'Product 14',
                'price' => 190000,
                'rating' => 2,
            ],
            [
                'sub_kategori' => 'rayon',
                'kategori' => 'muslim',
                'name' => 'Product 15',
                'price' => 170000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'rayon',
                'kategori' => 'muslim',
                'name' => 'Product 16',
                'price' => 120000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'spandek',
                'kategori' => 'aksesoris',
                'name' => 'Product 17',
                'price' => 130000,
                'rating' => 5,
            ],
            [
                'sub_kategori' => 'spandek',
                'kategori' => 'aksesoris',
                'name' => 'Product 18',
                'price' => 100000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'spandek',
                'kategori' => 'aksesoris',
                'name' => 'Product 19',
                'price' => 150000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'spandek',
                'kategori' => 'aksesoris',
                'name' => 'Product 20',
                'price' => 110000,
                'rating' => 4,
            ],
        ];

        return view('category.category', [
            'categoryName' => $categoryName,
            'accordion' => $accordion,
            'subCategory' => $subCategory,
            'products' => $product,
        ]);
    }

    public function subCategory()
    {
        $accordion = [
            // [
            //     'no' => '1',
            //     'name' => 'Category',
            // ],
            [
                'no' => '2',
                'name' => 'Sub Category',
            ]
        ];

        $categoryName = "Atasan"; // iki mngko ngeget dek db
        $subCategory = ['flanel', 'katun', 'sutra', 'rayon', 'spandek', 'kaos', 'kain', 'bahan', 'kemeja'];

        $product = [
            [
                'sub_kategori' => 'flanel',
                'kategori' => 'baby & kids',
                'name' => 'Product 1',
                'price' => 100000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'flanel',
                'kategori' => 'baby & kids',
                'name' => 'Product 2',
                'price' => 150000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'flanel',
                'kategori' => 'baby & kids',
                'name' => 'Product 3',
                'price' => 120000,
                'rating' => 5,
            ],
            [
                'sub_kategori' => 'flanel',
                'kategori' => 'baby & kids',
                'name' => 'Product 4',
                'price' => 80000,
                'rating' => 2,
            ],
            [
                'sub_kategori' => 'katun',
                'kategori' => 'set',
                'name' => 'Product 5',
                'price' => 200000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'katun',
                'kategori' => 'set',
                'name' => 'Product 6',
                'price' => 90000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'katun',
                'kategori' => 'set',
                'name' => 'Product 7',
                'price' => 110000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'katun',
                'kategori' => 'set',
                'name' => 'Product 8',
                'price' => 130000,
                'rating' => 5,
            ],
            [
                'sub_kategori' => 'sutra',
                'kategori' => 'atasan',
                'name' => 'Product 9',
                'price' => 70000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'sutra',
                'kategori' => 'atasan',
                'name' => 'Product 10',
                'price' => 180000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'sutra',
                'kategori' => 'atasan',
                'name' => 'Product 11',
                'price' => 100000,
                'rating' => 5,
            ],
            [
                'sub_kategori' => 'sutra',
                'kategori' => 'atasan',
                'name' => 'Product 12',
                'price' => 160000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'rayon',
                'kategori' => 'muslim',
                'name' => 'Product 13',
                'price' => 140000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'rayon',
                'kategori' => 'muslim',
                'name' => 'Product 14',
                'price' => 190000,
                'rating' => 2,
            ],
            [
                'sub_kategori' => 'rayon',
                'kategori' => 'muslim',
                'name' => 'Product 15',
                'price' => 170000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'rayon',
                'kategori' => 'muslim',
                'name' => 'Product 16',
                'price' => 120000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'spandek',
                'kategori' => 'aksesoris',
                'name' => 'Product 17',
                'price' => 130000,
                'rating' => 5,
            ],
            [
                'sub_kategori' => 'spandek',
                'kategori' => 'aksesoris',
                'name' => 'Product 18',
                'price' => 100000,
                'rating' => 4,
            ],
            [
                'sub_kategori' => 'spandek',
                'kategori' => 'aksesoris',
                'name' => 'Product 19',
                'price' => 150000,
                'rating' => 3,
            ],
            [
                'sub_kategori' => 'spandek',
                'kategori' => 'aksesoris',
                'name' => 'Product 20',
                'price' => 110000,
                'rating' => 4,
            ],
        ];

        foreach ($product as $value) {
            if ($value['sub_kategori'] == 'flanel') {
                $subCategories[] = $value;
            }
        }
        // dd($subCategories);

        return view('category.subCategory', [
            'categoryName' => $categoryName,
            'accordion' => $accordion,
            'subCategory' => $subCategory,
            'products' => $product,
            'subCategories' => $subCategories,
        ]);
    }
}
