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
        .warning {color : #FFC436;}
        .accept {color: #159600;}
        .danger {color: #E96C6C;}
        .bg-accept {background: #159600;}
        .bg-danger {background: #e96c6c;}
        .bg-warning {background: #FFC436;}

        /* Tab content - closed */
        .tab-content {
            max-height: 0;
            -webkit-transition: max-height .35s;
            -o-transition: max-height .35s;
            transition: max-height .35s;
        }
        /* :checked - resize to full height */
        .tab input:checked ~ .tab-content {
            max-height: 100vh;
        }

        /* Label formatting when open */
        .tab input:checked + label{
            /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
            padding: 1.25rem; /*.p-5*/
            background-color: #f8fafc; /*.bg-gray-100 */
            color: #0997BC; /*.text-indigo*/
        }
        /* Icon */
        .tab label::after {
            float:right;
            right: 0;
            top: 0;
            display: block;
            width: 1.5em;
            height: 1.5em;
            line-height: 1.5;
            font-size: 1.25rem;
            text-align: center;
            -webkit-transition: all .35s;
            -o-transition: all .35s;
            transition: all .35s;
        }
        /* Icon formatting - closed */
        .tab input[type=checkbox] + label::after {
            content: "+";
            font-weight:bold; /*.font-bold*/
            border-width: 1px; /*.border*/
            border-radius: 9999px; /*.rounded-full */
            border-color: #b8c2cc; /*.border-grey*/
        }
        .tab input[type=radio] + label::after {
            content: "\25BE";
            font-weight:bold; /*.font-bold*/
            border-width: 1px; /*.border*/
            border-radius: 9999px; /*.rounded-full */
            border-color: #b8c2cc; /*.border-grey*/
        }
         /* Icon formatting - open */
        .tab input[type=checkbox]:checked + label::after {
            transform: rotate(315deg);
            background-color: #025A88; /*.bg-indigo*/
            color: #f8fafc; /*.text-grey-lightest*/
            }
        .tab input[type=radio]:checked + label::after {
            transform: rotateX(180deg);
            background-color: #025A88; /*.bg-indigo*/
            color: #f8fafc; /*.text-grey-lightest*/
        }
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
    <script src="js/sidebar.js">
        const hamburger = document.querySelector('#hamburgerMenu');

        hamburger.addEventListener('click', function(){
            hamburger.classList.toggle('hamburger-active');
        });
    </script>
</body>
</html>