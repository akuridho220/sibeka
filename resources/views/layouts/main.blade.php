<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #025A88; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #024f78; }
        .nav-item:hover { background: #024f78; }
        .account-link:hover { background: #3d68ff; }
        .w-sidebar {width: 248px}
        .w-content {width: calc(100vw - 244px)}
        .left-content{left: 244px}
        .primary-color {color : #025A88;}
        .secondary-color {color: #0997BC;}
        .tertiary-color {color : #FFC436;}
        .accept {color: #159600}
        .danger {color: #E96C6C}
    </style>
</head>
<body class="font-family-poppins flex">
    @include('partials.aside')
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        @include('partials.header')
        @yield('content')
    </div>


    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    {{-- <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script> --}}


    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>