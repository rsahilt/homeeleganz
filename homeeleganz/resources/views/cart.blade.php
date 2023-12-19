@extends('layouts.main')

@section('content')
<main class="main-container bg-white mt-6 px-4 sm:px-6 lg:px-8">
    <h1 class="font-lato text-center text-[1.5em] mt-[1rem] tracking-wider">My Cart</h1>

    @if(count($cart) > 0)
        <div class="cart-container bg-gray-100 p-6 rounded-lg shadow-md mx-auto max-w-4xl">
            @php $totalPrice = 0; @endphp
            @foreach($cart as $productId => $item)
                @if(is_array($item) && isset($item['product']) && is_array($item['product']))
                    @php
                        $product = $item['product'];
                        $quantity = $item['quantity'] ?? 0;
                        $unitPrice = $product['unit_price'] ?? 0;
                        $subtotal = $quantity * $unitPrice;
                        $totalPrice += $subtotal;
                    @endphp
                    <div class="cart-item flex items-center justify-between p-4 border-b">
                        <div class="cart-item-image-box flex-shrink-0 -mt-1">
                            <img src="/images/{{ $product['image'] ?? 'default-image.jpg' }}" alt="{{ $product['name'] ?? 'Product Name' }}" class="h-14 w-full object-cover rounded-md">
                        </div>

                        <div class="cart-item-details flex-grow flex items-center justify-between">
                            <div class="room">
                                <p class="item-name text-lg font-semibold">{{ $product['name'] ?? 'Product Name' }}</p>
                                <span>Quantity: {{ $quantity }}</span>
                            </div>
                            <div class="price text-right">
                                <p class="item-price text-xl font-semibold">${{ $unitPrice }}</p>
                                <p>Subtotal: ${{ $subtotal }}</p>
                                <form action="{{ route('cart.remove', ['productId' => $productId]) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="item-remove text-sm text-red-500 hover:text-red-700">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="flex justify-between my-3">
                <span class="total-label font-bold text-xl">Total:</span> 
                <span class="total-value text-xl">${{ number_format($totalPrice, 2) }}</span>
            </div>
            <div class="flex justify-end">
    <a href="/products" class="inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 transition duration-300 mr-2">Continue Shopping</a>
    <a href="/checkout" class="inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 transition duration-300">Checkout</a>
</div>


        </div>
    @else
        <div class="w-full max-w-lg mx-auto text-center mt-4">
            <p class="text-2xl font-semibold mb-8">Your cart is empty.</p>
            <a href="/products" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300">Continue Shopping</a>
        </div>
    @endif
</main>

@include('partials.footer')
@endsection
