<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Eleganz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="font-lato overflow-x-hidden">
    @include('partials.header')

    <div id="title" class="mt-10 font-lato text-center text-[1.5em] my-[1rem] tracking-wider uppercase">
        <h1>{{ $title }}</h1>
    </div>

    <!-- <div class="brand-list text-center">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 gap-9 mx-auto">
            @foreach ($brands as $brand)
                <div class="w-[250px] min-h-[400px] border-[1px] rounded-[35px] mx-auto relative">
                    <img src="/images/sofa.jpeg" class="flex flex-col rounded-t-[35px]" alt="Image for {{ $brand }}" />
                    <div class="px-2 my-2">
                        <h2 class="text-center text-[1.1em]"><b>{{ $brand }}</b></h2>
                    </div>
                    <div class="absolute bottom-1 right-0 left-0 flex justify-center">
                        <button class="bg-black text-white text-[.7em] py-2 px-5 rounded-[20px] my-2 tracking-wider">
                            <a href="#">Explore {{ $brand }}</a>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div> -->

    <div class="flex flex-wrap justify-center">
    @foreach ($brands as $brand)
        <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
            <!-- Page1 -->
            <div class="absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                <img class="h-4/6 w-full object-cover" src="https://images.unsplash.com/photo-1660648127319-3f071bbac474?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" />
                <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500">{{ $brand }}</h1>
                <p class="mt-1 px-4 text-center text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam, saepe.</p>
            </div>
            <!-- /Page1 -->

            <!-- Page2 -->
            <div class="absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500">{{ $brand }}</h1>
                <p class="px-8 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero deserunt quisquam aperiam, voluptas esse minima. Tenetur odit rem ducimus incidunt quas, voluptates obcaecati, sint amet sit provident quis nam repellat, odio repellendus recusandae. Error, repudiandae?</p>
            </div>
            <!-- /Page2 -->
        </div>
    @endforeach
</div>

    @include('partials.footer')
</body>

</html>
