<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of categories.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $title='List of categories';
        $slug='categorydashboard';
        $categories=Category::latest()->paginate(30);
        return view('/admin/categories/index', compact('title','slug','categories'));
    }

    /**
     * Show the form for creating a new category.
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title = "Add a new category";
        $slug="categorydashboard";
        return view('/admin/categories/create', compact('title','slug'));
    }

    /**
     * Store a newly created category in the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string|min:1|max:255',
        ]);
        $categories = Category::create($valid);
        $categories->save();

        if ($categories) {
            return redirect()->route('storecategory')->with('success', 'Category added successfully');
        } else {
            return redirect('/admin/categories/create');
        }
    }

    /**
     * Display the specified category.
     * 
     * @param  string  $id
     * @return void
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified category.
     * 
     * @param  string  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit(string $id)
    {
        $categories = Category::find($id);
        $title = 'Edit Category';
        $slug="categorydashboard";
        if ($categories) {
            return view('/admin/categories/edit', compact('categories', 'title','slug'));
        } else {
            return redirect('/admin/categories/index');
        }
        
    }

    /**
     * Update the specified category in the database.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, string $id)
    {
        $categories = Category::find($id);

        if ($categories) {
            $validatedData = $request->validate([
                'name' => 'required|string|min:1|max:255',
            ]);
            $categories->update($validatedData);
            
            return redirect()->route('categorieslist')->with('success','Changes Saved');
        } else {
            return redirect('/admin/categories/edit');
        }
    }

    /**
     * Remove the specified category from the database.
     * 
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id)
    {
        $categories = Category::find($id);

        // if id exists
        if($categories){
            $categories->delete();
            return redirect()->route('categorieslist')->with('danger', 'Category removed permanently');
        }else{
            return redirect()->route('categorieslist');
        }
    }
}
