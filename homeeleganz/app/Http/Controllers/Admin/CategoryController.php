<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title='List of categories';
        $slug='categorydashboard';
        $categories=Category::latest()->paginate(30);
        return view('/admin/categories/index', compact('title','slug','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add a new category";
        $slug="categorydashboard";
        return view('/admin/categories/create', compact('title','slug'));
    }

    /**
     * Store a newly created resource in storage.
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Category::find($id);

        // if id exists
        if($categories){
            $categories->delete();
            return redirect()->route('categorieslist')->with('danger', 'Category removed permanently');
        }else{
            return redirect()->route('categoriestlist');
        }
    
    
    }
}
