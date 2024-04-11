<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $images = [
            "https://down-id.img.susercontent.com/file/id-11134207-7r990-lq8sagk24tume5",
            "https://down-id.img.susercontent.com/file/id-11134201-23030-s6ak6mlipsov24",
            "https://down-id.img.susercontent.com/file/id-11134207-7qul7-lhr78ni1btm1dc",
        ];

        $product = [
            'product_id' => 'PRD0001',
            'name' => 'Kemeja Lengan Panjang Navi Kotak-Kotak Jokowi',
            'price' => 124000,
            'sizes' => ['S', 'M', 'L', 'XL'],
            'stock' => [
                'S' => 15,
                'M' => 3,
                'L' => 5,
                'XL' => 6,
            ],
            'sizeChartImage' => 'https://cdn.shopify.com/s/files/1/0605/5231/5110/files/6acd0c4e1f946834c6d5d2021b265de9_700x_be925a62-624c-4123-89f6-e087f0316981_480x480.jpg',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A obcaecati perspiciatis recusandae modi. Dolorem quae ullam iure labore veniam ducimus quidem voluptates maiores, perspiciatis dolores! Id cumque sunt exercitationem maxime? Amet, minus! Tempora, vitae. Repudiandae velit vitae rerum? Dolorum odio optio unde perspiciatis recusandae saepe beatae,
            autem possimus eius esse commodi vitae in deserunt debitis, voluptates, cum sit inventore magni modi mollitia sequi. Voluptates commodi earum alias itaque error doloribus dolore. Eius ipsa rem quis ex atque. Aliquid possimus perferendis dolorem id, dicta porro sit, libero laborum laboriosam, reiciendis odio dolor nam eum alias odit.
            Excepturi rem ut aliquam rerum suscipit iste esse voluptas harum recusandae soluta minus impedit aspernatur nulla illo officiis, voluptates error! Corporis, minima deserunt beatae reiciendis voluptate error incidunt officia odio consectetur dicta illo ratione, odit hic, facilis unde repudiandae laboriosam rerum accusantium veritatis ut eligendi? Fugiat quo eius aliquid obcaecati nisi, mollitia ad? Nisi, autem. Inventore reprehenderit cupiditate omnis, accusantium ipsam tenetur consequatur temporibus, minus eum libero accusamus placeat expedita eaque cumque ipsum aut aliquid. Accusantium quasi voluptas ea earum vitae consectetur eaque voluptate perferendis molestias quibusdam distinctio corporis sunt, neque, adipisci laboriosam consequuntur, rem beatae in doloribus sapiente blanditiis reiciendis nostrum dolores. Earum, exercitationem?",
        ];

        return view('productDetail', [
            'product' => $product,
            'images' => $images
        ]);
    }
}
