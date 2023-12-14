@extends('layouts.main')
@section('content')

    <div id="title" class="mt-10 font-lato text-center text-[1.5em] my-[1rem] tracking-wider uppercase">
        <h1>{{ $title }}</h1>
    </div>
    
    <div class="categories-list mb-10">
        <ul class="h-[inherit]">
            <li class="hover:cursor-pointer">
                <a href="/products">All Furnitures</a>
            </li>

            @foreach($allCategories as $allcategory)
                <li class="hover:cursor-pointer @if($categoryName === $allcategory->name) active-category @endif">
                    <a href="{{ route('category.view', ['categoryName' => $allcategory->name]) }}" class="category-link">{{ $allcategory->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    
    <div class="grid lg:grid-cols-4 md:grid-cols-3   gap-9">

        @foreach($category->products as $product)
        <div class="w-[250px] min-h-[400px] border-[1px] rounded-[35px] mx-auto relative">

            <img src="/images/{{ $product->image }}" class="flex flex-col rounded-t-[35px]" />
            <div class="px-2 my-2 ">
                <div class="w-[100%] flex justify-between items-center text-[1.1em]">
                    <span><b>{{ $product->name }}</b></span>
                    <span class="text-red-600">${{ $product->unit_price }}</span>
                </div>
                
                <p class="text-[.8em] my-1 text-[#8A8A8A]">{{ $product->dimensions }}</p>
                <p class=" text-[.8em] my-1 mx-auto">{{ $product->summary }}</p>
            </div>
            <div class=" absolute bottom-1 right-0 left-0 flex justify-center">
                <button class="bg-black text-white text-[.7em] py-2 px-5 rounded-[20px] my-2 tracking-wider">
                    <a href="/products/{{ $product->id }}">View Product</a>
                </button>
            </div>
        </div>
        @endforeach

    </div>


    @include('partials.footer')
@endsection