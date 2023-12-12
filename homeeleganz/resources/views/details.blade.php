@extends('layouts.main')
@section('content')

    <div class="prod-details-container">
        <div class="prod-desc-image">
            <div class="main-img box-shadow-details">
                <!-- <img src="/images/{{ $information->image }}" alt="sofa image"> -->
                <img src="/images/sofa.jpeg" alt="sofa image">
            </div>
            <div class="small-img">
                <div class="img1 box-shadow-details">
                    <img src="/images/img-1.jpg" alt="sofa image">
                </div>
                <div class="img2 box-shadow-details">
                    <img src="/images/img-2.jpg" alt="sofa image">
                </div>
            </div>
        </div>
        <div class="details">
            <h1>{{ $information->name }}</h1>
            <p class="cat-text">Categories: @foreach($information->categories as $cat)
                {{ $cat->name}}
                    @if(!$loop->last)
                        {{ ',' }}
                    @endif
                @endforeach
            </p>
            <hr>
            <p class="prod-info"><strong>Price:</strong> ${{ $information->unit_price }} </p>
            <p class="prod-info"><strong>Brand:</strong> {{ $information->brand }}</p>
            <p class="prod-info"><strong>Colour:</strong> {{ $information->color }}</p>
            <p class="prod-info"><strong>Material:</strong> {{ $information->material }}</p>
            <p class="prod-info"><strong>Weight:</strong> {{ $information->weight }}</p>
            <p class="prod-info"><strong>Summary:</strong> {!! $information->summary !!}</p>
            <hr>
            <strong><h2>About This Item</h2></strong>
            <p>{!! $information->description !!}</p>
            <br>
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                Add to Cart
            </button>
        </div>
    </div>

    <div class="review">
        <h3>Product Reviews</h3>
        
        <!-- if no reviews -->
        
        <!-- if reviews -->
        @if($information->reviews->count() > 0)
        @foreach($information->reviews as $review)
        <div class="review-box">
            <div class="user-img">
                <div class="w-[70px] h-[70px] bg-black rounded-[50%]"></div>
            </div>

            <div class="user-contents">
                <strong><p>{{ $review->user->first_name }}  {{ $review->user->last_name }}</p></strong>
                <p class="cat-text date-text">Posted on: {{ $review->created_at->format('m/d/Y') }}</p>
                <p>{{ $review->comment }}</p>
            </div>
        </div>
        @endforeach
        @else
        <span>No reviews yet.</span>
        @endif

        @guest
        <p>Please <a href="/login"><u>login</u></a> to leave a review.</p>
        @else
        <h2 class="reviewh2">Leave a Review</h2>
        <form action="{{ route('submit.review') }}" class="mb-6" method="POST" novalidate>
            @csrf

            <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <input type="hidden" name="prod_id" value="{{ $information->id }}">
                <label for="comment" class="sr-only">Your comment</label>
                <textarea name="comment" id="comment" rows="6"
                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                    placeholder="Leave your review..."></textarea>
            </div>
            <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                Post Review
            </button>
        </form>
        @endguest
    </div>

    @include('partials.footer')
@endsection
    