<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class ControllerAdmin extends Controller
{
    public function dashboard()
    {
        $title = 'Admin Dashboard';
        $messages = Message::latest()->get();
        return view('admin.dashboard', compact('title', 'messages'));
    }
}
