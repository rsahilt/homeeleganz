<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $products = Product::latest()->paginate(10);
        $title = "All Collection";
        return view('products', compact('products', 'title', 'categories')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $information = Product::find($id);
        $title = 'About the Product';
        return view('details', compact('information', 'title'));
    }

    // public function category($categoryName)
    // {
    //     $category = Category::where('name', $categoryName)->firstOrFail();
    //     $products = Product::where('category_id', $category->id)->paginate(10);
    //     $title = 'All Collection';
    //     $slug = 'activecategory';

    //     // Retrieve all categories
    //     $allCategories = Category::all();

    //     // Pass all categories to the view
    //     return view('category', compact('category', 'products', 'categoryName', 'allCategories', 'title', 'slug'));
    // }

    public function category($categoryName)
{
    $category = Category::where('name', $categoryName)->firstOrFail();
    $products = Product::where('category_id', $category->id)->paginate(10);
    $title = 'All Collection';

    // Retrieve all categories
    $allCategories = Category::all();

    // Pass active category and all categories to the view
    return view('category', compact('category', 'products', 'categoryName', 'allCategories', 'title'));
}
    
}
