@extends('layouts.main')
@section('content')

<div class="main-container bg-white mt-6 px-4 sm:px-6 lg:px-8" style="width:70%; margin: auto;">

    <h1 class="font-bold text-3xl text-center pt-5">Thank you for shopping with us. Your shipment is on the way!</h1>
    <div class="bg-white rounded-lg shadow-lg px-8 py-10 mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div id="logo" class="pb-4">
                <h1 class="invoice-logo"><span>Home</span>Eleganz</h1>
            </div>
            <div class="text-gray-700">
                <div class="font-bold text-xl mb-2">INVOICE</div>
                <!-- showing the date of invoice -->
                <div class="text-sm">Date: {{ date('m/d/Y') }}</div>
                <div class="text-sm">Invoice #: INV{{ $order['id'] }}</div>
            </div>
        </div>
        <div class="border-b-2 border-gray-300 pb-8 mb-8">
            <!-- getting the address from auth as the user is loggedin -->
            <h2 class="text-2xl font-bold mb-4">ShippingAddress</h2>
            <div class="text-gray-700 mb-2">{{ $userdetails->first_name }} {{ $userdetails->last_name }}</div>
            <div class="text-gray-700 mb-2">{{ $userdetails->address}}-{{ $userdetails->street }}, {{ $userdetails->postal_code }}</div>
            <div class="text-gray-700 mb-2">{{ $userdetails->city }}, {{ $userdetails->province }}</div>
            <div class="text-gray-700 mb-2">{{ $userdetails->country }}</div>
            <div class="text-gray-700">{{ $userdetails->email }}</div>
        </div>
        

        <table class="w-full text-left mb-8">
            @php
                $cartItems = session('cartItems');
                $totalPrice = session('totalPrice');
                $totalPriceWithTaxes = session('totalPriceWithTaxes');
                $totalGST = session('totalGST');
                $totalPST = session('totalPST');
                $totalHST = session('totalHST');
                $totalTaxes = session('totalTaxes');
                $totalPriceWithTaxes = session('totalPriceWithTaxes');
            @endphp
            <thead>
                <tr>
                    <th class="text-gray-700 font-bold uppercase py-2">Items</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Quantity</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Unit Price</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- carrying out a loop to show all necessary product details in invoice -->
                @foreach($cartItems as $cartItem)
                @php
                    $itemTotal = $cartItem['product']['unit_price'] * $cartItem['quantity'];
                @endphp
                <tr>
                    <td class="py-4 text-gray-700">{{ $cartItem['product']['name'] ?? 'Product Name' }}</td>
                    <td class="py-4 text-gray-700">{{ $cartItem['quantity'] }}</td>
                    <td class="py-4 text-gray-700">${{ $cartItem['product']['unit_price'] ?? '0.00' }}</td>
                    <td class="py-4 text-gray-700">${{ number_format($itemTotal, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-end mb-3">
            <div class="text-gray-700 mr-2">Subtotal:</div>
            <div class="text-gray-700">${{ $totalPrice }}</div>
        </div>

        <div class="flex justify-end mb-3">
            <div class="text-gray-700 mr-2">GST:</div>
            <div class="text-gray-700">${{ number_format(session('totalGST'), 2) }}</div>
        </div>

        <div class="flex justify-end mb-3">
            <div class="text-gray-700 mr-2">PST:</div>
            <div class="text-gray-700">${{ number_format(session('totalPST'), 2) }}</div>
        </div>

        <div class="flex justify-end mb-3">
            <div class="text-gray-700 mr-2">HST:</div>
            <div class="text-gray-700">${{ number_format(session('totalHST'), 2) }}</div>
        </div>
        
        <div class="flex justify-end mb-3">
            <strong><div class="text-gray-700 mr-2">Total: </div></strong>
            <strong><div class="text-gray-700 font-bold">${{ number_format(session('totalPriceWithTaxes'), 2) }}</div></strong>
        </div>
        <div class="border-t-2 border-gray-300 pt-8 mb-8 text-center">
        <div class="text-gray-700 font-bold text-2xl">Home Eleganz Inc.</div>
            <div class="text-gray-700 text-xl">320 Colony Street, Winnipeg, MB R3C 0E8</div>
            <div class="text-gray-700 text-xl">Canada</div>
        </div>
    </div>

</div>

@include('partials.footer')

@endsection
