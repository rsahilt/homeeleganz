<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Checkout</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>


<body class="font-lato overflow-x-hidden">
    @include('partials.header')

    <div id="checkout" class="font-lato text-center text-[1.5em] mt-[1rem] tracking-wider">
        <h1>CHECKOUT</h1>

    </div>

    <div id="items" class="w-[40%] h-auto mx-auto my-[3rem] p-6 bg-gray-100 ">
        <div class="flex justify-between">
            <span>Sofa set <br>x3</span>

            <span>$150</span>
        </div>
        <hr class="my-[1rem]">
        <div class="flex justify-between">
            <span>Sofa set<br>x3</span>

            <span>$150</span>
        </div>
        <hr class="my-[1rem]">
        <div class="flex justify-between">

            <span>Total</span>
            <span>$300</span>

        </div>

        <div class="flex justify-between">

            <span>HST</span>

            <span>$30</span>

        </div>
        <div class="flex justify-between">

            <span>PST</span>

            <span>$20</span>
        </div>
        <hr class="my-[1rem]">
        <div class="flex justify-between items-center">

            <span class="uppercase tracking-wider"><b>Final amount to pay</b></span>

            <span><b>$350</b></span>
        </div>
    </div>

    <div id="payment" class="w-2/5 mx-auto my-12 p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-6">Add Card Details</h1>

        <div class="mb-4">
            <label for="cardName" class="block text-sm font-medium text-gray-600">Name on the Card</label>
            <input type="text" id="cardName" name="cardName" placeholder="Name on the Card"
                class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="cardNumber" class="block text-sm font-medium text-gray-600">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Card Number"
                class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="cvv" class="block text-sm font-medium text-gray-600">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="CVV" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="flex justify-end">
            <button class="bg-blue-500 text-white font-semibold py-2 px-12 rounded-md">Pay</button>
        </div>
    </div>



    @include('partials.footer')
</body>

</html>