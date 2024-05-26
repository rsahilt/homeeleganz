<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Pass the user data to the view
        return view('home', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('home-edit', compact('user'));
    }
}
