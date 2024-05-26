<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of all users.
     *
     * Fetches and displays all registered users.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        $title = "List of Registered Users";
        $slug = 'userdashboard';
        return view('/admin/users/index', compact('users', 'title', 'slug'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title = "Add a new user";
        $slug = 'userdashboard';
        return view('admin/users/create', compact('title', 'slug'));
    }

    /**
     * Store a newly created user in the database.
     *
     * Validates and creates a new user record.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        $user = new User();
        $valid = $request->validate([
            'first_name' => 'required|string|min:1|max:255',
            'last_name' => 'required|string|min:1|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|min:1|max:255',
            'city' => 'required|string|min:1|max:255',
            'street' => 'required|string|min:1|max:255',
            'country' => 'required|string|min:1|max:255',
            'province' => 'required|string|min:1|max:255',
            'postal_code' => 'required|string|min:1|max:255',
            'phone_number' => 'required|string|regex:/^(\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4})$/',
            'password' => 'required|string|min:8|max:255',
            'is_admin' => 'nullable'

        ]);
        $isAdmin = false;
        if (isset($valid['is_admin'])) {
            $isAdmin = ($valid['is_admin'] === "on") ? 1 : 0;
        }
        $valid = array_merge($valid, ['is_admin' => $isAdmin]);

        $user = User::create($valid);
        $user->save();

        if ($user) {
            return redirect()->route('storeuser')->with('success', 'New user created successfully');
        } else {
            return redirect('/admin/users/create');
        }
    }

      /**
     * Show the form for editing a specific user.
     *
     * Retrieves a user by their ID and provides a form for editing.
     *
     * @param  string  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */

    public function edit($id)
    {
        $user = User::find($id);
        $title = 'Edit User';
        $slug = 'userdashboard';
        if ($user) {
            return view('admin/users/edit', compact('user', 'title', 'slug'));
        } else {
            return redirect('/admin/users/index');
        }
    }

  /**
     * Update a specific user's information in the database.
     *
     * Validates and updates the user record.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $validData = $request->validate([
                'first_name' => 'required|string|min:1|max:255',
                'last_name' => 'required|string|min:1|max:255',
                'email' => 'required|email|max:255',
                'address' => 'required|string|min:1|max:255',
                'city' => 'required|string|min:1|max:255',
                'province' => 'required|string|min:1|max:255',
                'postal_code' => 'required|string|min:1|max:255',
                'phone_number' => 'required|string|regex:/^(\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4})$/',
                'is_admin' => 'nullable'

            ]);

            $isAdmin = false;
            if (isset($validData['is_admin'])) {
                $isAdmin = ($validData['is_admin'] === "on") ? 1 : 0;
            }

            $validData = array_merge($validData, ['is_admin' => $isAdmin]);
            $user->update($validData);
            return redirect()->route('userlist')->with('success', 'User information updated successfully');
        } else {

            if (isset($route)) {
                return redirect($route);
            }

            return redirect('/admin/users/edit');
        }
    }

      /**
     * Update the profile of a specific user.
     *
     * Validates and updates the user's personal profile information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $validData = $request->validate([
                'first_name' => 'required|string|min:1|max:255',
                'last_name' => 'required|string|min:1|max:255',
                'email' => 'required|email|max:255',
                'address' => 'required|string|min:1|max:255',
                'city' => 'required|string|min:1|max:255',
                'province' => 'required|string|min:1|max:255',
                'postal_code' => 'required|string|min:1|max:255',
                'phone_number' => 'required|string|regex:/^(\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4})$/',
                'country' => 'required|string|min:1|max:255',
            ]);

            $user->update($validData);
            return redirect('/home');
        } else {



            return redirect('/home');
        }
    }

      /**
     * Remove a specific user from the database.
     *
     * Deletes the user record by their ID.
     *
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::find($id);

        // if id exists
        if ($user) {
            $user->delete();
            return redirect('/admin/users/')->with('danger', 'User Deleted from record');
        } else {
            return redirect('/admin/users');
        }
    }


    public function userReviews(Request $request, $id)
    {
        $reviews = Review::with('user')->get();

        return view('user-reviews', compact("reviews"));
    }
}
