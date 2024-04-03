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
                <div class="content my-5 shadow-lg rounded-md relative">
                    <input type="radio" name="panduan" id="panduan" class="appearance-none peer">
                    <label for="panduan" class="flex items-center text-lg font-semibold
                    after:absolute after:content-['+'] after:right-5 after:text-2xl
                    after:text-gray-400 hover:text-gray-900">
                        <h2 class="mr-2 h-8 w-8 bg-cyan-400 grid place-items-center text-white rounded-full">1</h2>
                        <h3>Download</h3>
                    </label>
                    <div class="answer mt-5">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt voluptatibus non excepturi. Rerum placeat, ea laboriosam, eaque vitae assumenda praesentium dignissimos similique accusamus, ratione perferendis ab soluta earum quia quam.</p>
                    </div>
                </div>
            </div>
            <div class="basis-1/4 h-screen border-l-4 pl-4 border-gray-400">
                {{-- @dump(request()->fullUrlIs(url('/panduan'))) --}}
                <x-sidebar.button href="/KebijakanPrivasi">Kebijakan Privasi</x-sidebar.button>
                <x-sidebar.button href="/syaratKetentuan">Syarat dan Ketentuan</x-sidebar.button>
                <x-sidebar.button href="/panduan">Panduan</x-sidebar.button>
                <x-sidebar.button href="/FAQ">FAQ</x-sidebar.button>
            </div>
        </div>
    </main>
<x-master.footer/>