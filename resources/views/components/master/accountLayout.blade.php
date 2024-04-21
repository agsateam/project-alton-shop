<div class="md:flex md:flex-row md:space-x-4 p-1 md:p-5 mt-2">
  <div class="relative mt-0 md:mt-5 w-full md:w-1/4 md:h-screen md:pl-4">
      <div class="card w-50 bg-base-100 shadow-md relative">
          <figure class="px-5 pt-2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNWQQdRQ1JIuiKNvTqBukJH4WugmOWF7A_-w&s" title="Foto Profil" alt="Photo" class="rounded-xl" style="width: 200px; height: 200px;" />
          </figure>
          <div class="card-body items-center text-center">
            <h1 class="card-title">
              <b>NAMA ANDA</b>
              {{-- <b>{{ auth()->user()->name }}</b> --}}
            </h1>
          </div>
      </div>
      <div class="card shadow-md mt-5"><x-sidebar.accountButton href="/riwayat-pribadi" wire:navigate>Riwayat Pribadi</x-sidebar.accountButton></div>
      <div class="card shadow-md mt-1"><x-sidebar.accountButton href="/ubah-password" wire:navigate>Ubah Kata Sandi</x-sidebar.accountButton></div>
      <div class="card shadow-md mt-1"><x-sidebar.accountButton href="/info-pribadi" wire:navigate>Informasi Pribadi</x-sidebar.accountButton></div>
      <div class="hidden md:block card shadow-md mt-4 md:mt-8 md:flex-col"><a class="btn btn-primary text-white w-full mb-1 md:mb-0 md:mt-2 text-start justify text-xs md:text-base hover:bg-white hover:text-black" href="/logout" wire:navigate>Log Out</a class=""></div>
  </div>
  <div class="flex flex-col w-full md:flex-row md:p-2 mt-2">
      {{ $slot }}
  </div>
  <div class="md:hidden card shadow-md mt-4 md:mt-8 md:flex-col"><a class="btn btn-primary text-white w-full mb-1 md:mb-0 md:mt-2 text-start justify text-xs md:text-base hover:bg-white hover:text-black" href="/logout" wire:navigate>Log Out</a class=""></div>
</div>

