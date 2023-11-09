@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col relative top-16">
        <main class="w-full flex-grow p-2 md:p-6 min-h-screen">
            <div class="w-full md:w-5/6 flex flex-col items-center mx-auto">
                <h1 class="text-3xl text-black pb-6">Dashboard</h1>
                <div class="flex  flex-col md:flex-row w-full items-center justify-between mx-auto border-b-2 pb-5">
                    <div class="bg-gray-200 p-4 rounded-lg flex flex-col items-center w-3/4 mx-2 my-2">
                        <p class="font-semibold text-2xl">24</p>
                        <p>Total konseling</p>
                    </div>
                    <div class="bg-gray-200 p-4 rounded-lg flex flex-col items-center w-3/4 mx-2 my-2">
                        <p class="font-semibold text-2xl">16</p>
                        <p>Mahasiswa tingkat 4</p>
                    </div>
                    <div class="bg-gray-200  p-4 rounded-lg flex flex-col items-center w-3/4 mx-2 my-2">
                        <p class="font-semibold text-2xl">12</p>
                        <p>Topik masalah akademik</p>
                    </div>
                </div>
                <div class="flex flex-col w-full mt-6 mb-6 border-b-2">
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
                <div class="w-full mb-8">
                    <p class="mb-4 font-semibold mr-auto">Unduh Data Konseling</p>
                    <form action="" class="flex flex-row items-center">
                        <button class="bg-accept font-semibold py-2 px-4 rounded-lg mr-8">Unduh</button>
                        <p class="text-sm">Format unduhan adalah xlsx</p>
                    </form>
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