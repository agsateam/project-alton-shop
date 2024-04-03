<x-master.main/>
<body data-theme="{{ $theme }}" class="antialiased font-sans">
  <header class="sticky top-0 z-50">
      <x-home.navbar/>
  </header>
  <main class="relative">
  <x-home.slider/>

    <x-home.promoSection/>

    {{-- Promo --}}
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content text-center">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">Hello there</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            <button class="btn btn-primary">Get Started</button>
          </div>
        </div>
    </div>
  </main>
<x-master.footer/>