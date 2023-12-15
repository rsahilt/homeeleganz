@extends('layouts.dashboardheader')
@section('content')

<div class="dashboard w-full">
    @include('partials.aside')
    <main>
    <h1>Orders</h1>
    <ul>
        @foreach ($orders as $order)
            <li>
                {{ $order->id }} - {{ $order->order_date }}
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    </main>
</div>




@endsection