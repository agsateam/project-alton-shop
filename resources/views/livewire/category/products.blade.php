{{-- content category --}}
<div class="scroll-smooth">
    {{-- Cards Products --}}
    <div class="flex flex-wrap justify-between md:justify-start">
        @if (count($products) == 0)
            <p class="text-xl mt-10 mb-52 md:mb-10 inline-flex flex-col items-center w-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32" viewBox="0 0 128 128">
                    <path d="M15,109.8l48,17c0,0,0,0,0,0c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.5,0.1,0.7,0.1c0.2,0,0.3,0,0.5,0c0,0,0,0,0,0c0,0,0,0,0.1,0 c0.1,0,0.3-0.1,0.4-0.1c0,0,0,0,0,0l48-17c1.2-0.4,2-1.6,2-2.8V73.4l10-3.5c0.8-0.3,1.5-1,1.8-1.8s0.2-1.8-0.3-2.6l-12-20 c0,0-0.1-0.1-0.1-0.1c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0-0.1c-0.1-0.1-0.1-0.1-0.2-0.2 c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1,0c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.1-0.1-0.2-0.1 c0,0,0,0,0,0c0,0,0,0,0,0l-48-17c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c0,0,0,0,0,0 c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.4,0c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0.1-0.5,0.1l-48,17 c-0.2,0.1-0.3,0.1-0.5,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.1-0.3,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.1-0.2,0.2 c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.2,0.2c0,0,0,0.1-0.1,0.1l-12,20c-0.7,1.1-0.6,2.5,0.2,3.4C2.3,69.6,3.1,70,4,70 c0.3,0,0.7-0.1,1-0.2l8-2.8v40C13,108.3,13.8,109.4,15,109.8z M119.5,65.4l-42.2,15l-8.9-14.8l42.2-15L119.5,65.4z M67,34.2L103,47 L67,59.8V34.2z M67,74.8l6.4,10.7C74,86.5,75,87,76,87c0.3,0,0.7-0.1,1-0.2l32-11.3v29.4l-42,14.9V74.8z M19,51.2l42,14.9v53.6 l-42-14.9V51.2z"></path>
                </svg>
                <span class="mt-5">
                    Belum ada produk.
                </span>
            </p>
        @endif
        @foreach($products as $product)
        <a href="/product/{{ $product['product_id'] }}" class="w-[48%] sm:w-[30%] lg:w-[23%] mr-0 md:mr-4" wire:navigate>
            <div class="card_product border border-gray-300 drop-shadow-md mb-5">
                <img src="https://i.pinimg.com/564x/91/53/77/915377ae07969319fea5bc55d3422b0e.jpg" alt="Gambar Produk"/>
                <div class="ket_product bg-white flex flex-col justify-around">
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
                        <div class="text-price font-medium text-sm px-2 mt-2 md:text-xs md:mt-0">@toRupiah($product['price'])</div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    {{-- End Of Cards Products --}}
</div>
{{-- end content category --}}