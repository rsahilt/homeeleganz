@extends('layouts.main')
@section('content')
<div class="container mx-auto mt-10">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-8 text-center">
                    <h1 class="text-3xl font-bold text-gray-800">{{ __('Login') }}</h1>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-semibold text-gray-600 mb-2">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-semibold text-gray-600 mb-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4 flex items-center">
                        <input class="form-checkbox mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="text-sm text-gray-700" for="remember">{{ __('Remember Me') }}</label>
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-500 hover:text-blue-700" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@include('partials.footer')
@endsection