@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col mt-16">
        <main class="w-full flex flex-grow justify-center p-2 md:p-6 min-h-screen">
            <!-- <div class="flex flex-col justify-center items-center border-solid border-2 border-black"> -->
            <div class="flex flex-col items-center bg-white lg:w-2/3 w-5/6 rounded-lg border drop-shadow-lg overflow-auto">
                <div>
                    <p class="font-semibold text-center text-lg w-full mb-1 p-4 md:text-xl">Formulir Laporan Konseling</p>
                </div>
                <form class="w-full lg:w-4/5 px-4 md:px-10" id="formLaporan" action="/konselor-laporan/{{ $pengajuan->id }}" method="post" onsubmit="return validasiForm()">
                    @csrf
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Nama Konselor</label>
                        <input type="text" id="nama_konselor" name="nama_konselor" class="w-full bg-gray-300 h-10 p-2" value="{{ $pengajuan->konselor->nama }}" readonly>
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Waktu Konseling</label>
                        <input type="text" id="tanggal_konseling" name="hari" class="w-1/2 bg-gray-300 h-10 p-2" value="{{ $pengajuan->hari }}" readonly>
                        <input type="text" id="waktu_konseling" name="waktu"  class="w-1/3 bg-gray-300 h-10 p-2" value="{{ $pengajuan->waktu }}" readonly>
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Nama Konseli</label>
                        <input type="text" id="nama_konseli" name="nama_konseli" class="w-full bg-gray-300 h-10 p-2" value="{{ $pengajuan->konseli->nama }}" readonly>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">NIM Konseli</label>
                        <input type="text" id="nim" name="nim_konseli" class="w-full bg-gray-300 h-10 p-2" value="{{ $pengajuan->nim_konseli }}" readonly>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Jenis Kelamin Konseli</label>
                        <input type="text" id="jk_konseli" name="jk_konseli" class="w-full bg-gray-300 h-10 p-2" value="{{ $pengajuan->jk_konseli }}" readonly>
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Program Studi</label>
                        <input type="text" id="prodi" name="prodi_konseli" class="w-full bg-gray-300 h-10 p-2" value="D-IV Komputasi Statistik" readonly>
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Kelas</label>
                        <input type="text" id="kelas" name="kelas_konseli" class="w-full bg-gray-300 h-10 p-2" value="3SI3" readonly>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Klasifikasi Permasalahan Utama</label>
                        <select id="klasifikasi" name="topik" class="bg-gray-200 h-10 p-2 w-full">
                            <option disabled selected value="">Pilih permasalahan utama</option>
                            <option value="Akademik">Akademik</option>
                            <option value="Keluarga">Keluarga</option>
                            <option value="Pertemanan">Pertemanan</option>
                            <option value="Lingkungan">Lingkungan</option>
                        </select>
                        <span class="text-xs text-red-500" id="vklasifikasi"></span>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Hasil Konseling</label>
                        <textarea class="w-full bg-gray-200 h-fit p-2" id="hasil" name="hasil" placeholder="Deskripsikan hasil konseling"></textarea>
                        <span class="text-xs text-red-500" id="vhasil"></span>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Solusi</label>
                        <textarea class="w-full bg-gray-200 h-fit p-2" id="solusi" name="solusi" placeholder="Deskripsikan solusi konseling"></textarea>
                        <span class="text-xs text-red-500" id="vsolusi"></span>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Tindak Lanjut</label>
                        <select id="tindak_lanjut" class="bg-gray-200 h-10 p-2 w-full" onchange="updateLanjutan()">
                            <option disabled selected value="">Pilih opsi</option>
                            <option value="tidak-ada">Selesai</option>
                            <option value="lanjut">Konsultasi Lanjutan</option>
                        </select>
                        <span class="text-xs text-red-500" id="vtindak_lanjut"></span>
                    </div>
                    
                    <!-- hanya muncul saat tindak lanjut memilih ada pertemuan lanjutan -->
                    <div id="opsiLanjut" class="hidden">
                        <div class="p-2">
                            <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Tanggal Pertemuan Lanjutan</label>
                            <input type="date" class="w-full bg-gray-200 h-10 p-2" name="" id="selectDay" onchange="updateTimeOptions('selectDay', 'selectTime')">
                        </div>
                        <div class="p-2">
                            <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Waktu Pertemuan Lanjutan</label>
                            <select class="bg-gray-200 h-10 p-2 w-full" id="selectTime" disabled>
                                <option disabled selected>Pilih waktu</option>
                            </select>
                        </div>
                    </div>
                    <div class="p-2 flex items-center justify-center">
                        <button type="submit" class="block bg-yellow-500 hover:bg-yellow-600 font-bold p-3 rounded">
                            Submit
                        </button>
                    </div>

                </form>
                
            </div>
            <script>
                const today = new Date()
                const tomorrow = new Date(today)
                tomorrow.setDate(tomorrow.getDate() + 1);

                let year = tomorrow.toLocaleString("default", { year: "numeric" });
                let month = tomorrow.toLocaleString("default", { month: "2-digit" });
                let day = tomorrow.toLocaleString("default", { day: "2-digit" });

                // Generate yyyy-mm-dd date string
                let formattedDate = year + "-" + month + "-" + day;

                // minimal hari
                document.getElementById("selectDay").setAttribute("min", formattedDate);


                function updateLanjutan() {
                    let lanjutan = document.getElementById("tindak_lanjut");
                    let opsi = document.getElementById("opsiLanjut");
                    if(lanjutan.value === "lanjut") {
                        opsi.style.display = "block";
                    } else {
                        opsi.style.display = "none";
                    }
                }

                function updateTimeOptions(dateInputId, timeSelectId) {
                    const dateInput = document.getElementById(dateInputId);
                    const timeSelect = document.getElementById(timeSelectId);

                    const selectedDate = new Date(dateInput.value);
                    const selectedDayOfWeek = selectedDate.getDay(); 
                    
                    if (selectedDayOfWeek === 5 || selectedDayOfWeek === 6 || selectedDayOfWeek === 0) {
                        dateInput.value = ''; // Reset the date input
                        timeSelect.setAttribute("disabled", "disabled"); // Disable the time select as no date is selected
                        timeSelect.innerHTML = '<option value="" disabled selected>Pilih waktu</option>'; // Reset the time options
                        return; // Exit the function as we don't want to proceed in this case
                    }

                    // Define options for Monday and Tuesday
                    const TuesdayOptions = `
                        <option value="" disabled selected>Pilih waktu</option>
                        <option value="09:00-10:00">09:00-10:00</option>
                        <option value="10:00-11:00">10:00-11:00</option>
                        <option value="13:00-14:00">13:00-14:00</option>
                        <option value="14:00-15:00">14:00-15:00</option>
                    `;

                    // Define options for Wednesday and Thursday
                    const OtherOptions = `
                        <option value="" disabled selected>Pilih waktu</option>
                        <option value="10:00-11:00">10:00-11:00</option>
                        <option value="11:00-12:00">11:00-12:00</option>
                        <option value="13:00-14:00">13:00-14:00</option>
                        <option value="14:00-15:00">14:00-15:00</option>
                    `;

                    // Enable the time select and update options based on the selected day
                    if (selectedDayOfWeek === 2) {
                        timeSelect.innerHTML = TuesdayOptions;
                    } else {
                        timeSelect.innerHTML = OtherOptions;
                    } 

                    // Enable or disable the select based on the selected day
                    if (selectedDayOfWeek === 1 || selectedDayOfWeek === 2 || selectedDayOfWeek === 3 || selectedDayOfWeek === 4) {
                        timeSelect.removeAttribute("disabled");
                    } else {
                        timeSelect.setAttribute("disabled", "disabled");
                    }
                }

                function validasiForm() {
                    //let pattern = /^[^\\[\\]{}()*+?|^$.\\\/-]+$/ //pattern yg tidak diperbolehkan
                    let hasilKonseling = document.getElementById("hasil");
                    let solusiKonseling = document.getElementById("solusi");
                    let klasifikasi = document.getElementById("klasifikasi");
                    let lanjutan = document.getElementById("tindak_lanjut");
                    
                    let rtn = true;

                    //klasifikasi tidak boleh kosong
                    if(klasifikasi.value == "") {
                        klasifikasi.classList.add("border");
                        klasifikasi.classList.add("border-red-700");
                        document.getElementById("vklasifikasi").textContent = "Isian tidak boleh kosong";
                        rtn = false;
                    } else {
                        klasifikasi.classList.remove("border");
                        klasifikasi.classList.remove("border-red-700");
                        document.getElementById("vklasifikasi").textContent = "";
                    }

                    //hasil konseling tidak boleh kosong
                    if(hasilKonseling.value == "") {
                        hasilKonseling.classList.add("border");
                        hasilKonseling.classList.add("border-red-700");
                        document.getElementById("vhasil").textContent = "Isian tidak boleh kosong";
                        rtn = false;
                    } else {
                        hasilKonseling.classList.remove("border");
                        hasilKonseling.classList.remove("border-red-700");
                        document.getElementById("vhasil").textContent = "";
                    }

                    //solusi konseling tidak boleh kosong
                    if(solusiKonseling.value == "") {
                        solusiKonseling.classList.add("border");
                        solusiKonseling.classList.add("border-red-700");
                        document.getElementById("vsolusi").textContent = "Isian tidak boleh kosong";
                        rtn = false;
                    } else {
                        solusiKonseling.classList.remove("border");
                        solusiKonseling.classList.remove("border-red-700");
                        document.getElementById("vsolusi").textContent = "";
                    }
                    
                    //tindak lanjut tidak boleh kosong
                    if(lanjutan.value == "") {
                        lanjutan.classList.add("border");
                        lanjutan.classList.add("border-red-700");
                        document.getElementById("vtindak_lanjut").textContent = "Isian tidak boleh kosong";
                        rtn = false;
                    } else {
                        lanjutan.classList.remove("border");
                        lanjutan.classList.remove("border-red-700");
                        document.getElementById("vtindak_lanjut").textContent = "";
                    }

                    // //konseling lanjutan tidak boleh kosong (jika konselor memilih ada konseling lanjutan)
                    // if(opsi.style.display == "block" && tanggalLanjutan.value == "") {
                    //     tanggalLanjutaan.classList.add("border");
                    //     tanggalLanjutan.classList.add("border-red-700");
                    //     rtn = false;
                    // } else {
                    //     tanggalLanjutan.classList.remove("border");
                    //     tanggalLanjutan.classList.remove("border-red-700");
                    // }

                    // if(opsi.style.display == "block" && waktuLanjutan.value == "") {
                    //     waktuLanjutaan.classList.add("border");
                    //     waktuLanjutan.classList.add("border-red-700");
                    //     rtn = false;
                    // } else {
                    //     waktuLanjutan.classList.remove("border");
                    //     waktuLanjutan.classList.remove("border-red-700");
                    // }

                    return rtn;
                }
                
            </script>
        </main>
    </div>
@endsection