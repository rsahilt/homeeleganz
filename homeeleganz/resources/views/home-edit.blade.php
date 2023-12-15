@extends('layouts.main')
@section('content')

<div class="p-16">
    <h2 class="mx-auto p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
        Edit profile
    </h2>
    <div class="p-8 bg-white shadow">
        <div class="flex justify-center">
            <form action="{{ route('updateProfile', ['id' => $user->id]) }}" novalidate method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type your first name" value="{{ old('first_name', $user->first_name) }}">

                        @error('first_name')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            Name</label>
                        <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type you last name" value="{{ old('last_name',  $user->last_name) }}">
                        @error('last_name')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email" value="{{ old('email',  $user->email) }}">
                        @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">House/Unit/Suite
                            no.</label>
                        <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Country" value="{{ old('address',  $user->address) }}">
                        @error('address')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="street" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Street</label>
                        <input type="text" name="street" id="street" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="street" value="{{ old('street',  $user->street) }}">
                        @error('address')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                        <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="city" value="{{ old('city',  $user->city) }}">
                        @error('city')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                        <input type="text" name="province" id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Province" value="{{ old('province',  $user->province) }}">
                        @error('province')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="postal_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Postal Code</label>
                        <input type="text" name="postal_code" id="postal_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Postal Code" value="{{ old('postal_code',  $user->postal_code) }}">
                        @error('postal_code')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Phone Number" value="{{ old('phone_number',  $user->phone_number) }}">
                        @error('phone_number')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="w-full text-center">

                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-600 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-700 transition-all">
                        Save Changes
                    </button>
                    <a href="/home" class="mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all">
                        Back
                    </a>
                </div>
            </form>
        </div>


    </div>
</div>


@include('partials.footer')

@endsection