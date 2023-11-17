@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col mt-16">
        <main class="w-full flex flex-grow justify-center p-2 md:p-6 min-h-screen">
            <div class="flex flex-col items-center bg-white lg:w-2/3 w-full rounded-lg border drop-shadow-lg overflow-auto">
                <div class="flex flex-col justify-center py-4 px-2">
                    <h1 class="font-bold text-lg md:text-xl">Riwayat Konseling</h1>
                </div>
                <div class="flex flex-col w-full items-center">
                <div class="flex flex-col py-2 mx-auto justify-center">
                        <form action="" class="w-full md:flex-row flex flex-col items-center">
                            <div class="flex-col items-center">
                            <!-- Filter Section -->
                            <div class="w-full md:flex-row flex flex-col items-center mb-4 md:mb-0">
                                <p class="p-2">Filter :</p>
                                <input type="date" name="" id="" class="px-2 rounded-lg border-2" placeholder="Tanggal Awal">
                                <p class="p-2">sampai</p>
                                <input type="date" name="" id="" class="px-2 rounded-lg border-2" placeholder="Tanggal Akhir">
                            </div>

                            <!-- Pencarian Section -->
                            <div class="w-full md:w-auto flex flex-col md:flex-row justify-center items-center">
                                <p class="p-2">Pencarian</p>
                                <input type="text" class="px-2 rounded-lg border-2" placeholder="Masukkan Nama">
                            </div>
                            </div>
                        </form>
                    </div>


                    <div class="w-full">
                        <div class="w-full mx-auto md:p-8 p-4">
                            <div class="shadow-md">
                                @foreach ($laporans as $l)
                                <div class="tab w-full overflow-hidden border-t text-sm md:text-base">
                                    <input class="absolute opacity-0" id="tab-single-{{ $loop->iteration }}" type="radio" name="tabs2">
                                    <label class="block p-5 leading-normal cursor-pointer text-sm" for="tab-single-{{ $loop->iteration }}">
                                        <span class="font-bold text-base">{{ $l->nama_konseli }}</span> <br>
                                        {{ $l->hari }}, Pukul {{ $l->waktu }}
                                    </label>
                                    <!-- <label class="block pb-5 px-5 leading-normal cursor-pointer font-bold" for="tab-single-one">{{ $l->hari }}, Pukul {{ $l->waktu }}</label> -->
                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal px-2 flex flex-col">
                                    <div class="flex flex-row p-2 items-center">
                                            <p class="w-1/4">Ruang</p>
                                            <p class="block rounded-full bg-danger text-white px-4 py-1">{{ $l->pengajuan->ruang }}</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="w-1/4">Topik</p>
                                            <p class="block rounded-full bg-warning text-white px-4 py-1">{{ $l->topik }}</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="w-1/4">Hasil</p>
                                            <p class="block rounded bg-gray-500 text-white px-4 py-1">{{ $l->hasil }}</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="w-1/4">Solusi</p>
                                            <p class="block rounded bg-gray-500 text-white px-4 py-1">{{ $l->solusi }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection