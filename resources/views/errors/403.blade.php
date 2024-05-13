<x-guest-layout>
    <div class="w-full flex flex-col items-center justify-center">
        <div class="hidden md:block text-3xl">403 - Akses Halaman Ditolak</div>
        <div class="md:hidden text-4xl">403</div>
        <div class="md:hidden text-3xl">Akses Halaman Ditolak</div>
        @if (Auth::check())
            @if (Auth::user()->hasRole("admin"))
                <a href={{ route("admin.dashboard") }} class="mt-5 btn btn-sm btn-primary">Kembali ke Dashboard</a>
            @else
                <a href={{ route("dashboard") }} class="mt-5 btn btn-sm btn-primary">Kembali ke Dashboard</a>
            @endif
        @else
            <a href="/" class="mt-5 btn btn-sm btn-primary">Kembali</a>
        @endif
    </div>
</x-guest-layout>