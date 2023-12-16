@extends('layouts.main')

@section('content')
<div class="container mx-auto mt-10">
    <div class="flex justify-center">
        <div class="w-full max-w-2xl">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">{{ __('Register') }}</h1>

                <form method="POST" action="{{ route('register') }}" class="space-y-4" novalidate>
                    @csrf

                    <div class="flex flex-wrap -mx-2">
                        <!-- First Name -->
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <label for="first_name" class="block text-sm font-semibold text-gray-600">{{ __('First Name') }} <span class="text-red-600">*</span></label>
                            <input id="first_name" name="first_name" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="first_name" autocomplete="first_name" autofocus>
                            @error('first_name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Last Name -->
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <label for="last_name" class="block text-sm font-semibold text-gray-600">{{ __('Last Name') }} <span class="text-red-600">*</span></label>
                            <input id="last_name" name="last_name" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="last_name" autocomplete="last_name">
                            @error('last_name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-semibold text-gray-600">{{ __('Email Address') }} <span class="text-red-600">*</span></label>
                        <input id="email" name="email" type="email" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="email" autocomplete="email">
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-semibold text-gray-600">{{ __('Password') }} <span class="text-red-600">*</span></label>
                        <input id="password" name="password" type="password" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="password" autocomplete="new-password">
                        @error('password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-600">{{ __('Confirm Password') }} <span class="text-red-600">*</span></label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="password_confirmation" autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- House No and Street on the same line -->
                    <div class="flex flex-wrap -mx-2">
                        <!-- House No -->
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <label for="address" class="block text-sm font-semibold text-gray-600">{{ __('House/Unit/Suite no.') }} <span class="text-red-600">*</span></label>
                            <input id="address" name="address" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="address">
                            @error('address')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Street -->
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <label for="street" class="block text-sm font-semibold text-gray-600">{{ __('Street') }} <span class="text-red-600">*</span></label>
                            <input id="street" name="street" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="street">
                            @error('street')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- City and Province on the same line -->
                    <div class="flex flex-wrap -mx-2">
                        <!-- City -->
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <label for="city" class="block text-sm font-semibold text-gray-600">{{ __('City') }} <span class="text-red-600">*</span></label>
                            <input id="city" name="city" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="city">
                            @error('city')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Province -->
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <label for="province" class="block text-sm font-semibold text-gray-600">{{ __('Province') }} <span class="text-red-600">*</span></label>
                            <input id="province" name="province" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="province">
                            @error('province')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Country -->
                    <div class="mb-4">
                        <label for="country" class="block text-sm font-semibold text-gray-600">{{ __('Country') }} <span class="text-red-600">*</span></label>
                        <input id="country" name="country" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="country">
                        @error('country')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Postal Code -->
                    <div class="mb-4">
                        <label for="postal_code" class="block text-sm font-semibold text-gray-600">{{ __('Postal Code') }} <span class="text-red-600">*</span></label>
                        <input id="postal_code" name="postal_code" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="postal_code">
                        @error('postal_code')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label for="phone_number" class="block text-sm font-semibold text-gray-600">{{ __('Phone Number') }} <span class="text-red-600">*</span></label>
                        <input id="phone_number" name="phone_number" type="tel" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="phone_number">
                        @error('phone_number')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Register Button -->
                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline w-full">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection