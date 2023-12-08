<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // public function show(string $id)
    // {
    //     $information = Product::find($id);
    //     $title = 'About the Product';
    //     return view('details', compact('information', 'title'));
    // }
    public function show(string $id)
{
    $information = Product::find($id);
    $title = 'About the Product';
    
    // Retrieve reviews for this product
    $reviews = Review::where('product_id', $id)->latest()->get();
    
    return view('details', compact('information', 'title', 'reviews'));
}

    public function postReview(Request $request, $id)
    {
        $validatedData = $request->validate([
            'comment' => 'required|string|max:255'
        ]);

        $review = new Review();
        $review->comment = $validatedData['comment'];
        $review->user_id = Auth::id();
        $review->product_id = $id;
        $review->save();

        return redirect()->route('product.details', ['id' => $id])
            ->with('success', 'Review posted successfully!');
    }
}
