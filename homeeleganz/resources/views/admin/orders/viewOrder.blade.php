@extends('layouts.dashboardheader')
@section('content')

<div class="dashboard w-full">
    @include('partials.aside')
    <main>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                <caption
                    class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Order id: {{ $order->id }}
                    <br>

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






            </table>

            <div class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <div id="items" class="w-[60%] h-auto mx-auto my-[3rem] p-6 bg-gray-100 ">
                    <a href="/admin/orders"
                        class="mt-2 mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all">
                        Back
                    </a>

                    @foreach($items as $item)
                    <div class="flex items-center justify-between p-4  border-gray-300">
                        <div class="flex justify-center items-center">
                            <span class="text-lg font-semibold">{{ $item->name }}</span>
                            <span class="text-gray-600 ml-4">x{{ $item->quantity }}</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">${{ number_format($item->unit_price, 2) }}</span>
                            <span class="text-xs text-gray-400">{{ $item->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    <hr class="my-[1rem]">
                    @endforeach
                    <div class="flex items-center justify-between p-4  border-gray-300">
                        <div class="flex justify-center items-center">
                            <span class="text-[1.5rem] tracking-wider font-bold text-black">Total: </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600">${{ $order->total }}</span>

                        </div>
                    </div>






                </div>



            </div>

        </div>
    </main>
</div>




@endsection