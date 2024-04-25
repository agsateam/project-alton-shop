<x-account-layout>
    <x-master.accountLayout>
      {{-- content account --}}
      <div class="container px-1 w-[80%] md:px-5 md:py-2">
        <span class="block md:hidden px-2 font-semibold text-xl">Ubah Kata Sandi</span>
        <div class="px-2 md:px-5 mx-2 md:mx-0 border border-gray-300 rounded-lg shadow-inner">
        <span class="hidden md:block font-bold text-4xl pt-10 pl-3">Ubah Kata Sandi</span>
            <form action="" method="POST">
                <div class="mb-6 pl-10 mt-10 px-3">
                    <label for="nama_depan" class="block mb-2 text-sm font-medium text-black">Masukan Kata Sandi Lama</label>
                    <input type="password" class="border border-black text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" required />
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2 pl-10 px-3">
                    <div>
                        <label for="nama_depan" class="block mb-2 text-sm font-medium text-black">Masukan Kata Sandi Baru</label>
                        <input type="password" class="border border-black text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" required />
                    </div>
                    <div>
                        <label for="nama_belakang" class="block mb-2 text-sm font-medium text-black">Konfirmasi Kata Sandi Baru</label>
                        <input type="password" class="border border-black text-black text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5" required />
                    </div>
                </div>
                <div class="mb-6 pl-10 px-3">
                    <button type="submit" class="text-white bg-primary focus:ring-4 focus:outline-none focus:ring-primary font-medium text-xl w-full px-5 py-2.5 text-center">Simpan Perubahan</button>
                </div>
            </form>
        </div>
      </div>            
      {{-- end content account --}}
    </x-master.accountLayout>
  </x-account-layout>