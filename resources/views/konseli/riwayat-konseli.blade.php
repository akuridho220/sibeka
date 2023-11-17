@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col mt-16">
        <main class="w-full flex flex-grow justify-center p-2 md:p-6 min-h-screen">
            <div class="flex flex-col items-center bg-white lg:w-2/3 w-full rounded-lg border drop-shadow-lg overflow-auto">
                <div class="flex flex-col justify-center py-4 px-2">
                    <h1 class="font-bold ">Riwayat Konseling</h1>
                </div>
                <div class="flex flex-col w-full items-center">
                    <div class="flex flex-row py-2 mx-auto">
                        <form action="" class="w-full grow flex flex-col items-center md:flex-row">
                            <p class="p-2">Filter :</p>
                            <input type="date" name="" id="" class="px-2 rounded-lg border-2" placeholder="Tanggal Awal">
                            <p class="p-2">sampai</p>
                            <input type="date" name="" id="" class="px-2 rounded-lg border-2" placeholder="Tanggal Akhir">
                        </form>
                    </div>
                    <div class="w-full">
                        <div class="w-full mx-auto md:p-8 p-4">
                            <div class="shadow-md">
                            @foreach ($laporans as $l)
                                <div class="tab w-full overflow-hidden border-t text-sm md:text-base">
                                    <input class="absolute opacity-0" id="tab-single-{{ $loop->iteration }}" type="radio" name="tabs2">
                                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-{{ $loop->iteration }}">
                                        {{ $l->hari }}, Pukul {{ $l->waktu }}
                                    </label>
                                    <!-- <label class="block pb-5 px-5 leading-normal cursor-pointer font-bold" for="tab-single-one">{{ $l->hari }}, Pukul {{ $l->waktu }}</label> -->
                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal px-2 flex flex-col">
                                    <div class="flex flex-row p-2 items-center">
                                            <p class="w-1/4">Ruang</p>
                                            <p class="block rounded-full bg-danger text-white px-4 py-1">{{ $l->pengajuan->ruang }}</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="w-1/4">Konselor</p>
                                            <p class="block rounded-full bg-accept text-white px-4 py-1">{{ $l->nama_konselor }}</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="w-1/4">Topik</p>
                                            <p class="block rounded-full bg-warning text-white px-4 py-1">{{ $l->topik }}</p>
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