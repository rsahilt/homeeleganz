@extends('layouts.main')
@section('content')
<div class="bg-gray-80 min-h-screen flex items-center justify-center">
    <div class="bg-white p-4 rounded-lg shadow-lg max-w-lg w-full">
        <div class="flex justify-center mb-4">
            <span class="inline-block bg-gray-200 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
            </span>
        </div>
        <h2 class="text-xl font-semibold text-center mb-2">Create a new account</h2>
        <p class="text-gray-600 text-center mb-4">Enter your details to register.</p>
        <form>
            <div class="mb-2">
                <label for="fullName" class="block text-gray-700 text-xs font-semibold mb-1">Full Name *</label>
                <input type="text" id="fullName" class="form-input w-full px-3 py-2 border rounded-lg text-sm text-gray-700 focus:ring-blue-500" required placeholder="James Brown">
            </div>
            <div class="mb-2">
                <label for="email" class="block text-gray-700 text-xs font-semibold mb-1">Email Address *</label>
                <input type="email" id="email" class="form-input w-full px-3 py-2 border rounded-lg text-sm text-gray-700 focus:ring-blue-500" required placeholder="hello@alignui.com">
            </div>
            <div class="mb-2">
                <label for="phone" class="block text-gray-700 text-xs font-semibold mb-1">Phone Number</label>
                <input type="tel" id="phone" class="form-input w-full px-3 py-2 border rounded-lg text-sm text-gray-700 focus:ring-blue-500" placeholder="123-456-7890">
            </div>
            <div class="mb-2">
                <label for="city" class="block text-gray-700 text-xs font-semibold mb-1">City</label>
                <input type="text" id="city" class="form-input w-full px-3 py-2 border rounded-lg text-sm text-gray-700 focus:ring-blue-500" placeholder="Your City">
            </div>
            <div class="mb-2">
                <label for="postalCode" class="block text-gray-700 text-xs font-semibold mb-1">Postal Code</label>
                <input type="text" id="postalCode" class="form-input w-full px-3 py-2 border rounded-lg text-sm text-gray-700 focus:ring-blue-500" placeholder="12345">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-xs font-semibold mb-1">Password *</label>
                <input type="password" id="password" class="form-input w-full px-3 py-2 border rounded-lg text-sm text-gray-700 focus:ring-blue-500" required placeholder="••••••••">
                <p class="text-gray-600 text-xs mt-1">Must contain 1 uppercase letter, 1 number, min. 8 characters.</p>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 text-sm">Register</button>
            <p class="text-gray-600 text-xs text-center mt-3">
                By clicking Register, you agree to accept Apex Financial's
                <a href="#" class="text-blue-500 hover:underline">Terms and Conditions</a>.
            </p>
        </form>
    </div>
</div>



    

@include('partials.footer')
@endsection
