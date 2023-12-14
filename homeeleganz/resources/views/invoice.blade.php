@extends('layouts.main')
@section('content')

<main class="main-container bg-white mt-6 px-4 sm:px-6 lg:px-8" style="width: 70%; margin: auto;">

    <div class="bg-white rounded-lg shadow-lg px-8 py-10 mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div id="logo" class="pl-5 pb-4">
                <h1><span>Home</span>Eleganz</h1>
            </div>
            <div class="text-gray-700">
                <div class="font-bold text-xl mb-2">INVOICE</div>
                <div class="text-sm">Date: 01/05/2023</div>
                <div class="text-sm">Invoice #: INV12345</div>
            </div>
        </div>
        <div class="border-b-2 border-gray-300 pb-8 mb-8">
            <h2 class="text-2xl font-bold mb-4">Bill To:</h2>
            <div class="text-gray-700 mb-2">John Doe</div>
            <div class="text-gray-700 mb-2">123 Main St.</div>
            <div class="text-gray-700 mb-2">Anytown, USA 12345</div>
            <div class="text-gray-700">johndoe@example.com</div>
        </div>
        <table class="w-full text-left mb-8">
            <thead>
                <tr>
                    <th class="text-gray-700 font-bold uppercase py-2">Description</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Quantity</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Price</th>
                    <th class="text-gray-700 font-bold uppercase py-2">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-4 text-gray-700">Product 1</td>
                    <td class="py-4 text-gray-700">1</td>
                    <td class="py-4 text-gray-700">$100.00</td>
                    <td class="py-4 text-gray-700">$100.00</td>
                </tr>
                <tr>
                    <td class="py-4 text-gray-700">Product 2</td>
                    <td class="py-4 text-gray-700">2</td>
                    <td class="py-4 text-gray-700">$50.00</td>
                    <td class="py-4 text-gray-700">$100.00</td>
                </tr>
                <tr>
                    <td class="py-4 text-gray-700">Product 3</td>
                    <td class="py-4 text-gray-700">3</td>
                    <td class="py-4 text-gray-700">$75.00</td>
                    <td class="py-4 text-gray-700">$225.00</td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-end mb-8">
            <div class="text-gray-700 mr-2">Subtotal:</div>
            <div class="text-gray-700">$425.00</div>
        </div>
        <div class="flex justify-end mb-8">
            <div class="text-gray-700 mr-2">Tax:</div>
            <div class="text-gray-700">$25.50</div>
        </div>
        <div class="flex justify-end mb-8">
            <div class="text-gray-700 mr-2">Total:</div>
            <div class="text-gray-700 font-bold text-xl">$450.50</div>
        </div>
        <div class="border-t-2 border-gray-300 pt-8 mb-8 text-center">
        <div class="text-gray-700 mb-5">Thank you for shopping with us!</div>
            <div class="text-gray-700">460 Portage Ave, Winnipeg, MB</div>
        </div>
    </div>

</main>

@include('partials.footer')
@endsection