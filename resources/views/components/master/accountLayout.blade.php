<div class="md:flex md:flex-row md:space-x-4 p-1 md:p-5 mt-2">
  <div class="relative mt-0 md:mt-5 w-full md:w-1/4 md:h-screen md:pl-4">
      <div class="card w-50 bg-base-100 shadow-md relative border border-gray-300 items-center">
          <div class="w-fit relative group/item mt-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNWQQdRQ1JIuiKNvTqBukJH4WugmOWF7A_-w&s" title="Foto Profil" alt="Photo" class="rounded-full w-36 h-36"/>
            <button class="group/edit invisible group-hover/item:visible btn btn-primary btn-circle mr-1 -bottom-2 right-0 absolute hover:bg-secondary" onclick="change_pict.showModal()">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
              </svg>
            </button>
            <dialog id="change_pict" class="modal">
              <div class="modal-box">
                <form method="dialog">
                  <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <h3 class="font-bold text-lg py-5" style="align-items: center; justify-content: center; display:flex; flex-direction: column">Ukuran max. 10MB</h3>
                <a href="#" class="btn btn-square mx-auto bg-primary text-white hover:bg-white hover:text-black hover:border-2 hover:border-primary w-40 h-70" style="display: flex; align-items: center; justify-content: center; text-align: center;">Upload Foto</a>
              </div>
            </dialog>                                          
          </div>
          <span class="py-5 font-semibold text-lg">{{ auth()->user()->name }}</span>
      </div>
      <div class="card shadow-md mt-5"><x-sidebar.accountButton href="/dashboard" wire:navigate>Riwayat Transaksi</x-sidebar.accountButton></div>
      <div class="card shadow-md mt-1"><x-sidebar.accountButton href="/ubah-password" wire:navigate>Ubah Kata Sandi</x-sidebar.accountButton></div>
      <div class="card shadow-md mt-1"><x-sidebar.accountButton href="/info-pribadi" wire:navigate>Informasi Pribadi</x-sidebar.accountButton></div>
      <div class="card shadow-md mt-5"><x-sidebar.accountButton href="/logout" state="outline" wire:navigate>Logout</x-sidebar.accountButton></div>
  </div>
  <div class="flex flex-col w-full md:flex-row md:p-2 mt-2">
      {{ $slot }}
  </div>
  
  <div class="md:hidden card shadow-md mt-4 md:mt-8 md:flex-col"><a class="btn btn-primary text-white w-full mb-1 md:mb-0 md:mt-2 text-start justify text-xs md:text-base hover:bg-white hover:text-black" href="/logout" wire:navigate>Log Out</a class=""></div>
</div>

