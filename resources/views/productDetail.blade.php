<x-landing-layout>
    
    <div class="py-6 px-5 lg:px-20">

        {{-- photo & product detail --}}
        <div class="grid grid-cols-1 md:grid-cols-2">
            @livewire('product.images', ['images' => $images])
            @livewire('product.data-checkout', ['product' => $product])
        </div>

        {{-- desc & size chart --}}
        <div class="mt-8">
            <ul class="flex flex-wrap w-full justify-center text-md font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-10" role="presentation">
                    <button class="inline-block p-4 border-b-2 text-primary font-semibold" id="desc-tab" data-tabs-target="#desc" type="button" role="tab" aria-controls="desc" aria-selected="false">Deskripsi</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 text-primary font-semibold hover:text-secondary hover:border-gray-300" id="size-tab" data-tabs-target="#size" type="button" role="tab" aria-controls="size" aria-selected="false">Size</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden mb-16" id="desc" role="tabpanel" aria-labelledby="desc-tab">
                <p class="text-md text-gray-500 whitespace-pre-line">
                    {{ $product['description'] }}
                </p>
            </div>
            <div class="hidden p-4" id="size" role="tabpanel" aria-labelledby="size-tab">
                <div class="w-full flex justify-center">
                    <img src="{{ $product['sizeChartImage'] }}">
                </div>
            </div>
        </div>

    </div>

</x-landing-layout>