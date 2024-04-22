<div class="md:flex md:flex-row md:space-x-4 p-1 md:p-5 mt-2">
  <div class="relative mt-0 md:mt-5 w-full md:w-1/4 md:h-screen md:pl-4">
      <div class="card w-50 bg-base-100 shadow-md relative">
          <figure class="px-5 pt-2">
            <div class="avatar relative group/item">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNWQQdRQ1JIuiKNvTqBukJH4WugmOWF7A_-w&s" title="Foto Profil" alt="Photo" class="rounded-full" style="width: 200px; height: 200px;" />
              <button class="group/edit invisible group-hover/item:visible btn btn-square btn-ghost mr-1 -bottom-2 right-0 absolute hover:bg-transparent" onclick="change_pict.showModal()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>              
              </button>
              <dialog id="change_pict" class="modal">
                <div class="modal-box">
                  <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                  </form>
                  <h3 class="font-bold text-lg py-5" style="align-items: center; justify-content: center; display:flex; flex-direction: column">Ukuran max. 10MB</h3>
                  <a href="" class="btn btn-square mx-auto bg-primary text-white hover:bg-white hover:text-black hover:border-2 hover:border-primary w-40 h-70" style="display: flex; align-items: center; justify-content: center; text-align: center;">Upload Foto</a>
                </div>
              </dialog>                                          
            </div>
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

