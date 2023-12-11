<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review as Review;
use App\Models\Message;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $products = Product::latest()->paginate(12);
        $title = "All Collection";
        return view('products', compact('products', 'title', 'categories')); 
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $information = Product::find($id);
    //     $title = 'About the Product';
    //     return view('details', compact('information', 'title'));
    // }
    public function show(string $id)
    {
        $information = Product::with(['reviews.user', 'categories'])->find($id);
        $title = 'About the Product';
        return view('details', compact('information', 'title'));
    }

    public function category($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        $products = Product::where('category_id', $category->id)->paginate(12);
        $title = 'All Collection';

        // Retrieve all categories
        $allCategories = Category::all();

        // Pass active category and all categories to the view
        return view('category', compact('category', 'products', 'categoryName', 'allCategories', 'title'));
    }

    public function brands()
    {
        $brands = ['Molteni&C', 'Palliser', 'Dufresne', 'Us & Coutumes', 'Mobilia'];
        $title = 'Our Partner Brands';
        return view('brands', compact('brands','title'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:2|max:400',
        ]);

        Message::create($validatedData);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function storeReview(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string|min:2|max:400',
        ]);

        $review = new Review;
        $review->user_id = \Auth::user()->id;
        $review->product_id = $request->prod_id;
        $review->comment = $request->comment;
        
        $review->save();

        return redirect()->back()->with('success', 'Review successfully submitted!');
    }
    
}
