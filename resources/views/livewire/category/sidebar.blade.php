<!-- drawer component -->
<div id="drawer-cart-filter" class="fixed top-0 right-0 z-50 flex flex-col h-screen overflow-y-auto transition-transform {{ $isHideDrawer ? 'translate-x-full' : 'transform-none' }} w-3/4 sm:w-[500px] bg-white" tabindex="-1" aria-labelledby="drawer-cart-filter-label">    
    <div class="overflow-auto pt-10 px-3 sm:pb-10">
        <ul class="space-y-2 font-medium">
            <li>
                <button type="button" class="flex items-center w-full p-2 border-b border-black text-base text-black transition duration-75 group bg-gray-50 hover:bg-primary hover:text-white" aria-controls="dropdown-filter-price" data-collapse-toggle="dropdown-filter-price" aria-expanded="true">
                    <span class="flex-1 text-left font-bold">Filter</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <div id="dropdown-filter-price" class="py-2 space -y-2">
                    @livewire('category.filter')
                </div>
            </li>
            <li>
               <button type="button" class="flex items-center w-full p-2 border-b border-black text-base text-black transition duration-75 group bg-gray-50 hover:bg-primary hover:text-white" aria-controls="dropdown-filter-category" data-collapse-toggle="dropdown-filter-category" aria-expanded="true">
                    <span class="flex-1 text-left font-bold">Category</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
               </button>
               <ul id="dropdown-filter-category" class="py-2 space-y-2">
                    <li class="grid gap-1 grid-cols-2 capitalize">
                        @foreach ($categories as $category)
                            <a href="/category/{{ $category['slug'] }}" wire:navigate class="{{ str_contains(request()->getPathInfo(), '/category/' . $category['slug']) ? 'text-secondary border border-primary' : 'text-black' }} p-2 text-sm font-medium hover:bg-primary hover:text-white active:bg-primary active:text-white">{{ $category['categoryName'] }}</a>
                        @endforeach
                    </li>
               </ul>
            </li>
            <li>
               <button type="button" class="flex items-center w-full p-2 border-b border-black text-base text-black transition duration-75 group bg-gray-50 hover:bg-primary hover:text-white" aria-controls="dropdown-filter-subcategory" data-collapse-toggle="dropdown-filter-subcategory" aria-expanded="true">
                    <span class="flex-1 text-left font-bold">Sub Category</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
               </button>
               <ul id="dropdown-filter-subcategory" class="py-2 space-y-2">
                    <li class="grid gap-1 grid-cols-2 capitalize">
                        @foreach ($categories->where('slug', $slug[2])->first()->subCategory()->get() as $item)
                            <a href="/category/{{ $slug[2] }}/{{ $item['slug'] }}" class="{{ request()->getPathInfo() == '/category/'. $slug[2] . '/' . $item['slug'] ? 'text-secondary border border-primary' : 'text-black' }} p-2 text-sm font-medium hover:bg-primary hover:text-white active:bg-primary active:text-white">{{ $item['subName'] }}</a>
                        @endforeach
                    </li>
               </ul>
            </li>
        </ul>
    </div>
</div>