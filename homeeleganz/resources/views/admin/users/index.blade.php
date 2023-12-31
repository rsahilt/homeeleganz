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
                    <a href="/admin/users/create" class="mb-5 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-500 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-blue-600 transition-all mt-3">
                        Add New User
                    </a>
                    <!-- flash messages -->
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
                            User Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Registered Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Is Admin+
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- foreach loop to display the list of all the users from the database -->
                    @foreach($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ $user->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                            {{ $user->first_name }} {{ $user->last_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->phone_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->created_at->format('m/d/Y') }}
                        </td>
                        <td class="px-6 py-4">
                            @if($user->is_admin == 1)
                            Yes
                            @else
                            No
                            @endif
                        </td>
                        <td class="px-6 py-4 text-left">
                            <div class="inline-block">
                            <a href="{{ route('edituser', $user->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                &nbsp; &nbsp; | &nbsp; &nbsp;
                                <!-- asking the user if they really want to delete, in the form of an alert -->
                                <form action="{{ route('delete', $user->id) }}" method="POST" novalidate
                                class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="return confirm('Do you really want to remove the user?')">Delete</button>
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