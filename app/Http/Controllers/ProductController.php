<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $images = [
            "https://d.rapidcdn.app/snapinsta?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1cmwiOiJodHRwczovL3Njb250ZW50LmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMjkzNTAtMTUvMzk3MzgxODMwXzExODAzNzM0OTYyNTIxNjNfNDg5NDgxNTUzNDg5MjE0OTQ5OF9uLmpwZz9zdHA9ZHN0LWpwZ19lMzVfczY0MHg2NDBfc2gwLjA4JmVmZz1leUoyWlc1amIyUmxYM1JoWnlJNkltbHRZV2RsWDNWeWJHZGxiaTR4TkRRd2VERTBOREF1YzJSeUluMCZfbmNfaHQ9c2NvbnRlbnQuY2RuaW5zdGFncmFtLmNvbSZfbmNfY2F0PTEwNyZfbmNfb2hjPTUzRXZEZzIyMEtvQWI0SDRIWkkmZWRtPUFQczE3Q1VCQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQVFiVjVYNTZod3pBcUFJZ1dkRnFTSzItdU1NeFFlN3gtSExiUXRHNWNXVmcmb2U9NjYxNUM4NUUmX25jX3NpZD0xMGQxM2IiLCJmaWxlbmFtZSI6IlNuYXBpbnN0YS5hcHBfdGh1bWJfMzk3MzgxODMwXzExODAzNzM0OTYyNTIxNjNfNDg5NDgxNTUzNDg5MjE0OTQ5OF9uLmpwZyJ9.POzZ0O8nq-kVxkQ_1COpYjNXWyg-uaFWV6jChi0eZHo",
            "https://d.rapidcdn.app/snapinsta?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1cmwiOiJodHRwczovL3Njb250ZW50LmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMjkzNTAtMTUvMzk4MTMxNzMxXzI1OTk4OTM4MjM1MzcwMzBfMTc1NjUyMzAzNzY2NjIwNTU2Nl9uLmpwZz9zdHA9ZHN0LWpwZ19lMzVfczY0MHg2NDBfc2gwLjA4JmVmZz1leUoyWlc1amIyUmxYM1JoWnlJNkltbHRZV2RsWDNWeWJHZGxiaTR4TkRRd2VERTBOREF1YzJSeUluMCZfbmNfaHQ9c2NvbnRlbnQuY2RuaW5zdGFncmFtLmNvbSZfbmNfY2F0PTExMCZfbmNfb2hjPTZGcXhIU1RkRWhVQWI0bkdKRzkmZWRtPUFQczE3Q1VCQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQ2JrdVdnaDZaVDF1Mjd4Q3ZYUWRxU3doc2VVd09Ed25nX1JSTWZsRGpGeUEmb2U9NjYxNURFNTEmX25jX3NpZD0xMGQxM2IiLCJmaWxlbmFtZSI6IlNuYXBpbnN0YS5hcHBfdGh1bWJfMzk4MTMxNzMxXzI1OTk4OTM4MjM1MzcwMzBfMTc1NjUyMzAzNzY2NjIwNTU2Nl9uLmpwZyJ9.57GDy4MdE4loNzQU1LF4RKoeh6ywDjcpHEyMUK7-IQ8",
            "https://d.rapidcdn.app/snapinsta?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1cmwiOiJodHRwczovL3Njb250ZW50LmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMjkzNTAtMTUvMzk3MzUyNzkzXzg5NjM2MTAzMTM5MjE2NF81MDYyNDg4ODU2MTQzNTI0NTEzX24uanBnP3N0cD1kc3QtanBnX2UzNV9zNjQweDY0MF9zaDAuMDgmZWZnPWV5SjJaVzVqYjJSbFgzUmhaeUk2SW1sdFlXZGxYM1Z5YkdkbGJpNHhORFF3ZURFME5EQXVjMlJ5SW4wJl9uY19odD1zY29udGVudC5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTA4Jl9uY19vaGM9RVZ2S1RlS1hBemtBYjdFcURxeCZlZG09QVBzMTdDVUJBQUFBJmNjYj03LTUmb2g9MDBfQWZBd3hZdklkWHh4ZUdFRWNzVHhRYmZKTElqc0pVQzQxeGs3WmxzN0lhaGhlZyZvZT02NjE1Q0JDQSZfbmNfc2lkPTEwZDEzYiIsImZpbGVuYW1lIjoiU25hcGluc3RhLmFwcF90aHVtYl8zOTczNTI3OTNfODk2MzYxMDMxMzkyMTY0XzUwNjI0ODg4NTYxNDM1MjQ1MTNfbi5qcGcifQ.0I_55ecqMQPWM4vxCslwa9Ztnl_OOSuMp2esIka3tGM",
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
