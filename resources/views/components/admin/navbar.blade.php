
<div class="navbar flex justify-end py-0 bg-primary text-white shadow-lg">
    <div class="md:mr-3">
      <span class="mr-1">Halo, {{ auth()->user()->name }}</span>
      <button id="dropdownAccountButton" data-dropdown-toggle="dropdownAccount" class="btn btn-ghost btn-circle inline-flex justify-center" type="button">
        <img class="w-8 h-8 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNWQQdRQ1JIuiKNvTqBukJH4WugmOWF7A_-w&s" alt="Foto Profil">
      </button>
      <div id="dropdownAccount" class="z-10 hidden w-52 pr-3">
        <div class="bg-primary text-white divide-y divide-gray-100 rounded-xl shadow-lg">
          <ul class="py-2 text-sm" aria-labelledby="dropdownAccountButton">
            <li>
              <a href="/ubah-password" class="block px-4 py-2 hover:bg-secondary">Ubah Password</a>
            </li>
          </ul>
          <div class="py-2">
            <a href="/logout" class="block px-4 py-2 text-sm hover:bg-secondary">Log Out</a>
          </div>
        </div>
      </div>
    </div>
  </div>
