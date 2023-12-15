@extends('layouts.main')

@section('content')
<main class="p-4">
    <h1>{{ $title }}</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <ul>
        @foreach ($orders as $order)
            <li>
                Order ID: {{ $order->id }} - Date: {{ $order->order_date->format('Y-m-d') }}
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</main>
@endsection
