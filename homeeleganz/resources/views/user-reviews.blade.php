@extends('layouts.main')
@section('content')

<div class="p-16">

    <h2 class="mx-auto p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        All reviews
    </h2>
    <div class="p-8 bg-white shadow">


        <a href="/home" class="mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all">
            Back
        </a>


        </caption>
        <div class="flex flex-col items-center justify-center">
            @if($reviews->count() > 0)
            @foreach($reviews as $review)
            <div class="max-w-md w-full bg-white shadow-lg rounded-lg overflow-hidden m-4">
                <div class="p-4">
                    <p class="text-gray-600">Product ID: {{ $review->product_id }}</p>
                    <p class="text-gray-800 text-lg font-semibold mb-2">{{ $review->comment }}</p>
                    <p class="text-sm text-gray-500">Posted on: {{ $review->created_at->format('m/d/Y') }}</p>
                </div>
            </div>
            @endforeach
            @else
            <p class="text-lg text-gray-700">No reviews available.</p>
            @endif
        </div>




    </div>
</div>


@include('partials.footer')

@endsection