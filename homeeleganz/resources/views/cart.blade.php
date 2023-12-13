@extends('layouts.main')
@section('content')

<main class="main-container bg-white mt-6">
    <h1 class="cart-title">My Cart</h1>

    @if(count($cart) > 0)
    <div class="cart-container bg-gray-100 w-[75%] mx-auto">
        <?php $totalPrice = 0; ?>
        @foreach($cart as $productId => $cartItem)
        <!-- Cart item -->
        <div class="cart-item">
            <div class="cart-item-image-box">
                <img src="/images/{{ $cartItem['image'] }}" alt="{{ $cartItem['name'] }}">
            </div>
            <div class="cart-item-details">
                <div class="room">
                    <p class="item-name">{{ $cartItem['name'] }}</p>
                    <span>Quantity: 1</span>
                </div>
                <div class="price">
                    <p class="item-price">${{ $cartItem['unit_price'] }}</p>
                    <form action="{{ route('cart.remove', ['productId' => $productId]) }}" method="GET">
                        @csrf
                        <button type="submit" class="item-remove">Remove</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <?php $totalPrice += $cartItem['unit_price']; ?>
        @endforeach
    </div>

    <div class="flex flex-col items-end  w-[75%] mx-auto mt-6">

        <div class="text-right">
            <!-- Display the calculated total price -->

            <div class="flex justify-between gap-7  my-3">
                <span class="subtotal-label"><strong>Bag:</strong> </span> <span class="subtotal-value">{{ count($cart) }}
                    items</span>
            </div>
            <div class="flex justify-between gap-7  mb-3">
                <span class="subtotal-label"><strong>Sub Total:</strong> </span> <span class="subtotal-value">${{ $totalPrice }}</span>
            </div>

            <div class="flex justify-between gap-7  mb-3 tax-line">
                <span class="tax-label"><strong>GST:</strong> </span> <span class="tax-value">${{ $totalGST }}</span>
            </div>
            <div class="flex justify-between gap-7  mb-3 tax-line">
                <span class="tax-label"><strong>PST:</strong></span> <span class="tax-value">${{ $totalPST }}</span>
            </div>
            <div class="flex justify-between gap-7  mb-3 tax-line">
                <span class="tax-label"><strong>HST:</strong></span> <span class="tax-value">${{ $totalHST }}</span>
            </div>
            <div class="flex justify-between gap-7  mb-3">
                <span class="tax-label"><strong>Total Taxes:</strong></span> <span class="tax-value">${{ $totalTaxes }}</span>
            </div>

            <div class="flex justify-between gap-7  mb-3 total-line">
                <strong>Total:</strong> <span class="total-value">${{ $totalPriceWithTaxes }}</span>
            </div>


            <form action="{{ route('checkout') }}" method="POST" novalidate>
                @csrf
                <input type="hidden" name="cart" value="{{ json_encode($cart) }}">
                <button type="submit" class="summary-checkout ">Checkout</button>
            </form>
        </div>
    </div>
    @else
    <div class="w-3/4 mx-auto text-center mt-4">
        <p class="text-2xl font-semibold mb-8">Your cart is empty.</p>
        <a href="/products" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Continue Shopping</a>
    </div>

    @endif
</main>

@include('partials.footer')
@endsection