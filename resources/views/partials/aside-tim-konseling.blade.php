<aside id="sidebar" class="w-2/3 sm:w-1/3 md:w-64 fixed md:top-0 md:left-0 -left-full bg-sidebar h-screen md:block shadow-xl z-50">
    <div class="flex flex-row items-center h-16 w-full px-4 shadow-md">
        <!-- mobile hamburger -->
        <div class="flex md:hidden items-center ml-2">
            <button id="hamburgerMenuClose" type="button" class="text-white hover:text-blue-500 hover:border-white focus:outline-none navbar-burger">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="p-2 hidden md:flex">
            <img src="img/logo.png" alt="stis" width="40px" class="w-10">
        </div>
        <div class="p-2">
            <p class="text-lg text-white font-bold">Sibeka</p>
        </div>
    </div>
    <nav class="text-white text-sm font-semibold">
        <a href="/tim" class="flex items-center py-4 pl-6 {{ $title === "Home" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="home" class="mr-4"></i>
            </div>
            {{-- <i class="fas fa-home mr-3"></i> --}}
            Beranda
        </a>
        <a href="/tim-pengajuan" class="flex items-center py-4 pl-6 {{ $title === "Pendaftaran" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="file-text" class="mr-4"></i>
            </div>
            {{-- <i class="fas fa-file-invoice mr-3"></i> --}}
            Daftar Pengajuan Konseling
        </a>
    </nav>
</aside>