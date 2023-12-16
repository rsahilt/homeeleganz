@extends('layouts.main')
@section('content')

<div class="p-16 flex justify-center items-center w-full">

    <div class="w-[70%]">

        <div class="flex flex-col items-center">
            <h2 class="mx-auto p-5 text-2xl font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Your Reviews
            </h2>
            <div class="p-8 shadow">


                <a href="/home" class="mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all">
                    Back
                </a>


                <caption> 
                    <div class="flex flex-col items-center justify-center">
                        @if($reviews->count() > 0)
                        @foreach($reviews as $review)
                        <div class="max-w-md w-full bg-white shadow-lg rounded-lg overflow-hidden m-4">
                            <div class="p-4">
                                <p class="text-black text-lg font-semibold">Product: {{ $review->product->name }}</p>
                                <img src="/images/{{ $review->product->image }}" alt="{{ $review->product->name }}" width="150px" height="150px" class="mb-4">
                                <p class="font-semibold"><u>Your Review:</u></p>
                                <p class="text-gray-800 text-lg font-semibold mb-2">{{ $review->comment }}</p>
                                <p class="text-sm text-gray-500">Posted on: {{ $review->created_at->format('m/d/Y') }}</p>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p class="text-lg text-gray-700">No reviews available.</p>
                        @endif
                    </div>
                </caption>

            </div>
        </div>
    </div>
</div>

@include('partials.footer')

@endsection
