<script>
    function toggleMenu() {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    }
</script>
<header class="w-[100%] pt-4 border-b bg-white">
    <div id="utilities" class="flex justify-between items-center mb-3">

        <div id="logo" class="pl-5 pb-4">
            <!-- <img src="/images/logo.png" alt="" width="60px" height="50px"> -->
            <h1><span>Home</span>Eleganz</h1>
        </div>

        <div class="mb-3" style="width: 50%;">
            <form action="{{ route('products.search') }}" method="POST" novalidate>
                @csrf
                <div class="relative flex w-full flex-wrap items-stretch">
                    <div class="relative w-full">
                        <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 text-neutral-700 dark:text-neutral-200">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="search" name="search" class="search h-[50px] w-full rounded-3xl border border-solid border-neutral-300 bg-transparent bg-clip-padding pl-10 pr-12 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary" placeholder="Search for your dream decoration items" aria-label="Search" aria-describedby="button-addon2" />
                    </div>

                </div>
            </form>
        </div>



        <div id="login" class="flex pr-10">
            <ul class="flex space-x-2">
                @guest
                @if (Route::has('login'))
                <li><a href="{{ route('login') }}" class="authli">{{ __('Login') }}</a></li>
                @endif

                <li class="authli">|</li>

                @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="authli">{{ __('Register') }}</a></li>
                @endif

                @elseif (Auth::check())

                @if(Auth::user()->is_admin)
                <li><a href="/admin" class="authli">Admin Dashboard</a></li>
                @else
                <li><a href="/home" class="authli"> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                </li>
                @endif

                <li class="authli">|</li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="authli">
                    {{ __('Logout') }}
                </a>
                @endguest
                <li class="authli">|</li>
                @php
                $cartCount = count(session('cart', []));
                @endphp

                <li>
                    <a href="/cart" class="authli relative flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="gray" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19c0 1.104.896 2 2 2s2-.896 2-2M5 8h14l-1.5 7H6L5 8z" />
                        </svg>
                        @if($cartCount > 0)
                        <span class="absolute -top-1 -right-1 h-4 w-4 flex items-center justify-center rounded-full bg-red-500 text-xs text-white">{{ $cartCount }}</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <nav id="navigation" class="w-full">
        <!-- <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4"> -->


        <div class="w-full md:w-auto " id="navbar-default">

            <div class="relative block md:hidden">
                <div class="flex items-center" onclick="toggleMenu()">
                    <button class="text-gray-500 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Hidden menu -->
                <div id="menu" class="absolute left-0 mt-2 w-48 bg-white border rounded-md shadow-lg z-10">
                    <ul class="navbar font-medium flex flex-col justify-center  z-10">
                        <li>
                            <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
                        </li>

                        <li>
                            <a href="/about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                        </li>

                        <li>
                            <a href="/products" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Products</a>
                        </li>

                        <li>
                            <a href="/brands" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Brands</a>
                        </li>

                        <li>
                            <a href="/contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>



            <ul class="navbar font-medium md:flex hidden md:flex-row md:justify-center md:space-x-8 mt-4 md:mt-0">
                <li>
                    <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
                </li>

                <li>
                    <a href="/about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                </li>

                <li>
                    <a href="/products" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Products</a>
                </li>

                <li>
                    <a href="/brands" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Brands</a>
                </li>

                <li>
                    <a href="/contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact
                        Us</a>
                </li>
            </ul>

        </div>
    </nav>
</header>