<?php
// Data Dummy Product
$products = [
    [
        'name' => 'Product 1',
        'price' => 'Rp 100.000,00',
        'rating' => 4,
    ],
    [
        'name' => 'Product 2',
        'price' => 'Rp 150.000,00',
        'rating' => 3,
    ],
    [
        'name' => 'Product 3',
        'price' => 'Rp 120.000,00',
        'rating' => 5,
    ],
    [
        'name' => 'Product 4',
        'price' => 'Rp 80.000,00',
        'rating' => 2,
    ],
    [
        'name' => 'Product 5',
        'price' => 'Rp 200.000,00',
        'rating' => 4,
    ],
    [
        'name' => 'Product 6',
        'price' => 'Rp 90.000,00',
        'rating' => 3,
    ],
    [
        'name' => 'Product 7',
        'price' => 'Rp 110.000,00',
        'rating' => 4,
    ],
    [
        'name' => 'Product 8',
        'price' => 'Rp 130.000,00',
        'rating' => 5,
    ],
    [
        'name' => 'Product 9',
        'price' => 'Rp 70.000,00',
        'rating' => 3,
    ],
    [
        'name' => 'Product 10',
        'price' => 'Rp 180.000,00',
        'rating' => 4,
    ],
    [
        'name' => 'Product 11',
        'price' => 'Rp 100.000,00',
        'rating' => 5,
    ],
    [
        'name' => 'Product 12',
        'price' => 'Rp 160.000,00',
        'rating' => 3,
    ],
    [
        'name' => 'Product 13',
        'price' => 'Rp 140.000,00',
        'rating' => 4,
    ],
    [
        'name' => 'Product 14',
        'price' => 'Rp 190.000,00',
        'rating' => 2,
    ],
    [
        'name' => 'Product 15',
        'price' => 'Rp 170.000,00',
        'rating' => 4,
    ],
    [
        'name' => 'Product 16',
        'price' => 'Rp 120.000,00',
        'rating' => 3,
    ],
    [
        'name' => 'Product 17',
        'price' => 'Rp 130.000,00',
        'rating' => 5,
    ],
    [
        'name' => 'Product 18',
        'price' => 'Rp 100.000,00',
        'rating' => 4,
    ],
    [
        'name' => 'Product 19',
        'price' => 'Rp 150.000,00',
        'rating' => 3,
    ],
    [
        'name' => 'Product 20',
        'price' => 'Rp 110.000,00',
        'rating' => 4,
    ],
];
?>

<div class="product_section px-4 sm:px-8 py-8">
  <div class="text-center font-bold text-3xl py-8">OUR PRODUCT</div>
  {{-- Cards Products --}}
  <div class="cards_products_section flex flex-wrap gap-5 md:gap-12 justify-center">
    @foreach($products as $product)
    <a href="/product/asas" wire:navigate>
      <div class="card_product w-[150px] sm:w-[170px] md:w-[250px] drop-shadow-md">
        <img src="https://i.pinimg.com/564x/91/53/77/915377ae07969319fea5bc55d3422b0e.jpg" alt="Gambar Produk">
        <div class="ket_product flex flex-col justify-around">
          <div class="product_name text-md md:text-xl font-normal px-2">{{ $product['name'] }}</div>
          <div class="ket2 flex flex-col md:flex-row justify-between">
            {{-- Rating --}}
            <div class="flex items-center px-2">
                @for ($i = 0; $i < $product['rating']; $i++)
                  <svg class="w-3 h-3 sm:w-4 sm:h-4 text-neutral-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                @endfor
                @for ($i = 0; $i < 5 - $product['rating']; $i++)
                  <svg class="w-3 h-3 sm:w-4 sm:h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                  </svg>
                @endfor
              </div>
            {{-- End Rating --}}
            <div class="text-price font-medium text-sm px-2 mt-2 md:mt-0">{{ $product['price'] }}</div>
          </div>
        </div>
      </div>
    </a>
    @endforeach
    <div class="btn-more w-full flex justify-center">
        <button class="bg-primary px-12 py-2 text-white font-medium">More</button>
    </div>
  </div>
  {{-- End Of Cards Products --}}
</div>