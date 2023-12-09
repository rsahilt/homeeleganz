<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="font-lato overflow-x-hidden">
    @include('partials.header')

    <div class="brand-list text-center">
        <h1 class="text-[1.5em] font-bold mt-[1rem]">Home Decoration Brands</h1>
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
    </div>

    @include('partials.footer')
</body>

</html>
