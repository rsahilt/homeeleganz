@extends('layouts.main')
@section('content')

    <main class="main-container">
        <h1 class="cart-title">Cart</h1>
        <div class="cart-container bg-gray-100 w-[40%] mx-auto">
            <!-- Cart item -->
            <div class="cart-item">

                
                <div class="cart-item-image-box"></div>
                <div class="cart-item-details">
                    <div class="room">
                    <p class="item-name">Sofa Set</p>
                    <p class="item-category">Living Room</p>
                    </div>
                    <div class="item">
                    <p class="item-quantity">x3</p>
                    </div>
                    <div class="price">
                    <p class="item-price">$150</p>
                    <button class="item-remove">Remove</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="cart-container bg-gray-100">
            <!-- Cart item -->
            <div class="cart-item">

                
                <div class="cart-item-image-box"></div>
                <div class="cart-item-details">
                    <div class="room">
                    <p class="item-name">Sofa Set</p>
                    <p class="item-category">Living Room</p>
                    </div>
                    <div class="item">
                    <p class="item-quantity">x3</p>
                    </div>
                    <div class="price">
                    <p class="item-price">$150</p>
                    <button class="item-remove">Remove</button>
                    </div>
                </div>
            </div>
            <hr>

            <div class="cart-container bg-gray-100">
            <!-- Cart item -->
            <div class="cart-item">

                
                <div class="cart-item-image-box"></div>
                <div class="cart-item-details">
                    <div class="room">
                    <p class="item-name">Sofa Set</p>
                    <p class="item-category">Living Room</p>
                    </div>
                    <div class="item">
                    <p class="item-quantity">x3</p>
                    </div>
                    <div class="price">
                    <p class="item-price">$150</p>
                    <button class="item-remove">Remove</button>
                    </div>
                </div>
            </div>
            <hr>
            
        </div>

        <div class="cart-summary">
            <div class="summary">
            <p class="summary-items">6 items</p>
            </div>
            <div class="total">
            <p class="summary-total">Total: $300</p>
            <button class="summary-checkout">Checkout</button>
            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection