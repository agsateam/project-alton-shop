<x-account-layout>
    <x-master.accountLayout>
      {{-- content account --}}
      <div class="container px-1 md:px-5 md:py-2">
        <span class="block md:hidden px-2 font-semibold text-xl pb-2">Informasi Pribadi</span>
        <div class="px-2 md:px-5 mx-2 md:mx-0 border border-gray-300 rounded-lg shadow-inner">
        <span class="hidden md:block font-bold text-4xl pt-5 pb-2">Informasi Pribadi</span>
            @livewire('account.profil', ['user' => $user])
        </div>
      </div>            
      {{-- end content account --}}
    </x-master.accountLayout>
</x-account-layout> 