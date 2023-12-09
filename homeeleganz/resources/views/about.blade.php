@extends('layouts.main')
@section('content')

    <section class="text-gray-600 body-font bg-gray-100 mt-6">
        <div class="container px-5 py-24 mx-auto ">
            <div class="flex flex-col text-center w-full mb-20 mt-[-55px]">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">About Us</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><span class="bigtext">W</span>elcome to Home Eleganz, where every brush stroke
                    matters, and every cushion, curtain, or coffee table tells a story – your story. Our journey began
                    with a simple yet passionate idea: to turn homes into havens of inspiration, comfort, and memories.
                    From humble beginnings as a small boutique to becoming a beacon of home decor, Home Eleganz has
                    always stood for quality, elegance, and thoughtful design.</p>
            </div>
        </div>
    </section>

    <div class="flex flex-wrap -m-4 mt-[-100px] mb-4 ml-4 mr-4 mt-2 bg-gray-100">
        <div class="p-4 lg:w-1/2 md:w-full">
            <div class="flex h-full border-2 rounded-lg border-gray-200 border-opacity-100 p-8 sm:flex-row flex-col">
                <div
                    class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                    <!-- SVG for Our Mission -->
                </div>
                <div class="flex-grow flex flex-col justify-between">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Our Mission</h2>
                    <p class="leading-relaxed text-base flex-grow">To provide innovative and affordable home decor
                        solutions that enhance the quality of life and bring joy to our customers.</p>
                </div>
            </div>
        </div>
        <div class="p-4 lg:w-1/2 md:w-full">
            <div class="flex h-full border-2 rounded-lg border-gray-200 border-opacity-100 p-8 sm:flex-row flex-col">
                <div
                    class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                    <!-- SVG for Our Vision -->
                </div>
                <div class="flex-grow flex flex-col justify-between">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Our Vision</h2>
                    <p class="leading-relaxed text-base flex-grow">To be the leading home decor brand, inspiring
                        creativity and excellence in home design.</p>
                </div>
            </div>
        </div>
    </div>


    <section class="bg-gray-100 body-font ">
        <div class="container px-5 py-24 mx-auto bg-gray-100">
            <div class="flex flex-col text-center w-full mb-12">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">THE TEAM</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Developers</h1>
            </div>
            <div class="flex flex-wrap -m-4">
                @php
                $teamMembers = [
                ['name' => 'Sahil', 'title' => 'Project Manager', 'image' => 'sofa.jpeg'],
                ['name' => 'Shishir', 'title' => 'Designer', 'image' => 'img-1.jpg'],
                ['name' => 'Navraj', 'title' => 'Backend Developer', 'image' => 'img-2.jpg'],
                ['name' => 'Arshdeep', 'title' => 'Frontend Developer', 'image' => 'wallpaper.jpg'],
                ['name' => 'Medha', 'title' => 'Database Programmer', 'image' => 'wallpaper-2.jpg']
                ];
                @endphp

                @foreach ($teamMembers as $member)
                <div class="p-4 lg:w-1/5 md:w-1/2 sm:w-full">
                    <div class="h-full flex items-center border-gray-500 border p-4 rounded-lg">
                        <img src="/images/{{ $member['image'] }}"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            alt="{{ $member['name'] }}-img">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">{{ $member['name'] }}</h2>
                            <p class="text-gray-500">{{ $member['title'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        </div>
        <div class="bg-gray-100 p-6">

            <div class="container mx-auto">

                <div class="grid grid-cols-2 gap-4 md:grid-cols-4">

                    <div class="bg-white p-6 rounded-lg shadow-md">

                        <div class="flex flex-col items-center text-center">
                            <div class="flex justify-center text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="w-10 h-10"
                                    fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                </svg>
                                </span>
                            </div>
                            <p class="mt-4 mb-2 text-3xl font-bold text-gray-900">200097</p>
                            <h2 class="text-sm text-gray-600">Inventory</h2>
                        </div>
                    </div>

                    <!-- Second Card -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex flex-col items-center text-center">
                            <div class="flex justify-center text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="w-10 h-10"
                                    fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd"
                                        d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                </svg>

                            </div>
                            <p class="mt-4 mb-2 text-3xl font-bold text-gray-900">31,590</p>
                            <h2 class="text-sm text-gray-600">Happy Customers</h2>
                        </div>
                    </div>

                    <!-- Third Card -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex flex-col items-center text-center">
                            <div class="flex justify-center text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="w-10 h-10"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>

                            </div>
                            <p class="mt-4 mb-2 text-3xl font-bold text-gray-900">74</p>
                            <h2 class="text-sm text-gray-600">Warehouse Experts</h2>
                        </div>
                    </div>

                    <!-- Fourth Card -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex flex-col items-center text-center">
                            <div class="flex justify-center text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="w-10 h-10"
                                    fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                                </svg>

                            </div>
                            <p class="mt-4 mb-2 text-3xl font-bold text-gray-900">3 Days</p>
                            <h2 class="text-sm text-gray-600">Unbeatable Delivery Time</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    @include('partials.footer')
@endsection