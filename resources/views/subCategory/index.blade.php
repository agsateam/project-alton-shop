<x-landing-layout>
    <x-master.categoryLayout :accordions="$accordion" :subCategories="$subCategory" :products="$products">

        <h1 class="text-3xl lg:text-5xl mb-5">
            Flanel
            <div class="w-max text-left">
                <nav aria-label="breadcrumb">
                  <ol class="flex w-full flex-wrap items-center rounded-md bg-blue-gray-50 bg-opacity-60 mt-2">
                    <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-primary">
                      <a class="opacity-60" href="/atasan">
                        <span>Atasan</span>
                      </a>
                      <span class="pointer-events-none mx-2 select-none font-sans text-sm font-normal leading-normal text-blue-gray-500 antialiased">
                        /
                      </span>
                    </li>
                    <li class="flex cursor-pointer items-center font-sans text-sm font-normal leading-normal text-blue-gray-900 antialiased transition-colors duration-300 hover:text-primary">
                      <a
                        class="font-medium text-blue-gray-900 transition-colors hover:text-primary"
                        href="/flanel"
                      >
                        Flanel
                      </a>
                    </li>
                  </ol>
                </nav>
            </div>
        </h1>

        {{-- content category --}}
        <div class="md:pr-5 md:py-5 scroll-smooth">
            {{-- Cards Products --}}
            <div class="cards_products_section flex flex-wrap gap-5 md:gap-12 justify-center">
                @foreach($subCategories as $sub)
                <a href="/product/asas" wire:navigate>
                <div class="card_product w-[150px] sm:w-[170px] md:w-[200px] drop-shadow-md">
                    <img src="https://i.pinimg.com/564x/91/53/77/915377ae07969319fea5bc55d3422b0e.jpg" alt="Gambar Produk">
                    <div class="ket_product flex flex-col justify-around">
                    <div class="product_name text-md md:text-xl font-normal px-2">{{ $sub['name'] }}</div>
                    <div class="ket2 flex flex-col md:flex-row justify-between">
                        {{-- Rating --}}
                        <div class="flex items-center px-2">
                            @for ($i = 0; $i < $sub['rating']; $i++)
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-neutral-950" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            @endfor
                            @for ($i = 0; $i < 5 - $sub['rating']; $i++)
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            @endfor
                        </div>
                        {{-- End Rating --}}
                        <div class="text-price font-medium text-sm px-2 mt-2 md:text-xs md:mt-0">{{ $sub['price'] }}</div>
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