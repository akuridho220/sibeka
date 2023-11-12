@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-auto flex flex-col relative top-16">
        <main class="w-full flex-grow md:p-6 min-h-screen">
            <div class="container mx-auto lg:w-2/3 w-5/6" id="container">
                <h2 class="text-3xl lg:text-4xl xl:text-5xl font-bold mb-4 text-center">Daftar Pengajuan Konseling</h2>
                <table class="w-full bg-white border border-gray-300 text-center mx-auto">
                    <thead style="background-color: #0997BC;" class="text-white font-bold">
                        <tr>
                            <th class="py-2 px-4 border-b">No</th>
                            <th class="py-2 px-4 border-b">Pihak yang Mengajukan</th>
                            <th class="py-2 px-4 border-b">Detail</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #EEEEEE;">
                        <!-- Data Rows Go Here -->
                        @foreach ($pengajuans as $p)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                                <td class="py-2 px-4 border-b">{{ $p->user->nama }}</td>
                                <td class="py-2 px-4 border-b">
                                    <button id="openModal1" class="text-white py-1 px-2 rounded" style="background-color: #FFC436;">Detail</button>
                                </td>
                                <div id="myModal" class="modal hidden flex-col fixed w-full z-10">
                                    <div class="modal-content bg-white p-4 sm:p-6 rounded shadow-lg w-5/6 md:w-2/3 lg:w-1/2 border">
                                        <span id="closeModal1" class="modal-close cursor-pointer md:p-4 text-xl md:text-2xl">&times;</span>
                                        <h2 class="font-bold md:text-lg mb-4 text-center">Penjadwalan</h2>
                                        <!-- Isi form modal -->
                                        <form action="/pendaftaran/pengajuans/{{ $p->id }}" method="post" class="flex flex-col mt-2 sm:mt-4">
                                            @method('patch')
                                            @csrf
                                            <!-- Tambahkan elemen form sesuai kebutuhan -->
                                            <div class="mb-2 sm:mb-4 flex items-center">
                                                <label for="nama_konseli" class="w-1/3 lg:w-1/4">Nama Konseli</label>
                                                <input type="text" id="nama_konseli" name="nama_konseli" class="p-2 border rounded w-2/3" value="{{ $p->user->nama }}" readonly>
                                            </div>
                                            <div class="mb-2 sm:mb-4 flex items-center">
                                                <label for="nama_konselor" class="w-1/3 lg:w-1/4">Nama Konselor</label>
                                                <input type="text" id="nama_konselor" name="nama_konselor" class="p-2 border rounded w-2/3">
                                            </div>
                                            
                                            <div class="mb-2 sm:mb-4 flex items-center">
                                                <label for="waktu" class="w-1/3 lg:w-1/4">Waktu Pertemuan</label>
                                                <select id="waktu" name="waktu" class="bg-gray-200 h-10 p-2 w-2/3">
                                                    <option value="" disabled selected>Pilih Waktu Pertemuan</option>
                                                    <option value="{{ $p->hari_1 }}">{{ $p->hari_1.' pukul '.$p->waktu_1 }}</option>
                                                    <option value="{{ $p->hari_2 }}">{{ $p->hari_2.' pukul '.$p->waktu_2 }}</option>
                                                </select>
                                                <input type="hidden" name="" id="" value="">
                                            </div>
                                            <div class="mb-2 sm:mb-4 flex items-center">
                                                <label for="ruangan" class="w-1/3 lg:w-1/4">Ruangan Pertemuan</label>
                                                <select id="ruangan" name="ruang" class="p-2 border rounded w-2/3">
                                                    <option disabled selected>Pilih Ruangan</option>
                                                    <option value="X">Ruang X</option>
                                                    <option value="Y">Ruang Y</option>
                                                    <option value="Z">Ruang Z</option>
                                                </select>
                                            </div>   
                                            <div class="mb-4 flex items-center">
                                                <form method="post" action="/pendaftaran/pengajuans/{{ $p->id }}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="text-white font-bold py-2 px-4 rounded mx-auto" style="background-color: #ff7e62;">
                                                        Ajukan Ulang
                                                    </button>
                                                </form>
                                                <!-- Additional button (Ajukan Ulang) -->
                                                <button type="submit"  class="text-white font-bold py-2 px-4 ml-4 rounded mx-auto" style="background-color: #62ff7b;">
                                                    Setujui
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
            {{-- <!-- Modal Konselor -->
            <div id="myModal1" class="modal hidden relative -top-36 items-center justify-center">
                <div class="modal-content bg-white p-4 sm:p-6 rounded shadow-lg w-3/4 md:w-2/3 lg:w-1/2 border">
                    <span id="closeModal1" class="modal-close cursor-pointer md:p-4 text-xl md:text-2xl">&times;</span>
                    <h2 class="font-bold md:text-lg mb-4 text-center">Penjadwalan Konselor</h2>

                    <!-- Isi form modal -->
                    <form class="flex flex-col mt-2 sm:mt-4">
                        @csrf
                        <!-- Tambahkan elemen form sesuai kebutuhan -->
                        <div class="mb-2 sm:mb-4 flex items-center">
                            <label for="namaKonseli" class="w-1/3 lg:w-1/4">Nama Konseli</label>
                            <input type="text" id="namaKonseli" name="namaKonseli" class="p-2 border rounded w-2/3" value="" readonly>
                        </div>
                        <div class="mb-2 sm:mb-4 flex items-center">
                            <label for="namaKonselor" class="w-1/3 lg:w-1/4">Nama Konselor</label>
                            <input type="text" id="namaKonselor" name="namaKonselor" class="p-2 border rounded w-2/3" value="Konselor A" readonly>
                        </div>
                        <div class="mb-2 sm:mb-4 flex items-center">
                            <label for="waktu" class="w-1/3 lg:w-1/4">Waktu Pertemuan</label>
                            <input type="text" id="waktu" name="waktu" class="p-2 border rounded w-2/3" value="Waktu A" readonly>
                        </div>
                        <div class="mb-2 sm:mb-4 flex items-center">
                            <label for="ruangan" class="w-1/3 lg:w-1/4">Ruangan Pertemuan</label>
                            <select id="ruangan" name="ruangan" class="p-2 border rounded w-2/3">
                                <option disabled selected>Pilih Ruangan</option>
                                <option value="X">Ruang X</option>
                                <option value="Y">Ruang Y</option>
                                <option value="Z">Ruang Z</option>
                            </select>
                        </div>   

                        <button type="submit" class="text-white font-bold py-1 sm:py-2 px-2 sm:px-4 w-1/3 sm:w-1/4 rounded mx-auto" style="background-color: #62ff7b;">
                            Setujui
                        </button>
                    </form>
                </div>
            </div>

            <!-- Modal Konseli -->
            <div id="myModal2" class="modal hidden relative -top-36 items-center justify-center">
                <div class="modal-content bg-white p-4 sm:p-6 rounded shadow-lg mx-auto w-3/4 md:w-2/3 lg:w-1/2 border">
                    <span id="closeModal2" class="modal-close cursor-pointer md:p-4 text-xl md:text-2xl">&times;</span>
                    <h2 class="font-bold md:text-lg mb-4 text-center">Penjadwalan Konseli</h2>

                    <!-- Isi form modal -->
                    <form class="flex flex-col mt-4">
                        <!-- Tambahkan elemen form sesuai kebutuhan -->
                        <div class="mb-4 flex items-center">
                            <label for="namaKonseli" class="w-1/3">Nama Konseli</label>
                            <input type="text" id="namaKonseli" name="namaKonseli" class="p-2 border rounded w-2/3" value="Mahasiswa B" readonly>
                        </div>
                        <div class="mb-4 flex items-center">
                            <label for="namaKonselor" class="w-1/3">Nama Konselor</label>
                            <select id="namaKonselor" name="namaKonselor" class="p-2 border rounded w-2/3">
                                <option disabled selected>Pilih Konselor</option>
                                <option value="A">Konselor A</option>
                                <option value="B">Konselor B</option>
                                <option value="C">Konselor C</option>
                            </select>
                        </div> 
                        <div class="mb-4 flex items-center">
                            <label for="waktu" class="w-1/3">Waktu Pertemuan</label>
                            <select id="waktu" name="waktu" class="p-2 border rounded w-2/3">
                                <option disabled selected>Waktu yang Diajukan</option>
                                <option value="A">Waktu A</option>
                                <option value="B">Waktu B</option>
                                <option value="C">Waktu C</option>
                            </select>
                        </div>   
                        <div class="mb-4 flex items-center">
                            <label for="ruangan" class="w-1/3">Ruangan Pertemuan</label>
                            <select id="ruangan" name="ruangan" class="p-2 border rounded w-2/3">
                                <option disabled selected>Pilih Ruangan</option>
                                <option value="X">Ruang X</option>
                                <option value="Y">Ruang Y</option>
                                <option value="Z">Ruang Z</option>
                            </select>
                        </div>   

                        <div class="mb-4 flex items-center">
                            <button type="submit" class="text-white font-bold py-2 px-4 rounded mx-auto" style="background-color: #ff7e62;">
                            Ajukan Ulang
                            </button>

                            <!-- Additional button (Ajukan Ulang) -->
                            <button type="button" class="text-white font-bold py-2 px-4 ml-4 rounded mx-auto" style="background-color: #62ff7b;">
                            Setujui
                            </button>
                        </div>
                    </form>

                </div>
            </div>          --}}
        </main>
    </div>



    <script>
        // JavaScript untuk mengatur tampilan modal Konselor
        const container = document.getElementById('container');
        const openModalBtn1 = document.getElementById('openModal1');
        const closeModalBtn1 = document.getElementById('closeModal1');
        const modal = document.getElementById('myModal');

        openModalBtn1.addEventListener('click', () => {
            modal.classList.replace('hidden', 'flex');
            //container.classList.add('blur-[2px]');
        });

        closeModalBtn1.addEventListener('click', () => {
            modal.classList.replace('flex','hidden');
            //container.classList.remove('blur-[2px]');
        });

        // JavaScript untuk mengatur tampilan modal Konseli
        const openModalBtn2 = document.getElementById('openModal2');
        const closeModalBtn2 = document.getElementById('closeModal2');
        const modal2 = document.getElementById('myModal2');

        openModalBtn2.addEventListener('click', () => {
            modal2.classList.replace('hidden', 'flex');
            //container.classList.add('blur-[2px]');
        });

        closeModalBtn2.addEventListener('click', () => {
            modal2.classList.replace('flex','hidden');
            //container.classList.remove('blur-[2px]');
        });


        $('.')
    </script>
@endsection