@extends('layouts.main')
@section('content')

<div class="p-16">
    <div class="p-8 bg-white shadow mt-24">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                <div>
                    <p class="font-bold text-gray-700 text-xl">22</p>
                    <p class="text-gray-400">Friends</p>
                </div>
                <div>
                    <p class="font-bold text-gray-700 text-xl">10</p>
                    <p class="text-gray-400">Photos</p>
                </div>
                <div>
                    <p class="font-bold text-gray-700 text-xl">89</p>
                    <p class="text-gray-400">Comments</p>
                </div>
            </div>

            <div class="relative">
                <div
                    class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <div class="profile-btns space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
                <!-- button to edit the user information -->
                <button
                    class="hidden-btn-fullsize text-white py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                    <a href="{{ route('home-edit', ['id' => $user->id]) }}"> Edit </a>
                </button>
                <!-- button to see the reviews posted by the user -->
                <button class=" text-white py-2 px-4 uppercase rounded bg-green-500 hover:bg-green-600 shadow hover:shadow-lg
                        font-medium transition transform hover:-translate-y-0.5">
                    <a href="{{ route('userReviews', ['id' => $user->id]) }}"> Reviews</a>
                </button>
                <!-- button to see the orders of the user -->
                <button class=" text-white py-2 px-4 uppercase rounded bg-orange-400 hover:bg-orange-500 shadow hover:shadow-lg
                        font-medium transition transform hover:-translate-y-0.5">
                    <a href="{{ route('myorders') }}">My Orders</a>
                </button>
                <button
                    class="hidden-btn-resp text-white py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                    <a href="{{ route('home-edit', ['id' => $user->id]) }}"> Edit </a>
                </button>
            </div>
        </div>

        <!-- user information are displayed -->
        <div class="mt-20 text-center border-b pb-12">
            <h1 class="text-4xl font-medium text-gray-700">{{ $user->first_name }} {{ $user->last_name }}</h1>
            
            </p>
            <p class="font-light text-gray-600 mt-3"> {{ $user->address }} - {{ $user->street }}, 
                {{ $user->postal_code }}

            </p>
            <p class="font-light text-gray-600 mt-3"> {{ $user->city }}, {{ $user->province }}</p>
            <p class="font-light text-gray-600 mt-3">{{ $user->country }}</p>
        </div>

        <!-- just a static text -->
        <div class="mt-12 flex flex-col justify-center">
            <p class="text-gray-600 text-center font-light lg:px-16">An artist of considerable range, Ryan — the name
                taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own
                music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.
            </p>
        </div>

    </div>
</div>


@include('partials.footer')

@endsection