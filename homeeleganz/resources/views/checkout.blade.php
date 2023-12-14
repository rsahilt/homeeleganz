@extends('layouts.main')
@section('content')

    <div id="checkout" class="font-lato text-center text-[1.5em] mt-[1rem] tracking-wider">
        <h1>{{ $title }}</h1>

    </div>

    @auth
    <div id="items" class="w-[40%] h-auto mx-auto my-[3rem] p-6 bg-gray-100 ">
    
        @foreach($cart as $cartItem)
            <div class="flex justify-between">
                <span>{{ $cartItem['name'] }}</span>

                <span>${{ $cartItem['unit_price'] }}</span>
            </div>
        <hr class="my-[1rem]">
        @endforeach
        
        <hr class="my-[1rem]">
        <div class="flex justify-between">

            <span>Sub Total</span>
            <span>${{ $totalPrice }}</span>

        </div>

        <div class="flex justify-between">

            <span>GST</span>

            <span>${{ number_format($totalGST, 2) }}</span>

        </div>
        <div class="flex justify-between">

            <span>PST</span>

            <span>${{ number_format($totalPST, 2) }}</span>

        </div>
        <div class="flex justify-between">

            <span>HST</span>

            <span>${{ number_format($totalHST,2) }}</span>
        </div>

        <div class="flex justify-between">

            <span>Total Taxes</span>

            <span>${{ number_format($totalTaxes, 2) }}</span>
        </div>
        <hr class="my-[1rem]">
        <div class="flex justify-between items-center">

            <span class="uppercase tracking-wider"><b>Final amount to pay</b></span>

            <span><b>${{ number_format($totalPriceWithTaxes, 2) }}</b></span>
        </div>
    
        <a href="/cart" class="mt-2 mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all">
            Back
        </a>
    </div>

    <div id="payment" class="w-2/5 mx-auto my-12 p-6 bg-gray-100 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-6">Add Card Details</h1>
        <form action="{{ route('transaction') }}" method="POST" novalidate>
            @csrf
            <input type="hidden" name="totalamount" value="{{ $totalPriceWithTaxes }}">
            <div class="mb-4">
                <label for="cardName" class="block text-sm font-medium text-gray-600">Name on the Card</label>
                <input type="text" id="cardName" name="cardName" placeholder="Name on the Card"
                    class="mt-1 p-2 w-full border rounded-md">
                    @error('cardName')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
            </div>

            <div class="mb-4">
                <label for="cardNumber" class="block text-sm font-medium text-gray-600">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="Card Number"
                    class="mt-1 p-2 w-full border rounded-md">
                    @error('cardNumber')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
            </div>

            <div class="mb-4">
                <label for="cvv" class="block text-sm font-medium text-gray-600">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" class="mt-1 p-2 w-full border rounded-md">
                    @error('cvv')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
            </div>

            <div class="mb-4">
                <label for="ref" class="block text-sm font-medium text-gray-600">Reference Number</label>
                <input type="text" id="ref" name="ref" placeholder="Card Number"
                    class="mt-1 p-2 w-full border rounded-md">
                @error('ref')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-600">Card Type</label>
        <div class="mt-1">
            <label class="inline-flex items-center">
                <input type="radio" name="cardType" value="visa" class="form-radio">
                <span class="ml-2">Visa</span>
            </label>
            <label class="inline-flex items-center ml-4">
                <input type="radio" name="cardType" value="credit" class="form-radio">
                <span class="ml-2">Amex</span>
            </label>
            <label class="inline-flex items-center ml-4">
                <input type="radio" name="cardType" value="master" class="form-radio">
                <span class="ml-2">Master</span>
            </label>
        </div>
    </div>

            <div class="mb-4">
                <label for="expiry" class="block text-sm font-medium text-gray-600">Expiry Date</label>
                <input type="text" id="expiry" name="expiry" placeholder="xx/xx" class="mt-1 p-2 w-full border rounded-md">
                @error('expiry')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end">
                <button class="bg-blue-500 text-white font-semibold py-2 px-12 rounded-md">Pay</button>
            </div>
        </form>
    </div>
        
    @else
    <div class="text-center my-10">
        <p class="mb-4">Please login to view your cart.</p>
        <a href="{{ route('login') }}" class="inline-block bg-blue-500 text-white font-semibold py-2 px-12 rounded-md">Login</a>
    </div>
@endauth

    



    @include('partials.footer')
@endsection