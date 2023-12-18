@extends('layouts.dashboardheader')
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
                <form action="{{ route('updatetax', ['id' => $tax->id]) }}"
                    method="POST" 
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province Name</label>
                            <select id="province" name="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected disabled>Select province</option>
                                    @foreach($provinces as $province)
                                        <option value="{{ $province->province }}" 
                                                @if($tax->province === $province->province) selected @endif>{{ $province->province }}</option>
                                    @endforeach
                            </select>
                            @error('province')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    

                        <div class="sm:col-span-2">
                            <label for="pst" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PST</label>
                            <input type="number" step="0.01" name="pst" id="pst" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="PST Rate" value="{{ old('pst', $tax->pst) }}">
                            @error('pst')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="sm:col-span-2">
                            <label for="gst" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GST</label>
                            <select id="gst" name="gst" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected disabled>Select GST tax rate</option>
                                @foreach($filteredGstValues as $gstValue)
                                        <option value="{{ $gstValue }}" 
                                            @if($tax->gst === $gstValue) selected @endif>
                                            {{ $gstValue }}
                                        </option>
                                @endforeach
                            </select>
                            @error('gst')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-2">
                            <label for="hst" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HST</label>
                            <select id="hst" name="hst" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected disabled>Select HST tax rate</option>
                                @foreach($filteredHstValues as $hstValue)
                                        <option value="{{ $hstValue }}" 
                                            @if($tax->hst === $hstValue) selected @endif>
                                            {{ $hstValue }}
                                        </option>
                                @endforeach
                            </select>
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
