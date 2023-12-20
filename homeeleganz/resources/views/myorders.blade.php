@extends('layouts.main')
@section('content')

<div class="order-container">
<h1 class="font-bold pl-5 py-5 text-xl text-center">Your Orders</h1>
@if($orders->count() > 0)
    <ul>
        @foreach($orders as $order)
            <div class="order-card">
            <li>
                <div class="order-box">
                <p><strong>Order ID:</strong> {{ $order->id }}</p>
                <p><strong>Ordered on: {{ $order->created_at->format('Y-m-d') }}</strong></p>
                <ul>
                    @foreach($order->lineItems as $lineItem)
                        <li class="pt-2">
                            <img class="order-pr-image" src="/images/{{ $lineItem->product->image }}" width="200px" alt="{{ $lineItem->product->name }}">
                        </li>
                        <li class="pt-2">
                            <strong>Product Name:</strong> {{ $lineItem->product->name }}
                        </li>
                        <li class="pt-2">
                            <strong>Quantity:</strong> {{ $lineItem->quantity }}
                        </li>
                        <hr>
                    @endforeach
                </ul>
                </div
            </li>
            </div>
        @endforeach
    </ul>
@else
    <p class="text-center">You have no orders yet.</p>
@endif
</div>

@include('partials.footer')
@endsection
