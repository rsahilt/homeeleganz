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
                    <a href="/admin/taxes/create" class="mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all mt-3">
                        Add New Province Tax Details
                    </a>
                </caption>
                
                
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tax ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Province
                        </th>
                        <th scope="col" class="px-6 py-3">
                            PST
                        </th>
                        <th scope="col" class="px-6 py-3">
                            GST
                        </th>
                        <th scope="col" class="px-6 py-3">
                            HST
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($taxes as $tax)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $tax->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                           {{ $tax->province }}
                        </th>
                        <td class="px-6 py-4">
                           {{ $tax->pst }}
                        </td>
                        <td class="px-6 py-4">
                           {{ $tax->gst }}
                        </td>
                        <td class="px-6 py-4">
                           {{ $tax->hst }}
                        </td>
                        <td class="px-6 py-4 text-left">
                            <div class="inline-block">
                                <a href="{{ route('edittax', ['id' => $tax->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                &nbsp; &nbsp; | &nbsp; &nbsp;
                                
                                <form action="{{ route('deletetax', ['id' => $tax->id]) }}" method="POST" novalidate class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="return confirm('Do you really want to remove this province tax rates?')">Delete</button>
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