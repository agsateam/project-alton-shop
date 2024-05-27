<x-admin-layout>
    <div class="w-full px-4 py-2">
        <div class="flex justify-between pb-2">
            <h1 class="font-bold text-3xl items-center">Ganti Warna Tema</h1>
            <div class="text-sm place-self-end">
                <ul class="flex">
                    <li class="text-gray-600"><a href="{{ route('admin.dashboard') }}" class="hover:font-semibold">Dashboard</a></li>
                    <li><span class="mx-2 text-gray-400">/</span></li>
                    <li class="font-medium"><span>Theme</span></li>
                </ul>
            </div>
        </div>
        
        <div class="container mt-4">
            <div class="card-body relative overflow-x-auto shadow-md border">
                @livewire('admin.theme.select')
            </div>
        </div>
    </div>
</x-admin-layout>