<header class="w-full items-center bg-white h-16 px-6 border-b-2 flex">
    <div class="w-1/2">
        <div class="flex flex-row items-center h-16 w-full px-4 md:hidden">
            <!-- mobile hamburger -->
            <div class="md:hidden flex items-center mr-4">
                <button id="hamburgerMenu" type="button" class=" primary-color hover:text-blue-500 hover:border-white focus:outline-none navbar-burger">
                    <i data-feather="menu"></i>
                </button>
            </div>
            <div class="p-2">
                <img src="img/logo.png" alt="stis" width="40px" class="w-10">
            </div>
            <div class="p-2">
                <p class="text-lg primary-color font-bold">STIS Konseling</p>
            </div>
        </div>
    </div>
    <div class="relative w-1/2 flex flex-row justify-end">
        <div class="flex py-2 px-4">
            <p>Konseli</p>
        </div>
        <div x-data="{ isOpen: false }">
            <button @click="isOpen = !isOpen" class="realtive flex items-center justify-center z-10 w-10 h-10">
                <div class="grow-0">
                    <i data-feather="user" class=""></i>
                </div>
            </button>
            <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-40 flex flex-col justify-center items-center bg-white rounded-lg shadow-lg py-2 mt-8 mx-4 right-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user grow-0"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <p class="p-1 m-2 text-base">Nama Konseli</p>
                <p class="p-1 m-2 text-base">email@stis.ac.id</p>
                <button class="border rounded-lg border-sky-500 py-1 px-4 hover:bg-sky-500">Logout</button>
            </div>
        </div>
    </div>
</header>
