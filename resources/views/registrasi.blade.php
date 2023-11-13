<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Bimbingan dan Konseling</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap');
        .font-family-poppins { font-family: poppins; }
    </style>
</head>
<body class="bg-gray-200 font-family-poppins flex items-center justify-center h-screen ">
    <div class="box-content bg-white max-w-lg px-12  rounded-xl shadow-lg">
        <div class="pt-5 pb-4">
            <img src="img/logo.png" alt="logo" width="64px" class="mx-auto my-auto">
        </div>
        <div class="text-center pb-3">
            <p class="text-3xl pb-2">Registrasi</p>
        </div>

        <span id="message" class="text-sm text-red-400 py-2 text-center bg-red-100 rounded-lg mb-2"></span>

        <form method="post" action="/register" class="flex flex-col gap-2" onsubmit="return validasiForm()" novalidate>
            @csrf
            <div class="flex flex-col">
                <label for="nama">Nama</label>
                <input id="nama" name="nama" type="text" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
            </div>
            <div class="flex flex-col">
                <label for="nim">NIM</label>
                <input id="nim" name="nim" type="text" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
            </div>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
            </div>
            <div class="flex flex-col ">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
            </div>
            <div class="flex flex-col pb-1 ">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" name="jk" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
                    <option disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="flex flex-col pb-6">
                <button type="submit" class="text-white font-bold w-64 py-2 px-2 rounded-lg" style="background-color: #025A88;">Daftar</button>
            </div>
            <div class="pb-5">
                <p>Sudah punya akun? 
                    <a href="/login" class="" style="color: #025A88;">Masuk!</a>
                </p>
            </div>
        </form>
    </div>

    <script>
        
        function validasiForm() {
            let nama = document.getElementById("nama");
            let nim = document.getElementById("nim");
            let email = document.getElementById("email");
            let password = document.getElementById("password");
            let jenisKelamin = document.getElementById("jk");
            let rtn = true;

            var inputan = [nama, nim, email, password, jenisKelamin];

            function validasi(input) {
                if (input.value == "") {
                    rtn = false;
                    document.getElementById("message").textContent = "Semua isian wajib diisi"
                    document.getElementById("message").classList.add("flex")
                    document.getElementById("message").classList.add("flex-col")
                }
            }

            inputan.forEach(validasi);

            return rtn;
        }
    </script>


</body>
</html>