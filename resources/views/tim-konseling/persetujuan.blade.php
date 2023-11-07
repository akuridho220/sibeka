@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col">
        <main class="w-full flex-grow p-6 min-h-screen">
            <div class="container mx-auto">
                <h2 class="text-2xl font-bold mb-4 text-center">Daftar Pengajuan Konseling</h2>

                <table class="min-w-full bg-white border border-gray-300 text-center mx-10">
                    <thead style="background-color: #0997BC;" class="text-white font-bold">
                        <tr>
                            <th class="py-2 px-4 border-b">No</th>
                            <th class="py-2 px-4 border-b">Pihak yang Mengajukan</th>
                            <th class="py-2 px-4 border-b">Waktu</th>
                            <th class="py-2 px-4 border-b">Detail</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #EEEEEE;">
                        <!-- Data Rows Go Here -->
                        <tr>
                            <td class="py-2 px-4 border-b">1</td>
                            <td class="py-2 px-4 border-b">Konselor A</td>
                            <td class="py-2 px-4 border-b">Waktu A</td>
                            <td class="py-2 px-4 border-b">
                                <button id="openModal1" class="text-white py-1 px-2 rounded" style="background-color: #FFC436;">Detail</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-2 px-4 border-b">2</td>
                            <td class="py-2 px-4 border-b">Mahasiswa B</td>
                            <td class="py-2 px-4 border-b">Waktu B</td>
                            <td class="py-2 px-4 border-b">
                                <button id="openModal2" class="text-white py-1 px-2 rounded" style="background-color: #FFC436;">Detail</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>           
        </main>
    </div>

    <!-- Modal Konselor -->
    <div id="myModal1" class="modal hidden fixed inset-0 bg-gray-950 flex items-center justify-center">
        <div class="modal-content bg-white p-6 rounded shadow-lg mx-auto w-1/2 relative" style="left: 115px;">
            <span id="closeModal1" class="modal-close cursor-pointer absolute top-2 right-2 p-4 text-2xl" style="right: 0; top: -10px;">&times;</span>
            <h2 class="text-2xl font-bold mb-4 text-center">Penjadwalan Konselor</h2>

            <!-- Isi form modal -->
            <form class="flex flex-col mt-4">
                <!-- Tambahkan elemen form sesuai kebutuhan -->
                <div class="mb-4 flex items-center">
                    <label for="namaKonseli" class="w-1/3">Nama Konseli</label>
                    <input type="text" id="namaKonseli" name="namaKonseli" class="p-2 border rounded w-2/3" value="Mahasiswa A" readonly>
                </div>
                <div class="mb-4 flex items-center">
                    <label for="namaKonselor" class="w-1/3">Nama Konselor</label>
                    <input type="text" id="namaKonselor" name="namaKonselor" class="p-2 border rounded w-2/3" value="Konselor A" readonly>
                </div>
                <div class="mb-4 flex items-center">
                    <label for="waktu" class="w-1/3">Waktu Pertemuan</label>
                    <input type="text" id="waktu" name="waktu" class="p-2 border rounded w-2/3" value="Waktu A" readonly>
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

                <button type="submit" class="text-white font-bold py-2 px-4 w-1/4 rounded mx-auto" style="background-color: #62ff7b;">
                    Setujui
                </button>
            </form>
        </div>
    </div>

    <!-- Modal Konseli -->
    <div id="myModal2" class="modal hidden fixed inset-0 bg-gray-950 flex items-center justify-center">
        <div class="modal-content bg-white p-6 rounded shadow-lg mx-auto w-1/2 relative" style="left: 115px;">
            <span id="closeModal2" class="modal-close cursor-pointer absolute top-2 right-2 p-4 text-2xl" style="right: 0; top: -10px;">&times;</span>
            <h2 class="text-2xl font-bold mb-4 text-center">Penjadwalan Konseli</h2>

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
        <button type="submit" class="text-white font-bold py-2 px-4 w-1/4 rounded mx-auto" style="background-color: #ff7e62;">
        Ajukan Ulang
        </button>

        <!-- Additional button (Ajukan Ulang) -->
        <button type="button" class="text-white font-bold py-2 px-4 w-1/4 ml-4 rounded mx-auto" style="background-color: #62ff7b;">
        Setujui
        </button>
    </div>
</form>

        </div>
    </div>

    <script>
        // JavaScript untuk mengatur tampilan modal Konselor
        const openModalBtn1 = document.getElementById('openModal1');
        const closeModalBtn1 = document.getElementById('closeModal1');
        const modal1 = document.getElementById('myModal1');

        openModalBtn1.addEventListener('click', () => {
            modal1.classList.remove('hidden');
        });

        closeModalBtn1.addEventListener('click', () => {
            modal1.classList.add('hidden');
        });

        // JavaScript untuk mengatur tampilan modal Konseli
        const openModalBtn2 = document.getElementById('openModal2');
        const closeModalBtn2 = document.getElementById('closeModal2');
        const modal2 = document.getElementById('myModal2');

        openModalBtn2.addEventListener('click', () => {
            modal2.classList.remove('hidden');
        });

        closeModalBtn2.addEventListener('click', () => {
            modal2.classList.add('hidden');
        });
    </script>
@endsection