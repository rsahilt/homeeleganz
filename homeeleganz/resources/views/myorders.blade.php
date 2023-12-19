@extends('layouts.main')
@section('content')


@if($orders->count() > 0)
    <h1>Your Orders</h1>
    <ul>
        @foreach($orders as $order)
            <li>{{ $order->id }} - {{ $order->name }} - {{ $order->description }}</li>
        @endforeach
    </ul>
@else
    <p>No orders found.</p>
@endif


@include('partials.footer')
@endsection