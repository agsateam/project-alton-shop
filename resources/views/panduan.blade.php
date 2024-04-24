<?php 
$panduan = array(
    array(
        'no' => '1',
        'judul' => 'Cara Membeli',
        'konten' => 'Pilih produk yang ingin dibeli, lalu klik tombol "Beli Sekarang".'
    ),
    array(
        'no' => '2',
        'judul' => 'Cara Pembayaran',
        'konten' => 'Pilih metode pembayaran yang diinginkan, lalu ikuti petunjuk selanjutnya.'
    ),
    array(
        'no' => '3',
        'judul' => 'Cara Pengiriman',
        'konten' => 'Pilih metode pengiriman yang diinginkan, lalu ikuti petunjuk selanjutnya.'
    ),
)
?>

<x-landing-layout>
    <x-master.infoLayout>

        <h1 class="text-3xl lg:text-5xl mb-5">
            Panduan
        </h1>

        {{-- content accordion --}}
        <div class="md:pr-5 md:py-5">
            <div id="accordion-collapse" data-accordion="collapse">
                @foreach ($panduan as $item)
                <h2 id="accordion-collapse-heading-{{ $item["no"] }}">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 rounded-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-{{ $item["no"] }}" aria-expanded="false" aria-controls="accordion-collapse-body-{{ $item["no"] }}">
                        <span class="flex items-center">
                        <h2 class="mr-2 h-8 w-8 bg-primary grid place-items-center text-white rounded-full">{{ $item["no"] }}</h2>
                        <h3>{{ $item["judul"] }}</h3>
                        </span>
                        <svg data-accordion-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 rotate-180 accordion-icons">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-{{ $item["no"] }}" class="accordion-content hidden" aria-labelledby="accordion-collapse-heading-{{ $item["no"] }}">
                    <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $item["konten"] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- end content accordion --}}

        <script>
            //panduan
            const acccordincontent = document.querySelectorAll(".accordion-content");
            const accordionicons = document.querySelectorAll(".accordion-icons");
            document.addEventListener("click", function () {
                acccordincontent.forEach((content, index) => {
                    if (content.classList.contains("hidden")) {
                        accordionicons[index].classList.remove("rotate-45");
                    } else {
                        accordionicons[index].classList.add("rotate-45");
                    }
                });
            });
        </script>
        
    </x-master.infoLayout>
</x-landing-layout>