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
        <h1>{{ $title }}</h1>

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

    <div class="grid lg:grid-cols-4 md:grid-cols-3   gap-9">

        @foreach($products as $product)
        <div class="w-[250px] min-h-[400px] border-[1px] rounded-[35px] mx-auto relative">

            <img src="/images/sofa.jpeg" class="flex flex-col rounded-t-[35px]" />
            <div class="px-2 my-2 ">
                <div class="w-[100%] flex justify-between items-center text-[1.1em]">
                    <span><b>{{ $product->name }}</b></span>
                    <span class="text-red-600">${{ $product->unit_price }}</span>
                </div>
                <p class="text-[.8em] my-1 text-[#8A8A8A]">{{ $product->dimensions }}</p>
                <p class="text-[.8em] my-1 text-[#8A8A8A]">{{ $product->catgeory_id }}</p>
                <p class=" text-[.8em] my-1 mx-auto">Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. </p>
            </div>
            <div class=" absolute bottom-1 right-0 left-0 flex justify-center">
                <button class="bg-black text-white text-[.7em] py-2 px-5 rounded-[20px] my-2 tracking-wider">ADD TO
                    CART</button>
            </div>
        </div>
        @endforeach

    </div>

    @include('partials.footer')


</body>

</html>