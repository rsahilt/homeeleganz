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


    <div id="title" class="font-lato text-center text-[1.5em] my-[1rem] tracking-wider uppercase">
        <h1>All products</h1>

    </div>

    <nav id="navigation" class="h-[2rem] w-[100%] mb-[1rem]-">
        <ul class="h-[inherit] flex justify-around items-center tracking-wide">
            <li class="hover:cursor-pointer">Dining room</li>
            <li class="hover:cursor-pointer">Bedroom</li>
            <li class="hover:cursor-pointer">Living room</li>
            <li class="hover:cursor-pointer">Home office</li>
            <li class="hover:cursor-pointer">Garden</li>
        </ul>

    </nav>
    `

    <div class="grid lg:grid-cols-4 md:grid-cols-3   gap-9">
        @include('components.card')
        @include('components.card')
        @include('components.card')
        @include('components.card')
        @include('components.card')
        @include('components.card')
        @include('components.card')
        @include('components.card')
        @include('components.card')
        @include('components.card')

        <!-- <img src="images/img-1.jpg" alt="Description of Image 1">
        <img src="images/img-2.jpg" alt="Description of Image 2">
        <img src="images/pexels-pew-nguyen-244133.jpg" alt="Description of Image 3">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/img-1.jpg" alt="Description of Image 1">
        <img src="images/img-2.jpg" alt="Description of Image 2">
        <img src="images/pexels-pew-nguyen-244133.jpg" alt="Description of Image 3">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4"> -->
    </div>

    @include('partials.footer')


</body>

</html>