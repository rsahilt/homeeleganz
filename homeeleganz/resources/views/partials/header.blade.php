<header class="w-[100%] h-[8rem] border-b bg-white">
    <div id="utilities" class="flex justify-between items-center h-[6rem]">

        <div id="logo" class="pl-5">
            <img src="/images/logo.png" alt="" width="60px" height="50px">
            <h1><span>Home</span>Eleganz</h1>
        </div>
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
        <div class="mb-3">
            <div class="relative mb-4 flex w-full flex-wrap items-stretch pl-10">
                <input
                type="search"
                class="relative m-0 block min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                placeholder="Search"
                aria-label="Search"
                aria-describedby="button-addon2" />

                <!--Search icon-->
                <span
                class="input-group-text flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-neutral-700 dark:text-neutral-200"
                id="basic-addon2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-5 w-5">
                    <path
                    fill-rule="evenodd"
                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                    clip-rule="evenodd" />
                </svg>
                </span>
            </div>
        </div>

        

        <div id="login" class="flex pr-10">
            <ul class="flex space-x-2">
                @guest
                    @if (Route::has('login'))
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @endif

                    <li>|</li>

                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif

                @elseif (Auth::check())
                    <li><a href="/home"> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a></li>
                    <li>|</li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                @endguest
                <li>|</li>
                <li>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
            </ul>
        </div>

    </div>
    
    <!-- <nav id="navigation" class="h-[3rem] w-[100%] bg-primary">
        <ul class="h-[inherit] flex justify-center items-center uppercase tracking-wide">
            <li class="hover:cursor-pointer px-8 py-2"><a href="#">Products</a></li>
            <li class="hover:cursor-pointer px-8 py-2"><a href="#">Offers</a></li>
            <li class="hover:cursor-pointer px-8 py-2"><a href="#">Brands</a></li>
            <li class="hover:cursor-pointer px-8 py-2"><a href="#">Home services</a></li>
            <li class="hover:cursor-pointer px-8 py-2"><a href="#">About</a></li>
        </ul>
    </nav> -->
    <nav id="navigation" class="w-full">
        <!-- <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4"> -->
        <div class="max-w-screen-xl flex items-center justify-between mx-auto nav-container">
            <!-- <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button> -->
            <div class="w-full md:w-auto" id="navbar-default">
                <ul class="navbar font-medium flex flex-col md:flex-row md:justify-center md:space-x-8 mt-4 md:mt-0">
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
                        <a href="/contact" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- This is an example; adjust the HTML structure to fit your design -->


</div>

</header>