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

    
}
