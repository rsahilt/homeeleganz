@extends('layouts.app')
@section('content')
    <div class="flex flex-col  min-h-screen overflow-x-hidden overflow-y-auto bg-dark text-black" style="margin-top: 20px;">
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
    </div>
    <div class="dashboard w-full">
        @include('partials.aside')
        <main>
            content goes here
        </main>
    </div>

@endsection

