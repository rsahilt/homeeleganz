@extends('layouts.main')
@section('content')

<main class="main-container bg-white mt-6 px-4 sm:px-6 lg:px-8">
    <h1 class="font-lato text-center text-[1.5em] mt-[1rem] tracking-wider">My Cart</h1>

    @if(count($cart) > 0)
    <div class="cart-container bg-gray-100 p-6 rounded-lg shadow-md mx-auto max-w-4xl">
        <?php $totalPrice = 0; ?>
        @foreach($cart as $productId => $cartItem)
        <!-- Cart item -->
        <div class="cart-item flex items-center justify-between p-4 border-b">
        <div class="cart-item-image-box flex-shrink-0 -mt-1">
        <img src="/images/{{ $cartItem['image'] }}" alt="{{ $cartItem['name'] }}" class="h-14 w-full object-cover rounded-md">
        </div>

            <div class="cart-item-details flex-grow flex items-center justify-between">
                <div class="room">
                    <p class="item-name text-lg font-semibold">{{ $cartItem['name'] }}</p>
                    <span>Quantity: 1</span>
                </div>
                <div class="price text-right">
                    <p class="item-price text-xl font-semibold">${{ $cartItem['unit_price'] }}</p>
                    <form action="{{ route('cart.remove', ['productId' => $productId]) }}" method="GET">
                        @csrf
                        <button type="submit" class="item-remove text-sm text-red-500 hover:text-red-700">Remove</button>
                    </form>
                </div>
            </div>
        </div>
        <?php $totalPrice += $cartItem['unit_price']; ?>
        @endforeach
    </div>

    <div class="flex flex-col items-end w-full max-w-4xl mx-auto mt-6">

        <div class="text-right w-full p-6 bg-white rounded-lg shadow-md">
            <!-- Display the calculated total price -->

            <div class="flex justify-between my-3">
                <span class="subtotal-label font-semibold">Bag:</span> 
                <span class="subtotal-value">{{ count($cart) }} items</span>
            </div>
            <div class="flex justify-between gap-7  mb-3">
                <span class="subtotal-label"><strong>Sub Total:</strong> </span> <span class="subtotal-value">${{ $totalPrice }}</span>
            </div>

            <div class="flex justify-between gap-7  mb-3 tax-line">
                <span class="tax-label"><strong>GST:</strong> </span> <span class="tax-value">${{ number_format($totalGST,2) }}</span>
            </div>
            <div class="flex justify-between gap-7  mb-3 tax-line">
                <span class="tax-label"><strong>PST:</strong></span> <span class="tax-value">${{ number_format($totalPST,2) }}</span>
            </div>
            <div class="flex justify-between gap-7  mb-3 tax-line">
                <span class="tax-label"><strong>HST:</strong></span> <span class="tax-value">${{ number_format($totalHST,2) }}</span>
            </div>
            <div class="flex justify-between gap-7  mb-3">
                <span class="tax-label"><strong>Total Taxes:</strong></span> <span class="tax-value">${{ number_format($totalTaxes,2) }}</span>
            </div>

            <div class="flex justify-between my-3">
                <span class="total-label font-bold text-xl">Total:</span> 
                <span class="total-value text-xl">${{ number_format($totalPriceWithTaxes,2) }}</span>
            </div>

            <div>
                <a href="/products" class="inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 transition duration-300">
                Continue Shopping
                </a>

                <!-- <a href="/checkout?cart={{ urlencode(json_encode($cart)) }}" class="inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 transition duration-300">Checkout</a> -->
                <a href="/checkout" class="inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 transition duration-300">Checkout</a>
            </div>
            
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
