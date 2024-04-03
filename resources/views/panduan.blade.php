<x-master.main/>
<body data-theme="{{ $theme }}" class="antialiased font-sans">
    <header class="sticky top-0 z-50">
        <x-home.navbar/>
    </header>
    <main class="realtive row">
        <div class="flex flex-row p-10">
            <div class="basis-3/4">
                <h1 class="text-5xl">Panduan Belanja</h1>
                <div class="relative flex pt-4 items-center w-3/4">
                    <div class="flex-grow border-2 border-gray-400"></div>
                </div>
            </div>
            <div class="basis-1/4 h-screen border-l-4 pl-4 border-gray-400">
                @dump(request()->fullUrlIs(url('/panduan')))
                <x-sidebar.button href="/KebijakanPrivasi">Kebijakan Privasi</x-sidebar.button>
                <x-sidebar.button href="/SyaratKetentuan">Syarat dan Ketentuan</x-sidebar.button>
                <x-sidebar.button href="/panduan">Panduan</x-sidebar.button>
                <x-sidebar.button href="/FAQ">FAQ</x-sidebar.button>
            </div>
        </div>
    </main>
<x-master.footer/>