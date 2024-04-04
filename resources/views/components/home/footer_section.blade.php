<footer class="footer p-8 bg-primary text-white shadow-lg">
    <aside class="pl-5 hidden md:flex md:flex-col">
    <a href="/" wire:navigate class="text-6xl font-medium lg:ml-5 sm:ml-3">ALTON
    <div class="pt-2 relative flex items-center">
        <div class="flex-grow border-t border-white"></div>
    </div>
    </a>
      <p class="lg:ml-5 sm:ml-3">Pekalongan, Jawa Tengah<br>Indonesia</p>
    </aside>

    {{-- Accordion --}}
    <div id="accordion-flush-kategori" data-accordion="collapse" data-active-classes="text-white" data-inactive-classes="text-white" class="w-full md:hidden">
      <a class="w-full inline-flex justify-between pb-3 font-medium text-white border-b border-white" data-accordion-target="#accordion-kategori" aria-controls="accordion-kategori">
          <span>KATEGORI</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
      </a>
      <div id="accordion-kategori" class="hidden w-full" aria-labelledby="accordion-flush-kategori">
        <div>
          <p class="mb-3 mt-1 text-white flex flex-col">
            <a href="#" class="py-2 text-xs">Baby & Kids</a>
            <a href="#" class="py-2 text-xs">Set</a>
            <a href="#" class="py-2 text-xs">Atasan</a>
            <a href="#" class="py-2 text-xs">Muslim</a>
            <a href="#" class="py-2 text-xs">Aksesoris</a>
            <a href="#" class="py-2 text-xs">Lainnya</a>
          </p>
        </div>
      </div>
    </div>
    <div id="accordion-flush-informasi" data-accordion="collapse" data-active-classes="text-white" data-inactive-classes="text-white" class="w-full md:hidden">
      <a class="w-full inline-flex justify-between pb-3 font-medium text-white border-b border-white" data-accordion-target="#accordion-informasi" aria-controls="accordion-informasi">
          <span>INFORMASI</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
      </a>
      <div id="accordion-informasi" class="hidden" aria-labelledby="accordion-flush-informasi">
        <div>
          <p class="mb-3 mt-1 text-white flex flex-col">
            <a href="/panduan" wire:navigate class="py-2 text-xs">Panduan</a>
            <a href="/tos" wire:navigate class="py-2 text-xs">Syarat & Ketentuan</a>
            <a href="/privacy-policy" wire:navigate class="py-2 text-xs">Kebijakan Privasi</a>
            <a href="#" wire:navigate class="py-2 text-xs">Tentang kami</a>
            <a href="#" wire:navigate class="py-2 text-xs">FAQ</a>
          </p>
        </div>
      </div>
    </div>
    {{-- end Accordion --}}

    <div class="lg:hidden md:hidden flex w-full mt-5">
      <div class="grow">
        <div class="w-fit">
          <a href="/" wire:navigate class="text-6xl font-medium">ALTON
            <div class="py-2 relative flex items-center">
                <div class="flex-grow border-t border-white"></div>
            </div>
          </a>
          <p>Pekalongan, Jawa Tengah<br>Indonesia</p>
        </div>
      </div>
      <nav class="md:flex md:flex-col">
        <div class="mb-4">
          <a href="#">
            <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#fff]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg>
            </span>
          </a>
        </div>
        <div class="mb-4">
          <a href="#">
            <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#fff]">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 448 512">
                <path
                  d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
              </svg>
            </span>
          </a>
        </div>
        <div>
          <a href="#">
            <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#fff]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
              </svg>
            </span>
          </a>
        </div>
      </nav>
    </div>

    <nav class="pl-3 hidden md:flex md:flex-col">
      <h4 class="font-semibold text-xl">Kategori</h4>
      <a href="#" wire:navigate class="link link-hover">Baby & Kids</a>
      <a href="#" wire:navigate class="link link-hover">Set</a>
      <a href="#" wire:navigate class="link link-hover">Atasan</a>
      <a href="#" wire:navigate class="link link-hover">Muslim</a>
      <a href="#" wire:navigate class="link link-hover">Aksesoris</a>
      <a href="#" wire:navigate class="link link-hover">Lainnya</a>
    </nav> 
    <nav class="hidden md:flex md:flex-col">
      <h4 class="font-semibold text-xl">Informasi</h4> 
      <a href="/panduan" wire:navigate class="link link-hover">Panduan</a>
      <a href="/tos" wire:navigate class="link link-hover">Syarat & Ketentuan</a>
      <a href="/privacy-policy" wire:navigate class="link link-hover">Kebijakan Privasi</a>
      <a href="#" wire:navigate class="link link-hover">Tentang Kami</a>
      <a href="#" wire:navigate class="link link-hover">FAQ</a>
    </nav>
    <nav class="hidden md:flex md:flex-col">
        <div class="mb-3">
          <a href="#">
            <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#fff]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
              </svg>
            </span>
          </a>
        </div>
        <div class="mb-3">
          <a href="#">
            <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#fff]">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 448 512">
                <path
                  d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
              </svg>
            </span>
          </a>
        </div>
        <div>
          <a href="#">
            <span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#fff]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
              </svg>
            </span>
          </a>
        </div>
      </nav> 
    </footer>