<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>


<body class="font-lato overflow-x-hidden">
    @include('partials.header')

    <div id="title" class="font-lato text-center text-[1.5em] mt-[1rem] tracking-wider">
        <h1>Transform Your Space, Click by Click: Where Style Meets Convenience!</h1>

    </div>

    <div id=" hero-image" class="w-[100%] mt-[1rem]">
        <img src="/images/hero-image.png" class="mx-auto">
    </div>

    <div id="shop" class="mb-[1rem]">


        <div id="shop-by-category">
            <h1 class="text-[1.5em] my-[1rem] ml-[1rem] tracking-wider">Shop by category</h1>
            <div class="flex justify-around">
                <div class="card w-[270px] h-[330px] bg-gray-500">

                </div>
                <div class="card w-[270px] h-[330px] bg-gray-500">

                </div>
                <div class="card w-[270px] h-[330px] bg-gray-500">

                </div>

                <div class="card w-[270px] h-[330px] bg-gray-500">

                </div>
            </div>
        </div>
        <div id="shop-by-brand">
            <h1 class="text-[1.5em] my-[1rem] ml-[1rem] tracking-wide">Shop by brand</h1>
            <div class="flex justify-around">
                <div class="card w-[270px] h-[330px] bg-gray-500">

                </div>
                <div class="card w-[270px] h-[330px] bg-gray-500">

                </div>
                <div class="card w-[270px] h-[330px] bg-gray-500">

                </div>

                <div class="card w-[270px] h-[330px] bg-gray-500">

                </div>
            </div>
        </div>
    </div>


    @include('partials.footer')

</body>

</html>