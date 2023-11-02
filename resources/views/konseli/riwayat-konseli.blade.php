@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col">
        <main class="w-full flex flex-grow justify-center p-2 md:p-6 min-h-screen">
            <div class="flex flex-col items-center bg-white lg:w-2/3 w-5/6 rounded-lg border drop-shadow-lg overflow-auto">
                <div class="flex flex-col justify-center py-4 px-2">
                    <h1 class="font-bold ">Riwayat Konseling</h1>
                </div>
                <div class="flex flex-col w-full items-center">
                    <div class="flex flex-row py-2 mx-auto">
                        <form action="" class="w-full grow flex flex-row">
                            <p class="p-2">Filter :</p>
                            <input type="date" name="" id="" class="px-2 rounded-lg border-2">
                            <p class="p-2">sampai</p>
                            <input type="date" name="" id="" class="px-2 rounded-lg border-2">
                        </form>
                    </div>
                    <div class="w-full">
                        <div class="w-full mx-auto md:p-8 p-4">
                            <div class="shadow-md">
                                <div class="tab w-full overflow-hidden border-t text-sm md:text-base">
                                    <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-one">24 November 2023, Pukul 13.00 - 15.00 WIB</label>
                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal px-2 flex flex-col">
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Ruang</p>
                                            <p class="flex rounded-full danger px-2 py-1">Ruang Konseling 1</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Konselor</p>
                                            <p class="flex rounded-full  accept px-2 py-1">Firdaus, MBA</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Topik</p>
                                            <p class="flex rounded-full  warning px-2 py-1">Akademik</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab w-full overflow-hidden border-t text-sm md:text-base">
                                    <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
                                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-two">24 Oktober 2023, Pukul 13.00 - 15.00 WIB</label>
                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal px-2 flex flex-col">
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Ruang</p>
                                            <p class="flex rounded-full danger px-2 py-1">Ruang Konseling 1</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Konselor</p>
                                            <p class="flex rounded-full  accept px-2 py-1">Firdaus, MBA</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Topik</p>
                                            <p class="flex rounded-full  warning px-2 py-1">Akademik</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab w-full overflow-hidden border-t text-sm md:text-base">
                                    <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
                                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-three">24 September 2023, Pukul 13.00 - 15.00 WIB</label>
                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal px-2 flex flex-col">
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Ruang</p>
                                            <p class="flex rounded-full danger px-2 py-1">Ruang Konseling 1</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Konselor</p>
                                            <p class="flex rounded-full  accept px-2 py-1">Firdaus, MBA</p>
                                        </div>
                                        <div class="flex flex-row p-2 items-center">
                                            <p class="flex w-1/3">Topik</p>
                                            <p class="flex rounded-full  warning px-2 py-1">Akademik</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection