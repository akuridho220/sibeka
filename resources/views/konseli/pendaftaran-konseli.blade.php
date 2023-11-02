@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col">
        <main class="w-full flex flex-grow justify-center p-6 min-h-screen">
            <!-- <div class="flex flex-col justify-center items-center border-solid border-2 border-black"> -->
            <div class="flex flex-col items-center bg-white w-2/3 rounded-lg border drop-shadow-lg overflow-auto">
                <div>
                    <p class="font-bold w-full mb-1 p-5 text-xl">Formulir Laporan Konseling</p>
                </div>
                <form class="w-4/5 px-10" action="" method="post">
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Nama Konselor</label>
                        <input type="text" id="nama_konselor" class="w-full bg-gray-300 h-10 p-2" value="Firdaus" readonly>
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Waktu Konseling</label>
                        <input type="text" id="tanggal_konseling" class="w-1/2 bg-gray-300 h-10 p-2" value="29 Oktober 2023" readonly>
                        <input type="text" id="waktu_konseling" class="w-1/3 bg-gray-300 h-10 p-2" value="13.00-15.00" readonly>
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Nama Konseli</label>
                        <input type="text" id="nama_konseli" class="w-full bg-gray-300 h-10 p-2" value="Ridho Pangestu" readonly>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">NIM Konseli</label>
                        <input type="text" id="nim" class="w-full bg-gray-300 h-10 p-2" value="222111011" readonly>
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Program Studi</label>
                        <input type="text" id="prodi" class="w-full bg-gray-300 h-10 p-2" value="D-IV Komputasi Statistik" readonly>
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Kelas</label>
                        <input type="text" id="kelas" class="w-full bg-gray-300 h-10 p-2" value="3SI3" readonly>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Klasifikasi Permasalahan Utama</label>
                        <select id="klasifikasi" class="bg-gray-200 h-10 p-2 w-full">
                            <option selected>Pilih permasalahan utama</option>
                            <option value="Akademik">Akademik</option>
                            <option value="Keluarga">Keluarga</option>
                            <option value="Pertemanan">Pertemanan</option>
                            <option value="Lingkungan">Lingkungan</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Hasil Konseling</label>
                        <textarea class="w-full bg-gray-200 h-fit p-2" id="hasil" placeholder="Deskripsikan hasil konseling"></textarea>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Solusi</label>
                        <textarea class="w-full bg-gray-200 h-fit p-2" id="solusi" placeholder="Deskripsikan solusi konseling"></textarea>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Tindak Lanjut</label>
                        <select id="tindak_lanjut" class="bg-gray-200 h-10 p-2 w-full">
                            <option selected>Pilih opsi</option>
                            <option value="tidak-ada">Selesai</option>
                            <option value="lanjutan">Konsultasi Lanjutan</option>
                        </select>
                    </div>
                    
                    <!-- hanya muncul saat tindak lanjut memilih ada pertemuan lanjutan -->
                    <div>
                        <div class="p-2">
                            <label for="" class="block mb-1 font-bold">Tanggal Pertemuan Lanjutan</label>
                            <input type="date" class="w-full bg-gray-200 h-10 p-2" name="" id="">
                        </div>
                        <div class="p-2">
                            <label for="" class="block mb-1 font-bold">Waktu Pertemuan Lanjutan</label>
                            <select id="tindak_lanjut" class="bg-gray-200 h-10 p-2 w-full">
                                <option selected>Pilih waktu</option>
                                <option value="9">09.00-11.00</option>
                                <option value="13">13.00-15.00</option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 flex items-center justify-center">
                        <button type="submit" class="block bg-yellow-500 hover:bg-yellow-600 font-bold p-3 rounded">
                            Submit
                        </button>
                    </div>
                </form>
                
            </div>
        </main>
    </div>
@endsection