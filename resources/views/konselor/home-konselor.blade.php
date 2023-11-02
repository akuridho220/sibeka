@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col">
        <main class="w-full flex-grow px-12 py-8 min-h-screen">
            <p class="text-3xl font-bold primary-color pb-2">Jadwal Pertemuan</p>
                <div class="box-content max-w-md border-1 p-6 rounded-lg mb-4" style="background-color: #0997BC;">
                    <div class="grid grid-cols-2">
                        <p class="font-semibold text-white">Hari / Tanggal</p>
                        <p class="font-semibold text-white">Senin, 2 Oktober 2023</p>
                    </div>    
                    <div class="grid grid-cols-2">
                        <p class="font-semibold text-white">Jam</p>
                        <p class="font-semibold text-white">13.00 - 15.00</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p class="font-semibold text-white">Tempat</p>
                        <p class="font-semibold text-white">Ruang D</p>
                    </div>
                    <div class="grid grid-cols-2">
                        <p class="font-semibold text-white">Nama Konseli</p>
                        <p class="font-semibold text-white">Mahasiswa A</p>
                    </div> 
                </div>
                <button class="rounded-lg p-3" style="background-color: #159600; display: flex; justify-content: center; align-items: center;">
                    <a href="/konselor/laporan" class="font-semibold text-white">Isi Laporan Konseling</a>
                </button>
            <p class="text-3xl font-bold danger pt-6 pb-2">Laporan yang Belum Terisi</p>
            
            <div class="grid grid-rows-2 gap-1">
                <div class="grid grid-cols-3 gap-1">
                    <div class="box-content w-40 border-1 p-4 rounded-lg" style="background-color: #F6F1F1; display: flex; justify-content: center; align-items: center;">
                        <p class="font-semibold text-black">25 September 2023</p>
                    </div>
                    <div class="box-content w-48 border-1 p-4 rounded-lg" style="background-color: #E96C6C; ">
                        <div class="grid grid-rows-3">
                            <p class="font-semibold text-black">09.00-11.00</p>
                            <p class="font-semibold text-black">Ruang C</p>
                            <p class="font-semibold text-black">Mahasiswa B</p>
                        </div>
                    </div>
                    <div class="box-content w-48 border-1 p-4 rounded-lg" style="background-color: #159600; display: flex; justify-content: center; align-items: center;">
                        <button class="font-semibold text-black">Isi Laporan Konseling</button>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-1">
                    <div class="box-content w-40 border-1 p-4 rounded-lg" style="background-color: #F6F1F1; display: flex; justify-content: center; align-items: center;">
                        <p class="font-semibold text-black">18 September 2023</p>
                    </div>
                    <div class="box-content w-48 border-1 p-4 rounded-lg" style="background-color: #E96C6C;">
                        <div class="grid grid-rows-3">
                            <p class="font-semibold text-black">13.00-15.00</p>
                            <p class="font-semibold text-black">Ruang A</p>
                            <p class="font-semibold text-black">Mahasiswa C</p>
                        </div>
                    </div>
                    <div class="box-content w-48 border-1 p-4 rounded-lg" style="background-color: #159600; display: flex; justify-content: center; align-items: center;">
                        <button class="font-semibold text-black">Isi Laporan Konseling</button>
                    </div>
                </div>
            </div>
            <p class="text-3xl font-bold primary-color pt-6 pb-2">Jadwal Pertemuan yang akan Datang</p>
                <div class="grid grid-cols-2 gap-1 pb-6">
                    <div class="box-content w-40 border-1 p-4 rounded-lg" style="background-color: #F6F1F1; display: flex; justify-content: center; align-items: center;">
                        <p class="font-semibold text-[#515151]">25 September 2023</p>
                    </div>
                    <div class="box-content w-40 border-1 p-4 rounded-lg" style="background-color: #F6F1F1;">
                        <div class="grid grid-rows-3">
                            <p class="font-semibold text-[#515151]">09.00-11.00</p>
                            <p class=" text-[#636363]">Ruang C</p>
                            <p class=" text-[#636363]">Mahasiswa B</p>
                        </div>
                    </div>
                </div>
                
        </main>
    </div>
@endsection