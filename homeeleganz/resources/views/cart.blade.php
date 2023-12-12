@extends('layouts.main')
@section('content')

    <main class="main-container">
        <h1 class="cart-title">My Cart</h1>

        @if(count($cart) > 0)
        <div class="cart-container bg-gray-100 w-[40%] mx-auto">
            <?php $totalPrice = 0; ?>
            @foreach($cart as $productId => $cartItem)
                <!-- Cart item -->
                <div class="cart-item">
                    <div class="cart-item-image-box">
                        <img src="/images/{{ $cartItem['image'] }}" alt="{{ $cartItem['name'] }}" >
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

        <div class="cart-summary">
            <div class="summary">
                <p class="summary-items">Bag: {{ count($cart) }} items</p>
            </div>
            <div class="total">
                <!-- Display the calculated total price -->
                <p class="summary-total">Sub Total: ${{ $totalPrice }}</p>
                <p>GST: ${{ $totalGST }}</p>
                <p>PST: ${{ $totalPST }}</p>
                <p>HST: ${{ $totalHST }}</p>
                <p>Total Taxes: ${{ $totalTaxes }}</p>
                <strong><p>Total: ${{ $totalPriceWithTaxes }}</p></strong>
                <form action="{{ route('checkout') }}" method="POST" novalidate>
                    @csrf
                    <input type="hidden" name="cart" value="{{ json_encode($cart) }}">
                    <button type="submit" class="summary-checkout">Checkout</button>
                </form>
            </div>
        </div>
        @else
            <div class="empty-cart-message">
                <p>Your cart is empty.</p>
                <a href="/products">Continue Shopping</a>
            </div>
        @endif
    </main>

    @include('partials.footer')
@endsection
