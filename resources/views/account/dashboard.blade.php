<x-account-layout>
    <x-master.accountLayout>
      {{-- content account --}}
      <div class="container px-1 md:px-5 md:py-2">
        <span class="block md:hidden px-2 font-semibold text-xl">Riwayat Transaksi</span>
        <div class="w-full flex flex-row justify-between px-2 md:px-0 mt-5 md:mt-0">
            <x-account.item-info>
                <svg class="mr-2 md:mr-4 h-6 w-6 md:h-12 md:w-12 absolute right-0 top-1/4 md:top-1/2 transform -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                </svg>            
                <h2 class="font-bold text-2xl md:text-5xl">5</h2>
                <span class="text-xs ml-2 mb-1 md:ml-4 md:mb-3 md:text-xl absolute bottom-0 left-0">
                    Delivery
                </span>
            </x-account.item-info>
            <x-account.item-info>
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 md:mr-4 h-6 w-6 md:h-12 md:w-12 absolute right-0 top-1/4 md:top-1/2 transform -translate-y-1/2" viewBox="0 0 128 128">
                    <path d="M15,109.8l48,17c0,0,0,0,0,0c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.5,0.1,0.7,0.1c0.2,0,0.3,0,0.5,0c0,0,0,0,0,0c0,0,0,0,0.1,0 c0.1,0,0.3-0.1,0.4-0.1c0,0,0,0,0,0l48-17c1.2-0.4,2-1.6,2-2.8V73.4l10-3.5c0.8-0.3,1.5-1,1.8-1.8s0.2-1.8-0.3-2.6l-12-20 c0,0-0.1-0.1-0.1-0.1c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0-0.1c-0.1-0.1-0.1-0.1-0.2-0.2 c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1,0c0,0-0.1-0.1-0.1-0.1c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.1-0.1-0.2-0.1 c0,0,0,0,0,0c0,0,0,0,0,0l-48-17c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.1,0-0.2,0c0,0,0,0,0,0c0,0,0,0,0,0 c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.4,0c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0.1-0.5,0.1l-48,17 c-0.2,0.1-0.3,0.1-0.5,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.1-0.3,0.2c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.2,0.1-0.2,0.2 c0,0-0.1,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.2,0.2c0,0,0,0.1-0.1,0.1l-12,20c-0.7,1.1-0.6,2.5,0.2,3.4C2.3,69.6,3.1,70,4,70 c0.3,0,0.7-0.1,1-0.2l8-2.8v40C13,108.3,13.8,109.4,15,109.8z M119.5,65.4l-42.2,15l-8.9-14.8l42.2-15L119.5,65.4z M67,34.2L103,47 L67,59.8V34.2z M67,74.8l6.4,10.7C74,86.5,75,87,76,87c0.3,0,0.7-0.1,1-0.2l32-11.3v29.4l-42,14.9V74.8z M19,51.2l42,14.9v53.6 l-42-14.9V51.2z"></path>
                </svg>
                <h2 class="font-bold text-2xl md:text-5xl">7</h2>
                <span class="text-xs ml-2 mb-1 md:ml-4 md:mb-3 md:text-xl absolute bottom-0 left-0">
                    Pending
                </span>
            </x-account.item-info>
            <x-account.item-info>
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 md:mr-4 h-6 w-6 md:h-12 md:w-12 absolute right-0 top-1/4 md:top-1/2 transform -translate-y-1/2" viewBox="0 0 24 24"><g><g><path d="M16.62 6.21a1 1 0 0 0-1.41.17l-7 9-3.43-4.18a1 1 0 1 0-1.56 1.25l4.17 5.18a1 1 0 0 0 .78.37 1 1 0 0 0 .83-.38l7.83-10a1 1 0 0 0-.21-1.41zm5 0a1 1 0 0 0-1.41.17l-7 9-.61-.75-1.26 1.62 1.1 1.37a1 1 0 0 0 .78.37 1 1 0 0 0 .78-.38l7.83-10a1 1 0 0 0-.21-1.4z"></path><path d="M8.71 13.06 10 11.44l-.2-.24a1 1 0 0 0-1.43-.2 1 1 0 0 0-.15 1.41z"></path></g></g></svg>
                <h2 class="font-bold text-2xl md:text-5xl">12</h2>
                <span class="text-xs ml-2 mb-1 md:ml-4 md:mb-3 md:text-xl absolute bottom-0 left-0">
                    Completed
                </span>
            </x-account.item-info>
            <x-account.item-info>
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 md:mr-4 h-6 w-6 md:h-12 md:w-12 absolute right-0 top-1/4 md:top-1/2 transform -translate-y-1/2" viewBox="0 0 101 101"><path d="M50.5 84.6c18.8 0 34.1-15.3 34.1-34.1S69.3 16.4 50.5 16.4 16.4 31.7 16.4 50.5s15.3 34.1 34.1 34.1zm0-63.4c16.1 0 29.3 13.1 29.3 29.3S66.6 79.8 50.5 79.8 21.2 66.6 21.2 50.5s13.2-29.3 29.3-29.3z"></path><path d="M37.7 63c.5.5 1.1.7 1.7.7s1.2-.2 1.7-.7l9.4-9.4 9.4 9.4c.5.5 1.1.7 1.7.7s1.2-.2 1.7-.7c.9-.9.9-2.5 0-3.4l-9.4-9.4 9.4-9.4c.9-.9.9-2.5 0-3.4s-2.5-.9-3.4 0l-9.4 9.4-9.4-9.4c-.9-.9-2.5-.9-3.4 0s-.9 2.5 0 3.4l9.4 9.4-9.4 9.4c-.9.9-.9 2.4 0 3.4z"></path></svg>
                <h2 class="font-bold text-2xl md:text-5xl">9</h2>
                <span class="text-xs ml-2 mb-1 md:ml-4 md:mb-3 md:text-xl absolute bottom-0 left-0">
                    Canceled
                </span>
            </x-account.item-info>
        </div>
        <div class="px-2 md:px-5 mx-2 md:mx-0 border border-gray-300 rounded-lg shadow-inner mt-8">
            <div class="w-full pt-5 px-2">
                <div class="flex flex-row overflow-auto w-full lg:justify-around text-md font-medium text-center">
                    <span class="w-32 pr-5 pb-3 hover:text-primary hover:font-bold hover:cursor-pointer">All</span>
                    <span class="w-32 pr-5 pb-3 hover:text-primary hover:font-bold hover:cursor-pointer">Pending</span>
                    <span class="w-32 pr-5 pb-3 hover:text-primary hover:font-bold hover:cursor-pointer">Delivery</span>
                    <span class="w-32 pr-5 pb-3 hover:text-primary hover:font-bold hover:cursor-pointer border-b-2 border-primary font-bold text-primary">Completed</span>
                    <span class="w-32 pr-5 pb-3 hover:text-primary hover:font-bold hover:cursor-pointer">Canceled</span>
                </div>
            </div>
            <div class="divider -mt-2 mb-0"></div>
            <table class="pt-3 pb-6 w-full">
                @foreach ($data as $item)
                <tr>
                    <td class="flex flex-row items-center py-2">
                        <img src="https://down-id.img.susercontent.com/file/id-11134207-7r990-lq8sagk24tume5" class="w-8 border border-gray-300">
                        <div class="flex flex-col ml-3">
                            <span>{{ $item['name'] }}</span>
                            @if ($item['total_product'] > 1)
                            <span class="text-xs">+{{ $item['total_product'] - 1 }} Produk</span>
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="w-fit rounded-lg text-white px-3 py-1 text-sm bg-blue-600">{{ $item['status'] }}</div>
                    </td>
                    <td class="text-md font-bold">@toRupiah($item['total'])</td>
                </tr>
                {{-- <div class="divider mt-0 mb-0"></div> --}}
                @endforeach
            </table>
        </div>
      </div>            
      {{-- end content account --}}
    </x-master.accountLayout>
  </x-account-layout>