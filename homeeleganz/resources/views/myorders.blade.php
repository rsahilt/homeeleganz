@extends('layouts.main')
@section('content')

<div class="order-container">
<h1 class="font-bold">Your Orders</h1>
@if($orders->count() > 0)
    <ul>
        @foreach($orders as $order)
            <li>
                Order ID: {{ $order->id }}
                <ul>
                    @foreach($order->lineItems as $lineItem)
                        <li>
                            <img src="/images/{{ $lineItem->product->image }}" width="200px" alt="{{ $lineItem->product->name }}">
                        </li>
                        <li>
                            Product Name: {{ $lineItem->product->name }}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@else
    <p>You have no orders yet.</p>
@endif
</div>

@include('partials.footer')
@endsection
