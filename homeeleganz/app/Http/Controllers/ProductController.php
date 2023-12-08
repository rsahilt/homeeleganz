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

}
