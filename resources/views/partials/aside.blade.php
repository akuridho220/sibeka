<aside id="sidebar" class="w-1/3 md:w-64 fixed md:top-0 md:left-0 -left-full bg-sidebar h-screen md:block shadow-xl z-30">
    <div class="flex flex-row items-center h-16 w-full px-4">
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
            <p class="text-lg text-white font-bold">STIS Konseling</p>
        </div>
    </div>
    <nav class="text-white text-sm font-semibold">
        <a href="/konseli" class="flex items-center py-4 pl-6 {{ $title === "Home" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="home" class="mr-4"></i>
            </div>
            Beranda
        </a>
        <a href="/konseli/pendaftaran" class="flex items-center py-4 pl-6 {{ $title === "Pendaftaran" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="file-text" class="mr-4"></i>
            </div>
            Pendaftaran Konseling
        </a>
        <a href="/konseli/riwayat" class="flex items-center py-4 pl-6 {{ $title === "Riwayat" ? 'active-nav-link' : '' }} nav-item">
            <div class="grow-0">
                <i data-feather="archive" class="mr-4"></i>
            </div>
            Riwayat Konseling
        </a>
    </nav>
</aside>