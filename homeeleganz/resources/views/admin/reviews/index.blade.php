@extends('layouts.app')
@section('content')

<div class="dashboard w-full">
    @include('partials.aside')
    <main>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <caption
                    class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    {{ $title }}
                    <br>

                </caption>


                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Review
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            User id
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Added Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($reviews as $index => $review)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $review->id }}
                        </td>
                        <td class="px-6 py-4 ">
                            {{ $review->comment }}

                            </th>
                        <td class="px-6 py-4 ">
                            {{ $review->product->name }}

                            </th>
                        <td class="px-6 py-4">
                            {{ $review->user->first_name }} {{ $review->user->last_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $review->created_at->format('m/d/Y') }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-block">


                                <form action="{{ route('delete-reviews', $review->id) }}" method="POST" novalidate
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        onclick="return confirm('Do you really want to remove the review?')">Delete</button>
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