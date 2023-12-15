<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Eleganz</title>

    <!-- slide in animation js -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- @vite('resources/css/app.css') -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="font-lato overflow-x-hidden dashboardbody" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <header class="w-[100%] h-[50px] dash-header pl-5">
        <div class="dashleft">
            <a href="/admin"><h1>HomeEleganz</h1></a>
        </div>
        <div class="dashright">
        <div id="login" class="flex pr-10">

            <ul class="flex space-x-2">
            <form action="{{ route('admin.products.search') }}" method="GET" novalidate>
                
        @csrf
        <div class="relative flex w-full flex-wrap items-stretch">
            <div class="relative w-full">
                <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-neutral-700 dark:text-neutral-200">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                </span>
                <input type="search" name="search" class="search h-[30px] w-full border border-solid border-neutral-300 bg-transparent pl-10 pr-12 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:border-primary focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" placeholder="Search for your items" aria-label="Search" aria-describedby="button-addon2" />
            </div>
        </div>
    </form>
                @guest
                    @if (Route::has('login'))
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @endif

                    <li>|</li>

                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif

                @elseif (Auth::check())

                    @if(Auth::user()->is_admin)
                        <li><a href="/home"> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a></li>
                        <li>|</li>
                    @endif

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                @endguest
            </ul>
        </div>

            
        </div>
    </header>
    
    @yield('content')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<script>
    	AOS.init();
  	</script>

    <script>
        // Wait for the document to be ready
        document.addEventListener("DOMContentLoaded", function() {
            // Select the flash message element
            var flashMessage = document.querySelector('.alert');

            // Check if the flash message exists
            if (flashMessage) {
                // Set a timeout to hide the flash message after 4 seconds
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 3000);
            }
        });
    </script>

</body>

</html>