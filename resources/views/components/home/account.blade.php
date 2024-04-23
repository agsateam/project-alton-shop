
<div class="navbar flex py-0 bg-primary text-white shadow-lg">
  <div class="grow">
    <a href="/" wire:navigate class="font-bold text-xl ml-3 lg:ml-5 sm:ml-3">ALTON</a>
  </div>
  <div class="mr-3">
    @livewire('product.cart-button')
    <button id="dropdownAccountButton" data-dropdown-toggle="dropdownAccount" class="md:hidden btn btn-ghost btn-circle" type="button">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
      </svg>
    </button>
    <a class="hidden md:flex btn btn-ghost btn-circle" href="/login" wire:navigate>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
      </svg>
    </a>
    <div id="dropdownAccount" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
      <div class="px-2 py-2 text-sm text-gray-900 dark:text-white">
        <div class="flex justify-start items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
          <img class="w-8 h-8 me-1.5 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNWQQdRQ1JIuiKNvTqBukJH4WugmOWF7A_-w&s" alt="Foto Profil">
          <span>{{ auth()->user()->name }}</span>
        </div>
      </div>
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAccountButton">
        <li>
          <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Riwayat Pribadi</a>
        </li>
        <li>
          <a href="/ubah-password" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ubah Password</a>
        </li>
        <li>
          <a href="/informasi-pribadi" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Informasi Pribadi</a>
        </li>
      </ul>
      <div class="py-2">
        <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log Out</a>
      </div>
  </div>
  </div>
</div>

{{-- Cart Drawer --}}
@livewire('product.cart')
