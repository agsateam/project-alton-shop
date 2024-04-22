<div class="flex flex-col md:flex-row p-5 md:p-10 mt-5">
    <div class="md:w-[75%] grow">
        {{ $slot }}
    </div>
    <div class="sticky top-[80px] mt-8 md:mt-0 w-full md:w-1/4 md:h-screen md:border-l-4 md:pl-4 md:border-gray-400 hidden md:block">
        <div id="accordion-color-master" data-accordion="open" data-active-classes="bg-primary text-white border-white dark:text-white" data-inactive-classes="text-black border-black">
            @forEach ($accordions as $index)
                <button type="button" class="flex items-center justify-between w-full p-3 font-medium border-black text-black border-b" data-accordion-target="#accordion-color-{{ $index['no'] }}" aria-expanded="true" aria-controls="accordion-color-{{ $index['no'] }}">
                <span>{{ $index['name'] }}</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
                <div id="accordion-color-{{ $index['no'] }}" class="hidden" aria-labelledby="accordion-color-master">
                    <div class="p-2 capitalize">
                        <p class="mb-2 text-black grid gap-3 grid-cols-2">
                            @if ($index['no'] == 2)
                                {{-- @foreach ($category as $item)
                                <a href="#" class="p-2 text-sm hover:bg-primary hover:text-white">{{ $item['name_category'] }}</a>
                                @endforeach
                            @else --}}
                                @foreach ($subCategories as $item)
                                {{-- iki ngko ganti /categoryName/subCategoryName --}}
                                {{-- @dump(request()->fullUrlIs(url('/'. $categoryName . '/' . $item))) --}}
                                <a href="/category/{{ $categoryName }}/{{ $item }}" class="{{ request()->getPathInfo() == '/category/'. $categoryName . '/' . $item ? 'bg-primary text-white' : 'text-black' }} p-2 text-sm font-medium hover:bg-primary hover:text-white active:bg-primary active:text-white">{{ $item }}</a>
                                @endforeach
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach
            <button type="button" class="flex items-center justify-between w-full p-3 font-medium border-black text-black border-b" data-accordion-target="#accordion-color" aria-expanded="true" aria-controls="accordion-color">
            <span>Filter</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
            </button>
            <div id="accordion-color" class="hidden" aria-labelledby="accordion-color-master">
                @livewire('category.filter', ['products' => $products])
            </div>
        </div>
    </div>
</div>