<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use App\Models\Review;


class ControllerAdmin extends Controller
{
    public function dashboard()
    {
        $title = 'Admin Dashboard';
        $users = User::latest()->get();
        $usercount = User::count();
        $messages = Message::latest()->get();
        $messagecount = Message::count();
        $reviews = Review::latest()->get();
        $reviewcount = Review::count();
        return view('admin.dashboard', compact('title', 'messages'));
    }
}
