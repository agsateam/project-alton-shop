<?php 
$slider = [
  'https://im.uniqlo.com/global-cms/spa/resafc09f183c5abe8120d883e3592d7b61fr.jpg',
  'https://im.uniqlo.com/global-cms/spa/res48cc4659e4a72d275c46af47c9fc5602fr.jpg',
  'https://im.uniqlo.com/global-cms/spa/res6b38dad893eb760f5f1a39cb09807494fr.jpg'
];

$last = count($slider);
?>

{{-- Daisy Carousel --}}
{{-- <div class="carousel w-full">
  @foreach ($slider as $i => $item)
  <div id="slide-{{ $i+1 }}" class="carousel-item relative w-full">
    <img src="{{ $item }}" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide-{{ $i == 0 ? $last : $i }}" class="btn btn-circle text-black bg-white">❮</a> 
      <a href="#slide-{{ $i == $last-1 ? 1 : $i+2 }}" class="btn btn-circle text-black bg-white">❯</a>
    </div>
  </div>
  @endforeach
</div> --}}


{{-- Flowbite Carousel --}}
<div id="default-carousel" class="relative w-full" data-carousel="slide">
  <div class="relative h-40 overflow-hidden sm:h-64 md:h-96">
      @foreach($slider as $item)
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ $item }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      @endforeach
  </div>
  <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
      </span>
  </button>
  <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
      </span>
  </button>
</div>