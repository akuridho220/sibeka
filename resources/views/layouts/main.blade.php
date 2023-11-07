<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap');
    </style>
</head>
<body class="font-family-poppins flex flex-row">
    @if($user === "Konseli")
        @include('partials.aside')
    @elseif($user === "Konselor")
        @include('partials.aside-konselor')
    @elseif($user === "Tim Konseling")
        @include('partials.aside-tim-konseling')
    @elseif($user === "Pimpinan")
        @include('partials.aside-pimpinan')
    @endif
    
    <div class="w-full flex flex-col pl-0 md:pl-64 min-h-screen overflow-y-hidden">
        @include('partials.header')
        @yield('content')
    </div>


    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>


    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>

    <!-- Accordion --> 
    <script>
        /* Optional Javascript to close the radio button version by clicking it again */
        var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for(x = 0; x < myRadios.length; x++){
            myRadios[x].onclick = function(){
                if(setCheck != this){
                    setCheck = this;
                }else{
                    this.checked = false;
                    setCheck = null;
            }
            };
        }
    </script>
    <script src="js/sidebar.js"></script>
</body>
</html>