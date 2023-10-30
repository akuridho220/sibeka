<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Bimbingan dan Konseling</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: poppins; }
    </style>
</head>
<body class="bg-gray-200 font-family-karla flex items-center justify-center h-screen">
    <div class="box-content bg-white max-w-lg px-12 rounded-xl shadow-lg">
        <div class="pt-5 pb-4">
            <img src="img/logo.png" alt="logo" width="64px" class="mx-auto my-auto">
        </div>
        <div class="text-center pb-3">
            <p class="text-3xl pb-2">Masuk</p>
            <p class="font-light">Gunakan akun Sipadu</p>
        </div>
        <form>
            <div class="flex flex-col">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
            </div>
            <div class="flex flex-col pt-6 pb-6">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" class="bg-gray-200 rounded-lg outline-none px-4 py-2">
            </div>
            <div class="pb-6">
            <button class="text-white font-light w-64 py-2 px-2 rounded-lg" style="background-color: #025A88;">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
