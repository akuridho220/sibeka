@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col mt-16">
        <main class="w-full flex flex-grow justify-center p-2 md:p-6">
            <div class="flex flex-col items-center bg-white lg:w-2/3 w-5/6 rounded-lg border drop-shadow-lg overflow-auto">
                <div class="flex flex-row items-center justify-between">
                    <p class="font-semibold text-center text-lg w-full mb-1 p-4 md:text-xl">Formulir Pendaftaran Konseling</p>
                </div>
                <form class="w-full lg:w-4/5 px-4 md:px-10" novalidate action="/pendaftaran" method="post" onsubmit="return validasiForm()">
                    @csrf
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Nama</label>
                        <input type="text" id="nama_konseli" name="nama_konseli" class="w-full bg-gray-300 h-10 p-2" value="{{ auth()->user()->nama }}" readonly>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">NIM</label>
                        <input type="text" id="nim" name="nim_konseli" class="w-full bg-gray-300 h-10 p-2" value="{{ auth()->user()->nim }}" readonly>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Kelas</label>
                        <input type="text" id="kelas" name="kelas_konseli" class="w-full bg-gray-300 h-10 p-2">
                    </div>
                    {{-- <div class="p-2">
                        <label class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Tingkat</label>
                        <select type="text" id="tingkat" name="tingkat_konseli" class="bg-gray-200 h-10 p-2 w-full">
                            <option value=""disabled selected>Pilih tingkat</option>
                            <option value="1">Tingkat I</option>
                            <option value="2">Tingkat II</option>
                            <option value="3">Tingkat III</option>
                            <option value="4">Tingkat IV</option>
                        </select>
                        <span class="text-xs text-red-500" id="vtingkat"></span>
                    </div> --}}
                    <input type="hidden" name="jk_konseli" value="{{ auth()->user()->jk }}">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Nomor HP</label>
                        <input type="number" id="nomorhp" name="nomor_hp" class="w-full bg-gray-200 h-10 p-2">
                        <span class="text-xs text-red-500" id="vnomorhp"></span>
                    </div>                    
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Tanggal dan Waktu 1</label>
                        <input type="date" name="hari_1" class="w-full bg-gray-200 h-10 p-2" name="" id="firstDay" onchange="updateTimeOptions('firstDay', 'time1', 'vfirstDay')">
                        <span class="text-xs text-red-500" id="vfirstDay"></span>
                        <select id="time1" name="waktu_1" class="bg-gray-200 h-10 p-2 w-full mt-1" disabled>
                            <option value="" disabled selected>Pilih waktu</option>
                        </select>
                        <span class="text-xs text-red-500" id="vtime1"></span>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Tanggal dan Waktu 2</label>
                        <input type="date" name="hari_2" class="w-full bg-gray-200 h-10 p-2" name="" id="secondDay" onchange="updateTimeOptions('secondDay', 'time2', 'vsecondDay')">
                        <span class="text-xs text-red-500" id="vsecondDay"></span>
                        <select id="time2" name="waktu_2" class="bg-gray-200 h-10 p-2 w-full mt-1" disabled>
                            <option value="" disabled selected>Pilih waktu</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Pilih Jenis Kelamin Konselor yang Nyaman</label>
                        <select id="jk_konselor" name="jk_konselor" class="bg-gray-200 h-10 p-2 w-full">
                            <option value="" disabled selected>Pilih Konselor</option>
                            <option value="Bapak">Bapak</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Boleh keduanya">Boleh keduanya</option>
                        </select>
                        <span class="text-xs text-red-500" id="vjk_konselor"></span>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold after:content-['*'] after:ml-0.5 after:text-red-500">Apakah Bapak/Ibu Konselor diizinkan untuk ditemani Konselor yang lain?</label>
                        <select id="ditemani_konselor" name="opsi_ditemani" class="bg-gray-200 h-10 p-2 w-full">
                            <option value="" disabled selected>Pilih opsi</option>
                            <option value="Boleh">Ya, boleh</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                        <span class="text-xs text-red-500" id="vditemani_konselor"></span>
                    </div>
                    
                    <div class="p-2 flex items-center justify-center">
                        <button type="submit" class="block bg-yellow-500 hover:bg-yellow-600 font-bold p-3 rounded">
                            Submit
                        </button>
                    </div>
                </form>   
            </div>
        </main>
    </div>
    <script>
        const today = new Date()
        const tomorrow = new Date(today)
        tomorrow.setDate(tomorrow.getDate() + 1);

        let year = tomorrow.toLocaleString("default", { year: "numeric" });
        let month = tomorrow.toLocaleString("default", { month: "2-digit" });
        let day = tomorrow.toLocaleString("default", { day: "2-digit" });

        let aweek = new Date(today)
        aweek.setDate(aweek.getDate() + 7);

        // Generate yyyy-mm-dd date string
        let formattedDate = year + "-" + month + "-" + day;

        //minimal hari
        document.getElementById("firstDay").setAttribute("min", formattedDate);
        document.getElementById("secondDay").setAttribute("min", formattedDate);



        

        function updateTimeOptions(dateInputId, timeSelectId, validateId) {
            const dateInput = document.getElementById(dateInputId);
            const timeSelect = document.getElementById(timeSelectId);
            const validate = document.getElementById(validateId);

            const selectedDate = new Date(dateInput.value);
            const selectedDayOfWeek = selectedDate.getDay(); 


            //jika hari yang diinputkan tidak sah
            if (selectedDayOfWeek === 5 || selectedDayOfWeek === 6 || selectedDayOfWeek === 0) {
                dateInput.value = ''; // Reset the date input
                timeSelect.setAttribute("disabled", "disabled"); // Disable the time select as no date is selected
                timeSelect.innerHTML = '<option value="" disabled selected>Pilih waktu...</option>'; // Reset the time options
                timeSelect.classList.add("border");
                timeSelect.classList.add("border-red-700");
                validate.textContent = "Harap mengisikan hari Senin-Kamis";
                return; // Exit the function as we don't want to proceed in this case
            }

            // Define options for Monday and Tuesday
            const TuesdayOptions = `
                <option value="" disabled selected>Pilih waktu...</option>
                <option value="09:00-10:00">09:00-10:00</option>
                <option value="10:00-11:00">10:00-11:00</option>
                <option value="13:00-14:00">13:00-14:00</option>
                <option value="14:00-15:00">14:00-15:00</option>
            `;

            // Define options for Wednesday and Thursday
            const OtherOptions = `
                <option value="" disabled selected>Pilih waktu...</option>
                <option value="10:00-11:00">10:00-11:00</option>
                <option value="11:00-12:00">11:00-12:00</option>
                <option value="13:00-14:00">13:00-14:00</option>
                <option value="14:00-15:00">14:00-15:00</option>
            `;

            // Enable the time select and update options based on the selected day
            if (selectedDayOfWeek === 2) {
                timeSelect.innerHTML = TuesdayOptions;
                timeSelect.classList.remove("border");
                timeSelect.classList.remove("border-red-700");
                validate.textContent = "";
            } else {
                timeSelect.innerHTML = OtherOptions;
                timeSelect.classList.remove("border");
                timeSelect.classList.remove("border-red-700");
                validate.textContent = "";
            } 

            // Enable or disable the select based on the selected day
            if (selectedDayOfWeek === 1 || selectedDayOfWeek === 2 || selectedDayOfWeek === 3 || selectedDayOfWeek === 4) {
                timeSelect.removeAttribute("disabled");
                timeSelect.classList.remove("border");
                timeSelect.classList.remove("border-red-700");
                validate.textContent = "";
            } else {
                timeSelect.setAttribute("disabled", "disabled");
            }
        }

        function validasiForm() {
            let tingkat = document.getElementById("tingkat");
            let nomorhp = document.getElementById("nomorhp");
            let konselor = document.getElementById("jk_konselor");
            let ditemani = document.getElementById("ditemani_konselor");
            let firstDay = document.getElementById("firstDay");
            let time1 = document.getElementById("time1");
            let rtn = true;

            var inputan = [
                { elem: tingkat, id: "vtingkat" },
                { elem: nomorhp, id: "vnomorhp" },
                { elem: konselor, id: "vjk_konselor" },
                { elem: ditemani, id: "vditemani_konselor" },
                { elem: firstDay, id: "vfirstDay"},
                { elem: time1, id: "vtime1"}
            ];

            function validasi(input) {
                if (input.elem.value == "") {
                input.elem.classList.add("border");
                input.elem.classList.add("border-red-700");
                document.getElementById(input.id).textContent = "Isian tidak boleh kosong";
                rtn = false;
                } else {
                input.elem.classList.remove("border");
                input.elem.classList.remove("border-red-700");
                document.getElementById(input.id).textContent = "";
                }
            }

            inputan.forEach(validasi);

            return rtn;
        }

    </script>
@endsection