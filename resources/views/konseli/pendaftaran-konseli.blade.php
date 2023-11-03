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
                        <input type="date" class="w-full bg-gray-200 h-10 p-2" name="" id="firstDay">
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Tanggal dan Waktu 2</label>
                        <input type="date" class="w-full bg-gray-200 h-10 p-2" name="" id="secondDay">
                    </div>
                    <div class="p-2">
                        <label for="" class="block mb-1 font-bold">Pilih Jenis Konselor</label>
                        <select id="tindak_lanjut" class="shadow-md border-black h-10 p-2">
                            <option value=""disabled selected>Pilih Jenis Konselor...</option>
                            <option value="9">Bapak</option>
                            <option value="13">Ibu</option>
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
        document.getElementById("secondDay").setAttribute("min", formattedDate)
    </script>
@endsection