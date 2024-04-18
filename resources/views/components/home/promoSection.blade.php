{{-- Data Dummy --}}
<?php
$produk = array(
    (object) array(
        'nama' => 'Tas Ransel',
        'harga_asli' => 'Rp 100.000',
        'harga_promo' => 'Rp 50.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Sepatu Sneakers',
        'harga_asli' => 'Rp 200.000',
        'harga_promo' => 'Rp 150.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Kemeja Pria',
        'harga_asli' => 'Rp 120.000',
        'harga_promo' => 'Rp 80.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Kacamata Hitam',
        'harga_asli' => 'Rp 50.000',
        'harga_promo' => 'Rp 30.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Baju Kaos',
        'harga_asli' => 'Rp 80.000',
        'harga_promo' => 'Rp 60.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Topi Snapback',
        'harga_asli' => 'Rp 40.000',
        'harga_promo' => 'Rp 25.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Dompet Wanita',
        'harga_asli' => 'Rp 90.000',
        'harga_promo' => 'Rp 70.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Celana Jeans',
        'harga_asli' => 'Rp 150.000',
        'harga_promo' => 'Rp 100.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Earphone',
        'harga_asli' => 'Rp 30.000',
        'harga_promo' => 'Rp 20.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    ),
    (object) array(
        'nama' => 'Gelang Perak',
        'harga_asli' => 'Rp 70.000',
        'harga_promo' => 'Rp 45.000',
        'gambar' => 'https://i.pinimg.com/564x/5f/03/37/5f03371f957c6b91078912d9b58bb4e7.jpg'
    )
);
?>
{{-- End of Data Dummy--}}

<div class="w-full bg-primary text-white px-3 py-10 lg:py-16">
  <div class="text-center font-bold text-3xl mt-2">DISCOUNT PRODUCT</div>
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper py-4 mx-auto">
      <!-- Slides -->
      @foreach($produk as $item)
      <a href="/product/asaa">
        <div class="swiper-slide text-black text-center flex">
        <img class="card-img" src="{{ $item->gambar }}" alt="">
        <div class="text-product p-1 flex flex-col justify-start">
          <div class="nama-produk font-medium text-base">{{ $item->nama }}</div>
          <div class="harga-asli font-light text-xs text-price line-through">{{ $item->harga_asli }}</div>
          <div class="harga-promo text-price font-medium text-sm">{{ $item->harga_promo }}</div>
        </div>
      </a>
    </div>
      @endforeach
      {{-- End Slides --}}
     
    </div>
    <!-- If we need pagination -->
    {{-- <div class="swiper-pagination"></div> --}}
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
</div>


