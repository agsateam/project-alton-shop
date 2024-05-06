<x-account-layout>
    <x-master.accountLayout>
      {{-- content account --}}
      <div class="container px-1 md:px-5 md:py-2">
        <span class="block md:hidden px-2 font-semibold text-xl pb-3">Informasi Pribadi</span>
        <div class="px-2 md:px-5 mx-2 md:mx-0 md:border md:border-gray-300 md:rounded-lg md:shadow-inner">
        <span class="hidden md:block font-bold text-4xl pt-5 pb-4">Informasi Pribadi</span>
            @livewire('account.update-profil')
        </div>
      </div>            
      {{-- end content account --}}
    </x-master.accountLayout>
</x-account-layout> 