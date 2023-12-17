<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $title = "Message List"; // Added semicolon here
        $messages = Message::all();
        $slug = "inboxdashboard";
        return view('admin.inbox.index', compact('messages', 'title', 'slug'));
    }
    
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('admin.inbox.index')
        ->with('success', 'Message deleted successfully');
    }
}
