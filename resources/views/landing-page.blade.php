<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap');
    </style>
</head>
<body class="font-family-poppins flex">
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full bg-sidebar hidden sm:flex">
            <div class="w-full lg:w-5/6 flex items-center mx-auto">
                <div class="flex flex-row items-center w-fit px-4 py-2">
                    <div class="p-2">
                        <img src="img/logo.png" alt="stis" width="36px">
                    </div>
                    <div class="p-2">
                        <p class="text-xs font-bold text-white w-3/5">Sistem Informasi Bimbingan dan Konseling</p>
                    </div>
                </div>
                <div class="flex flex-row grow justify-end text-white text-sm mx-auto px-8 items-center">
                    <li class="list-none px-2 hover:font-semibold"><a href="#aboutus">Tentang Kami</a></li>
                    <li class="list-none px-2 hover:font-semibold"><a href="#steps">Tahapan Pendaftaran</a></li>
                    <li class="list-none px-2 hover:font-semibold"><a href="#time">Jam Buka</a></li>
                    <a href="/login">
                        <button class="bg-warning text-white rounded-lg py-2 px-4 ml-8">Login</button>
                    </a>
                </div>
            </div>
        </header>   
        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <div class="flex flex-row items-center w-fit py-2">
                    <div class="p-2">
                        <img src="img/logo.png" alt="stis" width="36px">
                    </div>
                    <div class="p-2">
                        <p class="text-sm font-bold text-white w-3/5">Sibeka</p>
                    </div>
                </div>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    Tentang Kami
                </a>
                <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    Tahapan Pendaftaran
                </a>
                <a href="" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    Jam Buka
                </a>
                <button class="bg-warning text-white rounded-lg py-2 px-4">Login</button>
            </nav>
        </header>

        <!-- Content -->
        <div class="w-full h-screen bg-gray-300 overflow-y-auto">
            <main class="w-full ms:w-5/6 h-auto bg-white mx-auto">
                <section id="aboutus" class="h-3/4 secondary-color">
                    <div class="relative">
                        <div class="bg-[url('/public/img/landing-page.png')] bg-cover bg-center relative h-screen">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <p class="text-2xl font-bold">Tentang Kami</p>
                                    <p class="text-sm w-2/3 mx-auto mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum, corrupti? Quia cum, quod, animi omnis laudantium sequi commodi numquam iure repellendus, debitis porro harum dicta consequuntur in! Repudiandae, libero ex!</p>
                                    <button class="bg-sidebar text-white font-semibold py-2 px-4 rounded mt-3">Masuk sekarang!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="steps">
                    <div>
                        <p class="text-center text-2xl mt-8 font-bold">Tahapan Konseling</p>
                        <div class="bg-gray-100 px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                            <div class="grid max-w-2xl mx-auto">
                                <div class="flex">
                                    <div class="flex flex-col items-center mr-6">
                                        <div class="w-px h-10 opacity-0 sm:h-full"></div>
                                            <div>
                                                <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
                                                    1
                                                </div>
                                            </div>
                                        <div class="w-px h-full bg-gray-300"></div>
                                    </div>
                                    <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
                                        <div class="sm:mr-5">
                                            <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
                                                <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" viewBox="0 0 20 20">
                                                    <path d="M15.396,2.292H4.604c-0.212,0-0.385,0.174-0.385,0.386v14.646c0,0.212,0.173,0.385,0.385,0.385h10.792c0.211,0,0.385-0.173,0.385-0.385V2.677C15.781,2.465,15.607,2.292,15.396,2.292 M15.01,16.938H4.99v-2.698h1.609c0.156,0.449,0.586,0.771,1.089,0.771c0.638,0,1.156-0.519,1.156-1.156s-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.321-1.089,0.771H4.99v-3.083h1.609c0.156,0.449,0.586,0.771,1.089,0.771c0.638,0,1.156-0.518,1.156-1.156c0-0.638-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.322-1.089,0.771H4.99V6.531h1.609C6.755,6.98,7.185,7.302,7.688,7.302c0.638,0,1.156-0.519,1.156-1.156c0-0.638-0.519-1.156-1.156-1.156c-0.503,0-0.933,0.322-1.089,0.771H4.99V3.062h10.02V16.938z M7.302,13.854c0-0.212,0.173-0.386,0.385-0.386s0.385,0.174,0.385,0.386s-0.173,0.385-0.385,0.385S7.302,14.066,7.302,13.854 M7.302,10c0-0.212,0.173-0.385,0.385-0.385S8.073,9.788,8.073,10s-0.173,0.385-0.385,0.385S7.302,10.212,7.302,10 M7.302,6.146c0-0.212,0.173-0.386,0.385-0.386s0.385,0.174,0.385,0.386S7.899,6.531,7.688,6.531S7.302,6.358,7.302,6.146"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-xl font-semibold sm:text-base">Mendaftar Konseling</p>
                                            <p class="text-sm text-gray-700">
                                                Mahasiswa mendaftar konseling melalui website. Mahasiswa dapat mengajukan 
                                                dua pilihan waktu untuk melakukan konseling.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex flex-col items-center mr-6">
                                        <div class="w-px h-10 opacity-0 sm:h-full"></div>
                                            <div>
                                                <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
                                                    2
                                                </div>
                                            </div>
                                        <div class="w-px h-full bg-gray-300"></div>
                                    </div>
                                    <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
                                        <div class="sm:mr-5">
                                            <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
                                                <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" viewBox="0 0 20 20">
                                                    <path d="M10.25,2.375c-4.212,0-7.625,3.413-7.625,7.625s3.413,7.625,7.625,7.625s7.625-3.413,7.625-7.625S14.462,2.375,10.25,2.375M10.651,16.811v-0.403c0-0.221-0.181-0.401-0.401-0.401s-0.401,0.181-0.401,0.401v0.403c-3.443-0.201-6.208-2.966-6.409-6.409h0.404c0.22,0,0.401-0.181,0.401-0.401S4.063,9.599,3.843,9.599H3.439C3.64,6.155,6.405,3.391,9.849,3.19v0.403c0,0.22,0.181,0.401,0.401,0.401s0.401-0.181,0.401-0.401V3.19c3.443,0.201,6.208,2.965,6.409,6.409h-0.404c-0.22,0-0.4,0.181-0.4,0.401s0.181,0.401,0.4,0.401h0.404C16.859,13.845,14.095,16.609,10.651,16.811 M12.662,12.412c-0.156,0.156-0.409,0.159-0.568,0l-2.127-2.129C9.986,10.302,9.849,10.192,9.849,10V5.184c0-0.221,0.181-0.401,0.401-0.401s0.401,0.181,0.401,0.401v4.651l2.011,2.008C12.818,12.001,12.818,12.256,12.662,12.412"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-xl font-semibold sm:text-base">Menunggu Konfirmasi</p>
                                            <p class="text-sm text-gray-700">
                                                Mahasiswa menunggu konfirmasi jadwal pertemuan konseling
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex flex-col items-center mr-6">
                                        <div class="w-px h-10 opacity-0 sm:h-full"></div>
                                            <div>
                                                <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
                                                    3
                                                </div>
                                            </div>
                                        <div class="w-px h-full bg-gray-300"></div>
                                    </div>
                                    <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
                                        <div class="sm:mr-5">
                                            <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-xl font-semibold sm:text-base">Penjadwalan</p>
                                            <p class="text-sm text-gray-700">
                                                Apabila disetujui, mahasiswa mendapatkan jadwal konseling.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex flex-col items-center mr-6">
                                        <div class="w-px h-10 bg-gray-300 sm:h-full"></div>
                                        <div>
                                            <div class="flex items-center justify-center w-8 h-8 text-xs font-medium border rounded-full">
                                                4
                                            </div>
                                        </div>
                                        <div class="w-px h-full opacity-0"></div>
                                    </div>
                                    <div class="flex flex-col pb-6 sm:items-center sm:flex-row sm:pb-0">
                                        <div class="sm:mr-5">
                                            <div class="flex items-center justify-center w-16 h-16 my-3 rounded-full bg-indigo-50 sm:w-24 sm:h-24">
                                                <!-- <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" stroke="currentColor" viewBox="0 0 52 52">
                                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                                </svg> -->
                                                <svg class="w-12 h-12 text-deep-purple-accent-400 sm:w-16 sm:h-16" viewBox="0 0 20 20">
                                                    <path d="M10.219,1.688c-4.471,0-8.094,3.623-8.094,8.094s3.623,8.094,8.094,8.094s8.094-3.623,8.094-8.094S14.689,1.688,10.219,1.688 M10.219,17.022c-3.994,0-7.242-3.247-7.242-7.241c0-3.994,3.248-7.242,7.242-7.242c3.994,0,7.241,3.248,7.241,7.242C17.46,13.775,14.213,17.022,10.219,17.022 M15.099,7.03c-0.167-0.167-0.438-0.167-0.604,0.002L9.062,12.48l-2.269-2.277c-0.166-0.167-0.437-0.167-0.603,0c-0.166,0.166-0.168,0.437-0.002,0.603l2.573,2.578c0.079,0.08,0.188,0.125,0.3,0.125s0.222-0.045,0.303-0.125l5.736-5.751C15.268,7.466,15.265,7.196,15.099,7.03"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-xl font-semibold sm:text-base">Melakukan pertemuan konseling</p>
                                            <p class="text-sm text-gray-700">
                                                Mahasiswa dan Konselor melakukan konseling pada waktu dan tempat yang telah ditentukan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="time">
                    <div class="h-1/2">
                        <p class="text-center text-2xl mt-8 font-bold">Jam Operasional</p>

                        <div class="px-4 py-16 w-2/3 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                            <div class="p-5 duration-300 transform bg-white border rounded shadow-sm hover:-translate-y-2">
                                <div class="flex items-center justify-between mb-2">
                                    <p class="text-lg font-bold leading-5">Senin, Rabu, Kamis</p>
                                </div>
                                    <p class="text-sm text-gray-900">
                                        09.00-11.00 dan 13.00-15.00
                                    </p>
                            </div>
                            <div class="p-5 duration-300 transform bg-white border rounded shadow-sm hover:-translate-y-2">
                                <div class="flex items-center justify-between mb-2">
                                    <p class="text-lg font-bold leading-5">Selasa</p>
                                </div>
                                    <p class="text-sm text-gray-900">
                                        10.00-12.00 dan 13.00-15.00
                                    </p>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="bg-sidebar p-2">
                    <p class="text-center text-sm text-white">Copyright &copy 2023 Sistem Bimbingan dan Konseling Politeknik Statistika STIS</p>
                </section>
            </main>
        </div>
    </div>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    {{-- <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script> --}}


    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>