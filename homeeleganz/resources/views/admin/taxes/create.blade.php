@extends('layouts.app')
@section('content')

<div class="dashboard w-full">
    @include('partials.aside')
    <main>

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{ $title }}</h2>
                <a href="/admin/taxes/" class="mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all">
                    Back
                </a>
                <form action=""
                    method="POST" 
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province Name</label>
                            <input type="text" name="province" id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Province Name">
                            @error('province')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    

                        <div class="sm:col-span-2">
                            <label for="pst" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PST</label>
                            <input type="number" step="0.001" name="pst" id="pst" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="PST Rate">
                            @error('pst')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2">
                            <label for="gst" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GST</label>
                            <input type="number" step="0.001" name="gst" id="gst" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="GST Rate">
                            @error('gst')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2">
                            <label for="hst" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HST</label>
                            <input type="number" step="0.001" name="hst" id="hst" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="HST Rate">
                            @error('hst')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                    </div>
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-600 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-700 transition-all">
                        Save Changes
                    </button>
                    
                </form>
            </div>
        </section>
    </main>
</div>
@endsection
