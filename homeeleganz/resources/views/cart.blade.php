@extends('layouts.main')
@section('content')

    <main class="main-container">
        <h1 class="cart-title">My Cart</h1>
        <div class="cart-container bg-gray-100 w-[40%] mx-auto">
            @foreach($cart as $cartItem)
            <!-- Cart item -->
            <div class="cart-item">
                <div class="cart-item-image-box"></div>
                <div class="cart-item-details">
                    <div class="room">
                        <p class="item-name">{{ $cartItem['name'] }}</p>
                        
                    </div>
                    <!-- <div class="item">
                        <p class="item-quantity">Quantity: 1</p>
                    </div> -->
                    <div class="price">
                        <p class="item-price">${{ $cartItem['unit_price'] }}</p>
                        <button class="item-remove">Remove</button>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>

        <div class="cart-summary">
            <div class="summary">
                <p class="summary-items">Bag: {{ count($cart) }} items</p>
            </div>
            <div class="total">
                <!-- Calculate total price here -->
                <p class="summary-total">Total: $100</p>
                <button class="summary-checkout">Checkout</button>
            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection
