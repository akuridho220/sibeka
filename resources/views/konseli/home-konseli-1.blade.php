@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col relative top-16">
        <main class="w-full flex-grow px-12 py-8">
            <p class="text-3xl font-bold secondary-color pb-2">Jadwal Pertemuan</p>

            <div class="box-content max-w-sm border-1 p-6 rounded-lg" style="background-color: #0997BC;">
                <div class="grid grid-cols-2">
                    <p class="font-semibold text-white">Hari/Tanggal</p>
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
                    <p class="font-semibold text-white">Nama Konselor</p>
                    <p class="font-semibold text-white">Konselor A</p>
                </div>
            </div>
        </main>
    </div>
@endsection