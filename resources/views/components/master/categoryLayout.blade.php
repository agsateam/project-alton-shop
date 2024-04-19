<div class="flex flex-col md:flex-row p-5 md:p-10 mt-5">
    <div class="md:w-[75%] grow">
        
        {{ $slot }}

    </div>
    <div class="mt-8 md:mt-0 w-full md:w-1/4 md:h-screen md:border-l-4 md:pl-4 md:border-gray-400">
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
                                <a href="/{{ $item }}" class="{{ request()->is($item) ? 'active' : '' }} p-2 text-sm font-medium hover:bg-primary hover:text-white active:bg-primary active:text-white">{{ $item }}</a>
                                @endforeach
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach
            <button type="button" class="flex items-center justify-between w-full p-3 font-medium border-black text-black border-b" data-accordion-target="#accordion-color" aria-expanded="true" aria-controls="accordion-color">
            <span>Rentang Harga</span>
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

<!-- drawer init and toggle -->
<div class="text-center">
    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
    Sort By
    </button>
 </div>
 
 <!-- drawer component -->
 <div id="drawer-right-example" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-right-label">
     <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
     <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
   </svg>Right drawer</h5>
    <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
       <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
       </svg>
       <span class="sr-only">Close menu</span>
    </button>
    <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">Supercharge your hiring by taking advantage of our <a href="#" class="text-blue-600 underline font-medium dark:text-blue-500 hover:no-underline">limited-time sale</a> for Flowbite Docs + Job Board. Unlimited access to over 190K top-ranked candidates and the #1 design job board.</p>
    <div class="grid grid-cols-2 gap-4">
       <a href="#" class="px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Learn more</a>
       <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get access <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
   </svg></a>
    </div>
 </div>
 