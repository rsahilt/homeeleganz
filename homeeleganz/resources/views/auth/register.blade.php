@extends('layouts.main')

@section('content')
<div class="container mx-auto mt-10">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">{{ __('Register') }}</h1>

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <div class="mb-4">
                        <label for="first_name" class="block text-sm font-semibold text-gray-600">{{ __('First Name') }} <span class="text-red-600">*</span></label>
                        <input id="first_name" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="first_name" required value="John">
                    </div>

                    <!-- Last Name -->
                    <div class="mb-4">
                        <label for="last_name" class="block text-sm font-semibold text-gray-600">{{ __('Last Name') }} <span class="text-red-600">*</span></label>
                        <input id="last_name" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="last_name" required value="Doe">
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-semibold text-gray-600">{{ __('Email Address') }} <span class="text-red-600">*</span></label>
                        <input id="email" type="email" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="email" required value="johndoe@example.com">
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-semibold text-gray-600">{{ __('Password') }} <span class="text-red-600">*</span></label>
                        <input id="password" type="password" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="password" required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-600">{{ __('Confirm Password') }} <span class="text-red-600">*</span></label>
                        <input id="password_confirmation" type="password" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="password_confirmation" required>
                    </div>

                    <!-- Address -->
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-semibold text-gray-600">{{ __('Address') }} <span class="text-red-600">*</span></label>
                        <input id="address" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="address" required value="123 Street">
                    </div>

                    <!-- Street -->
                    <div class="mb-4">
                        <label for="street" class="block text-sm font-semibold text-gray-600">{{ __('Street') }} <span class="text-red-600">*</span></label>
                        <input id="street" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="street" required value="Main St">
                    </div>

                    <!-- City -->
                    <div class="mb-4">
                        <label for="city" class="block text-sm font-semibold text-gray-600">{{ __('City') }} <span class="text-red-600">*</span></label>
                        <input id="city" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="city" required value="Anytown">
                    </div>

                    <!-- Province -->
                    <div class="mb-4">
                        <label for="province" class="block text-sm font-semibold text-gray-600">{{ __('Province') }} <span class="text-red-600">*</span></label>
                        <input id="province" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="province" required value="Province">
                    </div>

                    <!-- Country -->
                    <div class="mb-4">
                        <label for="country" class="block text-sm font-semibold text-gray-600">{{ __('Country') }} <span class="text-red-600">*</span></label>
                        <input id="country" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="country" required value="Country">
                    </div>

                    <!-- Postal Code -->
                    <div class="mb-4">
                        <label for="postal_code" class="block text-sm font-semibold text-gray-600">{{ __('Postal Code') }} <span class="text-red-600">*</span></label>
                        <input id="postal_code" type="text" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="postal_code" required value="12345">
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label for="phone_number" class="block text-sm font-semibold text-gray-600">{{ __('Phone Number') }} <span class="text-red-600">*</span></label>
                        <input id="phone_number" type="tel" class="form-input h-10 w-full px-3 rounded-md border-2 border-gray-300 focus:outline-none focus:border-blue-500" name="phone_number" required value="123-456-7890">
                    </div>

                    <!-- Register as Admin -->
                    <div class="mb-4">
                        <label for="is_admin" class="text-sm font-semibold text-gray-600">
                            <input class="form-checkbox mr-2" type="checkbox" name="is_admin" id="is_admin" {{ old('is_admin') ? 'checked' : '' }}>
                            {{ __('Register as Admin') }}
                        </label>
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
