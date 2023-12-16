@extends('layouts.main')
@section('content')

    <div id="title" class="mt-10 font-lato text-center text-[1.5em] my-[1rem] tracking-wider uppercase">
        <h1>{{ $title }}</h1>
    </div>

    <div class="categories-list mb-10">
        <ul class="h-[inherit]">
            <li class="hover:cursor-pointer {{ empty($slug) ? 'active' : '' }}">
                <a href="/products">All Furnitures</a>
            </li>
       
             @foreach($categories as $category)
                <li class="hover:cursor-pointer">
                    <a href="{{ route('category.view', ['categoryName' => $category->name]) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="grid lg:grid-cols-4 md:grid-cols-3  gap-9">
        @if($products->isEmpty())
            <p>No results found.</p>
        @else
            @foreach($products as $product)
            
            <div class="w-[250px] min-h-[400px] border-[1px] rounded-[35px] mx-auto relative" data-aos="slide-up" data-aos-duration="1000">
                <a href="{{ route('product.details', ['id' => $product->id]) }}" class="block">
                    <img src="/images/{{ $product->image }}" alt="{{ $product->image }}" class="rounded-t-[35px] h-[200px] w-[250px]"/>
                    <div class="px-2 my-2 ">
                        <div class="w-[100%] flex justify-between items-center text-[1.1em]">
                            <span><b>{{ $product->name }}</b></span>
                            <span class="text-red-600">${{ $product->unit_price }}</span>
                        </div>
                        <p class="text-[.9em] my-1 text-[#8A8A8A]">{{ $product->category_id }}</p>
                        <p class="text-[.8em] my-1 text-[#8A8A8A]">{{ $product->dimensions }}</p>
                        <p class="text-[.8em] my-1 text-[#8A8A8A]">{{ $product->catgeory_id }}</p>
                        <p class=" text-[.8em] my-1 mx-auto">{{ $product->summary }}</p>
                    </div>
                    <div class=" absolute bottom-1 right-0 left-0 flex justify-center">  
                        <form action="{{ route('cart.add') }}" method="POST" novalidate>
                        @csrf
                            <button class="bg-black text-white text-[.7em] py-2 px-5 rounded-[20px] my-2 tracking-wider">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </a>
            </div>
            @endforeach
        @endif

        

    </div>

    <div class="pagination">{{ $products->links() }}</div>
    

    @include('partials.footer')
@endsection