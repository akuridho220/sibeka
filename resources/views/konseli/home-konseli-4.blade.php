@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col">
        <main class="w-full flex-grow px-12 py-8 min-h-screen">
            <p class="text-3xl font-bold secondary-color pb-2">Jadwal Pertemuan</p>

            <div class="box-content max-w-sm border-1 p-6 rounded-xl" style="background-color: #d9d9d9;">
                <div class="flex flex-col justify-center items-center">
                <img src="img/undo.png" class="h-32 w-34 pb-2">
                <p class="font-semibold pb-2">Jadwal penuh, ajukan pendaftaran ulang</p>
                <button class="font-semibold text-white py-2 px-4 rounded-lg" style="background-color: #0997BC;">Ajukan ulang</button>
                </div>
            </div>
        </main>
    </div>
@endsection