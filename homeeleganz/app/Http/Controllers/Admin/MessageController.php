<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of messages.
     *
     * Fetches all messages from the database and passes them
     * to the view for display in the admin message list.
     *
     * @return \Illuminate\View\View Returns a view with all messages and additional data
     */
    public function index()
    {
        $title = "Message List";
        $messages = Message::all();
        $slug = "inboxdashboard";
        return view('admin.inbox.index', compact('messages', 'title', 'slug'));
    }
    
    /**
     * Remove the specified message from storage.
     *
     * Finds the message by ID and deletes it. Redirects to the message list
     * with a success message upon successful deletion.
     *
     * @param  int  $id The ID of the message to delete
     * @return \Illuminate\Http\RedirectResponse Redirects back to the message list with a success message
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('admin.inbox.index')
            ->with('success', 'Message deleted successfully');
    }
}
