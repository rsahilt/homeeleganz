<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cart</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body class="font-lato">
    @include('partials.header')

    <main class="main-container">
        <h1 class="cart-title">Cart</h1>
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
            <p class="summary-items">6 items</p>
            <p class="summary-total">Total: $300</p>
            <button class="summary-checkout">Checkout</button>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>
