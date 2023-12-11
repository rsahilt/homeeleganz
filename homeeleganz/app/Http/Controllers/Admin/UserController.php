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
        $title = "Add a new user";
        return view('admin/users/create', compact('title'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'first_name' => 'required|string|min:1|max:255',
            'last_name' => 'required|string|min:1|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|min:1|max:255',
            'city' => 'required|string|min:1|max:255',
            'province' => 'required|string|min:1|max:255',
            'postal_code' => 'required|string|min:1|max:255',
            'phone_number' => 'required|string|regex:/^\(\d{3}\) \d{3}-\d{4}$/',
            'password' => 'required|string|min:8|max:255',

        ]);
        $user = User::create($valid);
       
        $user->save();

        if ($user) {
            //set success flash message
            $flash = [
                'type' => 'success',
                'message' => 'New user succesfully added'
            ];
            return redirect()->route('storeuser');
        } else {
            $flash = [
                'type' => 'danger',
                'message' => 'Failed to add the user! Try Again'
            ];
            return redirect('/admin/users/create')->with(['flash' => $flash]);
        }


    }
}
