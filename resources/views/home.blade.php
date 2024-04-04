<x-master.main/>
<body data-theme="{{ $theme }}" class="antialiased font-sans">
  <header class="sticky top-0 z-50">
      <x-home.navbar/>
  </header>
  <main class="relative">
  <x-home.slider/>
  
  {{-- Promo --}}
    <x-home.promoSection/>
    <x-home.productSection/>
    
  </main>
<x-master.footer/>
