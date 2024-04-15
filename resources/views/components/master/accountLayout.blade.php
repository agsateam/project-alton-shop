
<div class="mt-8 md:mt-20 w-full md:w-1/4 md:h-screen md:border-l-4 md:pl-4 md:border-gray-400">
    <div class="card w-50 bg-base-100 shadow-md relative">
        <figure class="px-10 pt-30">
          <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" title="Foto Profil" alt="Shoes" class="rounded-l" />
        </figure>
        <div class="card-body items-center text-center">
          <h1 class="card-title"><b>NAMA ANDA</b></h1>
        </div>
    </div>
    <div class="card shadow-md mt-5"><x-sidebar.accountButton href="/riwayat-pribadi" wire:navigate>Riwayat Pribadi</x-sidebar.accountButton></div>
    <div class="card shadow-md mt-3"><x-sidebar.accountButton href="/ubah-password" wire:navigate>Ubah Kata Sandi</x-sidebar.accountButton></div>
    <div class="card shadow-md mt-3"><x-sidebar.accountButton href="/info-pribadi" wire:navigate>Informasi Pribadi</x-sidebar.accountButton></div>
    <div class="card shadow-md mt-8"><a class="btn btn-primary text-white w-full mb-1 md:mb-0 md:my-2 text-start justify text-xs md:text-base hover:bg-white hover:text-black" href="/logout" wire:navigate>Log Out</a class=""></div> 
</div>