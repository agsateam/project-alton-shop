<div class="flex flex-col md:flex-row p-5 md:p-10 mt-5">
    <div class="md:w-[75%] grow">
        {{ $slot }}
    </div>
    <div class="sticky top-[80px] mt-8 md:mt-0 w-full md:w-1/4 md:h-screen md:border-l-4 md:pl-4 md:border-gray-400 hidden md:block">
        <div id="accordion-color-master" data-accordion="open" data-active-classes="bg-primary text-white border-white dark:text-white" data-inactive-classes="text-black border-black">
            {{-- filter --}}
            <button type="button" class="flex items-center justify-between w-full p-3 font-medium border-black text-black border-b" data-accordion-target="#accordion-color" aria-expanded="true" aria-controls="accordion-color">
                <span>Filter</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
            </button>
            <div id="accordion-color" class="hidden" aria-labelledby="accordion-color-master">
                @livewire('category.filter', ['products' => $products])
            </div>
            {{-- end filter --}}

            {{-- category --}}
            <button type="button" class="flex items-center justify-between w-full p-3 font-medium border-black text-black border-b" data-accordion-target="#accordion-color-category" aria-expanded="true" aria-controls="accordion-color-category">
                <span>Category</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
                <div id="accordion-color-category" class="hidden" aria-labelledby="accordion-color-master">
                    <div class="p-2 capitalize">
                        <p class="mb-2 text-black grid gap-3 grid-cols-2">
                            @foreach ($category as $categories)
                            <a href="/category/{{ $categories['slug'] }}" class="{{ request()->getPathInfo() == '/category/'. $categories['slug'] ? 'bg-primary text-white' : 'text-black' }} p-2 text-sm font-medium hover:bg-primary hover:text-white active:bg-primary active:text-white">{{ $categories['categoryName'] }}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            {{-- end category --}}

            {{-- sub category --}}
            <button type="button" class="flex items-center justify-between w-full p-3 font-medium border-black text-black border-b" data-accordion-target="#accordion-color-subCategory" aria-expanded="true" aria-controls="accordion-color-subCategory">
            <span>Sub Category</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
            </button>
            <div id="accordion-color-subCategory" class="hidden" aria-labelledby="accordion-color-master">
                <div class="p-2 capitalize">
                    <p class="mb-2 text-black grid gap-3 grid-cols-2">
                        @foreach ($subCategories as $item)
                        {{-- @dump(request()->fullUrlIs(url('/'. $category . '/' . $item))) --}}
                        <a href="/category/{{ $item['categoryName'] }}/{{ $item['subName'] }}" class="{{ request()->getPathInfo() == '/category/'. $item['categoryName'] . '/' . $item['subName'] ? 'bg-primary text-white' : 'text-black' }} p-2 text-sm font-medium hover:bg-primary hover:text-white active:bg-primary active:text-white">{{ $item['subName'] }}</a>
                        @endforeach
                    </p>
                </div>
            </div>
            {{-- end sub category --}}
        </div>
    </div>
</div>