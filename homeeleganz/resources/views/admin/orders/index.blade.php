@extends('layouts.dashboardheader')
@section('content')

<div class="dashboard w-full">
    @include('partials.aside')
    <main>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    {{ $title }}
                    
                    <!-- flash message -->
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
                            Order id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order date
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- showing all the orders and info from the orders table -->
                    @foreach($orders as $order)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $order->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                            {{ $order->created_at ? $order->created_at->format('m/d/Y') : 'N/A' }}
                            </th>

                        <td class="px-6 py-4">
                            {{ $order->total }}
                        </td>



                        <!-- in the status, putting user friendly data -->
                        <td class="px-6 py-4">
                            @if ($order->status == 0)
                            Failed
                            @elseif ($order->status == 1)
                            Success
                            @else
                            Unknown Status
                            @endif
                        </td>


                        <td class=" px-6 py-4">
                            <div class="inline-block"> <a href="{{ route('orders.viewOrder', $order->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>


                            </div>

                        </td>
                    </tr>
                    @endforeach
                    <!-- pagination -->
                    {{ $orders->links() }} 
                </tbody>
            </table>
        </div>

    </main>

</div>

@endsection