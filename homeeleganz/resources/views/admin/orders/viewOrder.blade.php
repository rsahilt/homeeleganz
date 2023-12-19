@extends('layouts.dashboardheader')
@section('content')

<div class="dashboard w-full">
    @include('partials.aside')
    <main>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
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

            <a href="/admin/orders" class="mt-2 ml-2 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all">
                Back
             </a>
            <div class="w-full flex text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            
            <div id="items" class="w-[40%] h-auto mx-auto my-[3rem] p-6 bg-gray-100 ">
                <div class="text-center mb-2">

                    <h1 class="text-[1.5rem] font-semibold">Order</h1>
                </div>

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
                        <div class="flex flex-col justify-betwen items-start text-left">
                            <span class="text-[1rem] tracking-wider font-bold text-black mb-1">Sub total: </span>
                            <span class="text-[1rem] tracking-wider font-bold text-black mb-1">GST: </span>
                            <span class="text-[1rem] tracking-wider font-bold text-black mb-1">PST: </span>
                            <span class="text-[1rem] tracking-wider font-bold text-black mb-1">HST: </span>
                            <span class="text-[1rem] tracking-wider font-bold text-black mb-1">Total: </span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-gray-600 mb-1">${{ $order->sub_total }}</span>
                            <span class="text-gray-600 mb-1">${{ number_format($order->gst, 2) }}</span>
                            <span class="text-gray-600 mb-1">${{ number_format($order->pst, 2) }}</span>
                            <span class="text-gray-600 mb-1">${{ number_format($order->hst, 2) }}</span>
                            <span class="text-gray-600 mb-1">${{ number_format($order->total, 2) }}</span>
                        </div>
                    </div>

                </div>

                <div id="shipping" class="w-[30%] h-auto mx-auto my-[3rem] p-6 bg-gray-100 ">
                    <div class="text-center mb-2">
                        <h1 class="text-[1.5rem] font-semibold">Shipping Address</h1>
                    </div>

                    <div class="w-100 flex flex-col items-center justify-between p-4  border-gray-300">
                        <div class="w-[100%] flex justify-between items-center mb-3">
                            <span class="text-lg font-semibold">{{ $order->user->first_name }} {{ $order->user->last_name }}</span>
                        </div>
                        <div class="w-[100%] flex justify-between items-center mb-3">
                            <span class="text-lg font-semibold"> {{ $order->user->address }} - {{ $order->user->street }}</span>
                        </div>
                        <div class="w-[100%] flex justify-between items-center mb-3">
                            <span class="text-lg font-semibold"> {{ $order->user->city }}, {{ $order->user->postal_code }}</span>
                        </div>
                        <div class="w-[100%] flex justify-between items-center mb-3">
                            <span class="text-lg font-semibold"> {{ $order->user->province }}, {{ $order->user->country }}</span>
                        </div>
                    </div>
                
                </div>


                <div id="transactions" class="w-[30%] h-auto mx-auto my-[3rem] p-6 bg-gray-100 ">
                    <div class="text-center mb-2">

                        <h1 class="text-[1.5rem] font-semibold">Transactions</h1>
                    </div>
                    @foreach($transactions as $transaction)
                    
                    <div class="w-100 flex flex-col items-center justify-between p-4  border-gray-300">
                        <div class="w-[100%] flex justify-between items-center mb-3">
                            <span class="text-lg font-semibold">Transaction id:
                            </span>
                            <span class="text-gray-600 ml-4"> {{ $transaction->id }}</span>
                        </div>

                        <div class="w-[100%] flex justify-between items-center mb-3">
                            <span class="text-lg font-semibold">Transaction status:
                            </span>
                            <span class="text-gray-600 ml-4"> {{ $transaction->status }}</span>
                        </div>
                        <div class="w-[100%] flex justify-between items-center">
                            <span class="text-lg font-semibold">Order id:
                            </span>
                            <span class="text-gray-600 ml-4"> {{ $transaction->order_id }}</span>
                        </div>
                        <div class="w-full bg-gray-100 py-8">
                            <div class="max-w-2xl mx-auto">


                                @php
                                $decodedTransaction = json_decode($transaction->transaction, true);
                                @endphp

                                @if (is_array($decodedTransaction) &&
                                isset($decodedTransaction['transaction_response']['errors']))
                                @if (count($decodedTransaction['transaction_response']['errors']) > 0)
                                <div class="w-full bg-red-100 text-red-600 p-4 rounded flex justify-between items-center">
                                    <span class="text-lg font-semibold">Errors:</span>
                                    <div class="ml-4">
                                        @foreach ($decodedTransaction['transaction_response']['errors'] as $key =>
                                        $error)
                                        <span>{{ $key }}: {{ $error }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                @else
                                <div class="w-full bg-green-100 text-green-600 p-4 rounded">
                                    <span class="text-lg font-semibold">Success:</span>
                                    <span class="ml-4">Transaction successful</span>
                                </div>
                                @endif
                                @else
                                <div class="w-full flex justify-between items-center">
                                    <span class="text-lg font-semibold">Result Message:</span>
                                    <span class="text-gray-600 ml-4">{{ $transaction->transaction }}</span>
                                </div>
                                @endif
                            </div>
                        </div>


                    </div>
                    <hr class="my-[1rem]">
                    @endforeach

                </div>

                

            </div>

        </div>
    </main>
</div>




@endsection