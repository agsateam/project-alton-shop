<x-admin-layout>
    <div class="w-full px-4 py-2">
        <div class="flex justify-between pb-2">
            <h1 class="font-bold text-3xl items-center">Kelola Pengguna</h1>
            <div class="text-sm place-self-end">
                <ul class="flex">
                    <li class="text-gray-600"><a href="{{ route('admin.dashboard') }}" class="hover:font-semibold">Dashboard</a></li>
                    <li><span class="mx-2 text-gray-400">/</span></li>
                    <li class="font-medium"><span>Kelola Pengguna</span></li>
                </ul>
            </div>
        </div>
        <div class="container mt-4">
            <div class="flex items-center mb-4">
                <a href="{{ route('admin.pengguna.kelola-pengguna.tambah') }}" wire:navigate class="flex items-center space-x-2 bg-primary text-white rounded-sm py-2 pr-3 pl-2 text-sm">
                    <svg class="h-5 w-5 text-white-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="16" height="16" rx="2" />  <line x1="9" y1="12" x2="15" y2="12" />  <line x1="12" y1="9" x2="12" y2="15" /></svg>
                    <span>
                        Tambah Pengguna
                    </span>
                </a>
            </div>
            <div class="card-body relative overflow-x-auto shadow-md border">
                <table class="w-full text-sm text-left text-gray-500 rounded-none">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center">
                        <tr>
                            <th scope="col" class="px-2 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hak Akses
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                                <th scope="col" class="text-center px-2 py-3">
                                    {{ $loop->iteration }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $user->name }}
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $user->email }}
                                </th>
                                <td class="px-6 py-4 text-center">
                                    {{ $user->roles->pluck('name')->join(', ') }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    @foreach ($user->permissions->pluck('name') as $item)
                                        <span class="px-2 py-1 bg-green-200 text-green-800 rounded-full text-xs">{{ $item }}</span>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 flex items-center place-content-center space-x-2">
                                    <a href="{{ url('admin/pengguna/kelola-pengguna/edit/'.$user->id) }}" wire:navigate class="flex items-center space-x-2 font-medium text-white bg-blue-500 rounded-sm py-2 pl-2 pr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                        <span>Edit</span>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2 font-medium text-white bg-red-500 rounded-sm py-2 pl-2 pr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>                                          
                                        <span>Delete</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>