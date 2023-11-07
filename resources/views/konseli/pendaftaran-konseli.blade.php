@extends('layouts.main')
@section('content')
    <div class="w-full overflow-x-hidden flex flex-col">
        <main class="w-full flex flex-grow justify-center p-2 md:p-6 min-h-screen">
            <div class="flex flex-col items-center bg-white lg:w-2/3 w-5/6 rounded-lg border drop-shadow-lg overflow-auto">
                <div class="flex flex-row items-center justify-between">
                    <p class="font-semibold text-center text-lg w-full mb-1 p-4 md:text-xl">Formulir Pendaftaran Konseling</p>
                </div>
                <form class="w-full lg:w-4/5 px-4 md:px-10" action="" method="post">
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Nama</label>
                        <input type="text" id="nama_konseli" class="w-full bg-gray-200 h-10 p-2" >
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">NIM</label>
                        <input type="number" id="nim" class="w-full bg-gray-200 h-10 p-2">
                    </div>
                    <div class="p-2">
                        <label class="block mb-1 font-bold">Tingkat</label>
                        <select type="text" id="prodi" class="shadow-md border-black h-10 p-2" value="D-IV Komputasi Statistik" >
                            <option value=""disabled selected>Pilih tingkat...</option>
                            <option>Tingkat I</option>
                            <option>Tingkat II</option>
                            <option>Tingkat III</option>
                            <option>Tingkat IV</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Nomor HP</label>
                        <input type="number" id="nim" class="w-full bg-gray-200 h-10 p-2">
                    </div>                    
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Tanggal dan Waktu 1</label>
                        <input type="date" class="w-full bg-gray-200 h-10 p-2" name="" id="firstDay" onchange="updateTimeOptions('firstDay', 'time1')">
                        <select id="time1" class="shadow-md border-black h-10 p-2" disabled>
                            <option value="" disabled selected>Pilih waktu...</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Tanggal dan Waktu 2</label>
                        <input type="date" class="w-full bg-gray-200 h-10 p-2" name="" id="secondDay" onchange="updateTimeOptions('secondDay', 'time2')">
                        <select id="time2" class="shadow-md border-black h-10 p-2" disabled>
                            <option value="" disabled selected>Pilih waktu...</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Pilih Jenis Kelamin Konselor yang Nyaman</label>
                        <select id="tindak_lanjut" class="shadow-md border-black h-10 p-2">
                            <option value="" disabled selected>Pilih Konselor...</option>
                            <option value="Bapak">Bapak</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Boleh keduanya">Boleh keduanya</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Apakah Bapak/Ibu Konselor diizinkan untuk ditemani Konselor yang lain?</label>
                        <select id="tindak_lanjut" class="shadow-md border-black h-10 p-2">
                            <option value="" disabled selected>bolehhkah?...</option>
                            <option value="Bapak">Ya, boleh</option>
                            <option value="Ibu">Tidak</option>
                        </select>
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

        // Generate yyyy-mm-dd date string
        let formattedDate = year + "-" + month + "-" + day;

        document.getElementById("firstDay").setAttribute("min", formattedDate);
        document.getElementById("secondDay").setAttribute("min", formattedDate);
        

        function updateTimeOptions(dateInputId, timeSelectId) {
            const dateInput = document.getElementById(dateInputId);
            const timeSelect = document.getElementById(timeSelectId);

            const selectedDate = new Date(dateInput.value);
            const selectedDayOfWeek = selectedDate.getDay(); 
            
            if (selectedDayOfWeek === 5 || selectedDayOfWeek === 6 || selectedDayOfWeek === 0) {
                dateInput.value = ''; // Reset the date input
                timeSelect.setAttribute("disabled", "disabled"); // Disable the time select as no date is selected
                timeSelect.innerHTML = '<option value="" disabled selected>Pilih waktu...</option>'; // Reset the time options
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
    </script>
@endsection