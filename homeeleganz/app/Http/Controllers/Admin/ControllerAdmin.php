<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use App\Models\Review;
use App\Models\Product;

class ControllerAdmin extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * The dashboard displays a summary of recent activity and statistics, including
     * the latest users, messages, reviews, and products.
     *
     * @return \Illuminate\View\View Returns a view with dashboard data
     */
    public function dashboard()
    {
        $title = 'Admin Dashboard';
        
        // Fetch latest 5 users
        $users = User::latest()->take(5)->get();
        // Count total users
        $usercount = User::count();
        
        // Fetch all messages
        $messages = Message::latest()->get();
        // Count total messages
        $messagecount = Message::count();
        
        // Fetch all reviews
        $reviews = Review::latest()->get();
        // Count total reviews
        $reviewcount = Review::count();
        
        $slug = "dashboard";
        
        // Fetch latest 5 products
        $products = Product::latest()->take(5)->get();

        return view('admin.dashboard', compact('title', 'messages', 'usercount', 'users', 'messagecount', 'reviewcount', 'slug', 'products'));
    }
}
