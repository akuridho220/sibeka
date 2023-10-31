<aside class="relative bg-sidebar h-screen w-1/4 hidden sm:block shadow-xl">
    <div class="flex flex-row items-center w-full h-fit px-4 py-2">
        <div class="p-2">
            <img src="img/logo.png" alt="stis" width="64px">
        </div>
        <div class="p-2">
            <p class="text-xs text-white">Sistem Informasi Bimbingan dan Konseling</p>
        </div>
    </div>
    <nav class="text-white text-sm font-semibold pt-3">
        <a href="" class="flex items-center py-4 pl-6 {{ $title === "Home" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="home" class="mr-4"></i>
            </div>
            {{-- <i class="fas fa-home mr-3"></i> --}}
            Beranda
        </a>
    </nav>
</aside>