@extends('layouts.dashboardheader')
@section('content')

<div class="dashboard w-full">
    @include('partials.aside')
    <main>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    {{ $title }}
                <br>
                    <a href="/admin/categories/create" class="mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all mt-3">
                        Add New Category
                    </a>
                    @if (session('success'))
                        <div class="alert alert-success mt-7 rounded-lg bg-green-200">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-error mt-7 rounded-lg bg-green-200">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('danger'))
                        <div class="alert alert-danger mt-7 rounded-lg bg-red-200">
                            {{ session('danger') }}
                        </div>
                    @endif
                </caption>

                

                
                
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Category Code
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Added on
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $category->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                            {{ $category->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $category->created_at ? $category->created_at->format('m/d/Y') : 'N/A' }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="inline-block">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                &nbsp; &nbsp; | &nbsp; &nbsp;
                                <!-- asking the user if they really want to delete, in the form of an alert -->
                                <form action="#" method="POST" novalidate class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="return confirm('Do you really want to remove the product?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</div>




@endsection