<aside id="sidebar" class="w-2/3 sm:w-1/3 md:w-64 fixed md:top-0 md:left-0 -left-full bg-sidebar h-screen md:block shadow-xl z-30">
    <div class="flex flex-row items-center h-16 w-full px-4">
        <!-- mobile hamburger -->
        <div class="flex md:hidden items-center ml-2">
            <button id="hamburgerMenuClose" type="button" class="text-white hover:text-blue-500 hover:border-white focus:outline-none navbar-burger">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="flex ml-2 md:mr-24">
            <img src="img/logo.png" alt="stis" class="h-8 w-8 mr-3">
            <span class="self-center text-xl font-semibold sm:text-2xl text-white whitespace-nowrap">Sibeka</span>
        </div>
    </div>
    <nav class="text-white text-sm font-semibold">
        <a href="/konseli" class="flex items-center py-4 pl-6 {{ $title === "Home" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="home" class="mr-4"></i>
            </div>
            Beranda
        </a>
        <a href="/konseli-pendaftaran" class="flex items-center py-4 pl-6 {{ $title === "Pendaftaran" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="file-text" class="mr-4"></i>
            </div>
            Pendaftaran Konseling
        </a>
        <a href="/konseli-riwayat" class="flex items-center py-4 pl-6 {{ $title === "Riwayat" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="archive" class="mr-4"></i>
            </div>
            Riwayat Konseling
        </a>
    </nav>
</aside>