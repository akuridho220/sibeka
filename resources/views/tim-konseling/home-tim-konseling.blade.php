@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col">
        <main class="w-full flex-grow p-6 min-h-screen">
            <div class="w-5/6 flex flex-col items-center mx-auto">
                <h1 class="text-3xl text-black pb-6">Dashboard</h1>
                <div class="flex flex-row w-full items-center justify-between mx-auto border-b-2 pb-5">
                    <div class="bg-gray-200 p-4 rounded-lg flex flex-col items-center">
                        <p class="font-semibold text-2xl">24</p>
                        <p>Jumlah konseling</p>
                    </div>
                    <div class="bg-gray-200 p-4 rounded-lg flex flex-col items-center">
                        <p class="font-semibold text-2xl">16</p>
                        <p>Mahasiswa tingkat 4</p>
                    </div>
                    <div class="bg-gray-200  p-4 rounded-lg flex flex-col items-center">
                        <p class="font-semibold text-2xl">12</p>
                        <p>Topik masalah akademik</p>
                    </div>
                </div>
                <div class="flex flex-col w-full flex-wrap mt-6">
                    <div class="w-full mt-4">
                        <div class="p-4 bg-white">
                            {!! $genderChart->container() !!}
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <div class="p-4 bg-white">
                            {!! $topikChart->container() !!}
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <div class="p-4 bg-white">
                            {!! $tingkatProdiChart->container() !!}
                        </div>
                    </div>
                </div> 
            </div>
        </main>
    </div>
    <script src="{{ $genderChart->cdn() }}"></script>
    {{ $genderChart->script() }}
    <script src="{{ $topikChart->cdn() }}"></script>
    {{ $topikChart->script() }}
    <script src="{{ $tingkatProdiChart->cdn() }}"></script>
    {{ $tingkatProdiChart->script() }}
@endsection