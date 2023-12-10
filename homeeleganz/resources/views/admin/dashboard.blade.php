@extends('layouts.app')
@section('content')
    <!-- <div class="flex flex-col  min-h-screen overflow-x-hidden overflow-y-auto bg-dark text-white" style="margin-top: 20px;">
        <div class="flex items-center justify-center flex-1 h-full p-4">
            <main>
                <h1 class="text-3xl font-semibold">Admin Dashboard</h1>
                @foreach($messages as $message)
                name: {{ $message->name }}
                email: {{ $message->email }}
                message: {{ $message->message }}
                @endforeach
            </main>
        </div>
    </div> -->
    <div class="dashboard w-full">
    <aside>
    <ul class="pl-5 pt-5">
        <li>
            <a href="#" class="block py-3 px-4 text-white text-lg">Dashboard</a>
        </li>

        <li>
            <a href="#" class="block py-3 px-4 text-white text-lg">Inbox</a>
        </li>

        <li>
            <a href="#" class="block py-3 px-4 text-white text-lg">Users</a>
        </li>

        <li>
            <a href="#" class="block py-3 px-4 text-white text-lg">Products</a>
        </li>

        <li>
            <a href="#" class="block py-3 px-4 text-white text-lg">Taxes</a>
        </li>

        <li>
            <a href="#" class="block py-3 px-4 text-white text-lg">Categories</a>
        </li>

        <li>
            <a href="#" class="block py-3 px-4 text-white text-lg">Reviews</a>
        </li>
        
        <li>
            <a href="#" class="block py-3 px-4 text-white text-lg">Orders</a>
        </li>
    </ul>
</aside>
        <main></main>
    </div>

@endsection

