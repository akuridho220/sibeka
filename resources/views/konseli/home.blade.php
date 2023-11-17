@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col mt-16">
        <main class="w-full flex-grow px-12 py-8">
            <p class="text-3xl font-bold secondary-color pb-2">Jadwal Pertemuan</p>
            <div class="box-content max-w-sm border-1 p-6 rounded-lg {{ $lastPengajuan->status == 2 ? '' : 'hidden' }}" style="background-color: #0997BC;">
                <div class="grid grid-cols-2">
                    <p class="font-semibold text-white">Hari/Tanggal</p>
                    <p class="font-semibold text-white">{{ $lastPengajuan->hari }}</p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="font-semibold text-white">Jam</p>
                    <p class="font-semibold text-white">{{ $lastPengajuan->waktu }}</p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="font-semibold text-white">Tempat</p>
                    <p class="font-semibold text-white">{{ $lastPengajuan->ruang }}</p>
                </div>
                <div class="grid grid-cols-2">
                    <p class="font-semibold text-white">Nama Konselor</p>
                    <p class="font-semibold text-white">
                        @if($lastPengajuan->konselor != null)
                            {{ $lastPengajuan->konselor->nama }}
                        @endif
                    </p>
                </div>
            </div>
            <div class="box-content max-w-sm border-1 p-6 rounded-xl {{ $lastPengajuan == null || $lastPengajuan->status == 3 ? '' : 'hidden' }}" style="background-color: #d9d9d9;">
                <div class="flex flex-col justify-center items-center">
                <img src="img/ban-solid.png" class="h-32 w-34 pb-2">
                <p class="font-semibold">Anda tidak mengajukan pertemuan konseling</p>
                </div>
            </div>
            <div class="box-content max-w-sm border-1 p-6 rounded-xl {{ $lastPengajuan->status == 1 ? '' : 'hidden' }}" style="background-color: #d9d9d9;">
                <div class="flex flex-col justify-center items-center">
                <img src="img/arrows-rotate-solid.png" class="h-32 w-34 pb-2">
                <p class="font-semibold">Pengajuan belum terjadwal</p>
                </div>
            </div>
            <div class="box-content max-w-sm border-1 p-6 rounded-xl {{ $lastPengajuan->status == 4 ? '' : 'hidden' }}" style="background-color: #d9d9d9;">
                <div class="flex flex-col justify-center items-center">
                <img src="img/undo.png" class="h-32 w-34 pb-2">
                <p class="font-semibold pb-2 text-center">Jadwal yang Anda pilih penuh, harap ajukan ulang</p>
                <a href="{{ route('pengajuans.edit', $lastPengajuan->id) }}">
                    <button class="font-semibold text-white py-2 px-4 rounded-lg" style="background-color: #0997BC;">Ajukan ulang</button>
                </a>
                </div>
            </div>
        </main>
    </div>
@endsection