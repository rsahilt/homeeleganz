@extends('layouts.dashboardheader')
@section('content')
    <div class="dashboard w-full">
        @include('partials.aside')
        <main>
            <div class="grid grid-cols-1 gap-4 px-4 mt-8 sm:grid-cols-4 sm:px-8">
                <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                    <div class="p-4 bg-green-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg></div>
                    <div class="px-4 text-gray-700">
                        <h3 class="text-sm tracking-wider">Registered Users</h3>
                        <p class="text-3xl">{{ $usercount }}</p>
                    </div>
                </div>
                <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                    <div class="p-4 bg-blue-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                            </path>
                        </svg></div>
                    <div class="px-4 text-gray-700">
                        <h3 class="text-sm tracking-wider">Total Reviews</h3>
                        <p class="text-3xl">{{ $reviewcount }}</p>
                    </div>
                </div>
                <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                    <div class="p-4 bg-indigo-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                            </path>
                        </svg></div>
                    <div class="px-4 text-gray-700">
                        <h3 class="text-sm tracking-wider">Feedbacks</h3>
                        <p class="text-3xl">{{ $messagecount }}</p>
                    </div>
                </div>
            </div>




            <!-- list of latest 10 products -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5 mx-8">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Latest Addition
                    </caption>

                    
                    
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product Code
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Brand
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Added Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $product->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                {{ $product->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $product->brand }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach ($product->categories as $category)
                                    {{ $category->name }}
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->created_at->format('m/d/Y') }}
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <!-- list of latest 5 users -->

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5 mx-8">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        New Customers
                    </caption>

                    
                    
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                User Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Country
                            </th>
                            <th scope="col" class="px-6 py-3">
                                City
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Joined Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $user->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                {{ $user->first_name }} {{ $user->last_name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->address }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $user->city }}
                            </td>
                            
                            <td class="px-6 py-4">
                                {{ $product->created_at->format('m/d/Y') }}
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>

@endsection

