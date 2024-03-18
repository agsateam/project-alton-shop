<?php 
$slider = [
  'https://im.uniqlo.com/global-cms/spa/resafc09f183c5abe8120d883e3592d7b61fr.jpg',
  'https://im.uniqlo.com/global-cms/spa/res48cc4659e4a72d275c46af47c9fc5602fr.jpg',
  'https://im.uniqlo.com/global-cms/spa/res6b38dad893eb760f5f1a39cb09807494fr.jpg'
];

$last = count($slider);
?>

<div class="carousel w-full">
  @foreach ($slider as $i => $item)
  <div id="slide-{{ $i+1 }}" class="carousel-item relative w-full">
    <img src="{{ $item }}" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide-{{ $i == 0 ? $last : $i }}" class="btn btn-circle text-black bg-white">❮</a> 
      <a href="#slide-{{ $i == $last-1 ? 1 : $i+2 }}" class="btn btn-circle text-black bg-white">❯</a>
    </div>
  </div>
  @endforeach
</div>