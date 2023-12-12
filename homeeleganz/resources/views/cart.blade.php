@extends('layouts.main')
@section('content')

    <main class="main-container">
        <h1 class="cart-title">My Cart</h1>
        <div class="cart-container bg-gray-100 w-[40%] mx-auto">
            <?php $totalPrice = 0; ?>
            @foreach($cart as $cartItem)
                <!-- Cart item -->
                <div class="cart-item">
                    <div class="cart-item-image-box"></div>
                    <div class="cart-item-details">
                        <div class="room">
                            <p class="item-name">{{ $cartItem['name'] }}</p>
                        </div>
                        <div class="price">
                            <p class="item-price">${{ $cartItem['unit_price'] }}</p>
                            <button class="item-remove">Remove</button>
                        </div>
                    </div>
                </div>
                <hr>
                <?php $totalPrice += $cartItem['unit_price']; ?>
            @endforeach
        </div>

        <div class="cart-summary">
            <div class="summary">
                <p class="summary-items">Bag: {{ count($cart) }} items</p>
            </div>
            <div class="total">
                <!-- Display the calculated total price -->
                <p class="summary-total">Sub Total: ${{ $totalPrice }}</p>
                <button class="summary-checkout">Checkout</button>
            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection
