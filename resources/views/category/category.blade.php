<x-landing-layout>
    <x-master.categoryLayout :accordions="$accordion" :subCategories="$subCategory" :products="$products" :categoryName="$categoryName">

        <span class="flex flex-row">
            <h1 class="text-3xl lg:text-5xl mb-5">
                {{ $categoryName }}
            </h1>
            <div class="w-full text-right mt-3 block md:hidden">
                <!-- drawer init and toggle -->
                <a wire:click class="px-4 py-2 rounded-sm bg-primary text-white cursor-pointer" data-drawer-target="drawer-cart-filter" data-drawer-show="drawer-cart-filter" data-drawer-placement="right" aria-controls="drawer-cart-filter">Filter</a>
            </div>
        </span>

        {{-- content category --}}
        <div class="scroll-smooth">
            {{-- Cards Products --}}
            <div class="flex flex-wrap justify-between md:mr-5">
                @foreach($products as $product)
                <a href="/product/asas" class="w-[48%] sm:w-[30%] lg:w-[23%]" wire:navigate>
                <div class="card_product drop-shadow-md mb-5">
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
                        <div class="text-price font-medium text-sm px-2 mt-2 md:text-xs md:mt-0">{{ $product['price'] }}</div>
                    </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
            {{-- End Of Cards Products --}}
        </div>
        {{-- end content category --}}
    </x-master.categoryLayout>
    @livewire('category.sidebar')

    <script>
        const checkbox = document.querySelectorAll('input[type="checkbox"]');
        checkbox.forEach((item) => {
            item.addEventListener('change', function() {
                    console.log('checked');
            });
        }); 

        var min_rupiah = document.getElementById('h-min');
        var max_rupiah = document.getElementById('h-max');
        min_rupiah.addEventListener('keyup', function(e){
            min_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });
        max_rupiah.addEventListener('keyup', function(e){
            max_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        function formatRupiah(angka, prefix)
        {
            var number_string   = angka.replace(/[^,\d]/g, '').toString(),
            split               = number_string.split(','),
            sisa                = split[0].length % 3,
            rupiah              = split[0].substr(0, sisa),
            ribuan              = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
</x-landing-layout>