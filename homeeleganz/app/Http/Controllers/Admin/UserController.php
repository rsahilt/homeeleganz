<?php

// app/Http/Controllers/UserController.php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Display a listing of all users
    public function index()
    {
        $users = User::all(); 
        $title = "List of Registered Users";
        return view('/admin/users/index', compact('users','title'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('admin/users/create');
    }

    public function edit(User $user)
{
    return view('admin.users.edit', compact('user'));
}



    public function update(Request $request, User $user)
{
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'sometimes|string|min:8',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'province' => 'required|string|max:255',
        'postal_code' => 'required|string|max:255',
        'phone_number' => 'required|string|max:255',
        'password' => 'required|password|min:8'
        
    ]);

    if (!empty($validatedData['password'])) {
        $validatedData['password'] = Hash::make($validatedData['password']);
    } else {
        unset($validatedData['password']);
    }
    return redirect()->route('userlist')->with('success', 'User updated successfully.');
}
}  


