<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review as Review;
use App\Models\Message;
use App\Models\Tax;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $products = Product::latest()->paginate(8);
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
        $category = Category::where('name', $categoryName)->with('products')->firstOrFail();
        // $products = Product::where('category_id', $category->id)->paginate(8);
        $title = 'All Collection';
    
        // Retrieve all categories
        $allCategories = Category::all();

        // Pass active category and all categories to the view
        return view('category', compact('category', 'categoryName', 'allCategories', 'title'));
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

    /**
     * Search cartoons based on the provided search term.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('name', 'LIKE', "%$search%")->paginate(8);
        $title = "Showing results for: $search";
        $categories = Category::latest()->get();
        return view('products', compact('title', 'products','categories'));
    }    

    public function addToCart(Request $request)
    {
        $product = Product::find($request->product_id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $cart = $request->session()->get('cart', []);
        $cart[$product->id] = $product; 
        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function viewCart(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        $user = Auth::user();
        $userProvince = $user ? $user->province : null;
        
        $taxes = [
            'gst' => 0,
            'pst' => 0,
            'hst' => 0,
        ];
    
        if ($userProvince) {
            $tax = Tax::where('province', $userProvince)->first();
            if ($tax) {
                $taxes['gst'] = $tax->gst;
                $taxes['pst'] = $tax->pst;
                $taxes['hst'] = $tax->hst;
            }
        }
    
        $totalPrice = 0;
        foreach ($cart as $item) {
            
            $totalPrice += $item->unit_price;
        }
    
        // Calculate tax amount for each tax type
        $totalGST = $totalPrice * $taxes['gst'];
        $totalPST = $totalPrice * $taxes['pst'];
        $totalHST = $totalPrice * $taxes['hst'];
    
        $totalTaxes = $totalGST + $totalPST + $totalHST;
    
        $totalPriceWithTaxes = $totalPrice + $totalTaxes;
    
        return view('cart', compact('cart', 'totalPrice', 'totalGST', 'totalPST', 'totalHST', 'totalTaxes', 'totalPriceWithTaxes'));
    }


    public function viewCheckout(Request $request){
        $title = "Checkout";
        $cart = $request->session()->get('cart', []);
    
        $user = Auth::user();
        $userProvince = $user ? $user->province : null;
    
        $taxes = [
            'gst' => 0,
            'pst' => 0,
            'hst' => 0,
        ];

        if ($userProvince) {
            $tax = Tax::where('province', $userProvince)->first();
            if ($tax) {
                $taxes['gst'] = $tax->gst;
                $taxes['pst'] = $tax->pst;
                $taxes['hst'] = $tax->hst;
            }
        }
    
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['unit_price'];
        }
    
        // Calculate tax amount for each tax type
        $totalGST = $totalPrice * $taxes['gst'];
        $totalPST = $totalPrice * $taxes['pst'];
        $totalHST = $totalPrice * $taxes['hst'];
    
        $totalTaxes = $totalGST + $totalPST + $totalHST;
    
        $totalPriceWithTaxes = $totalPrice + $totalTaxes;

        return view('checkout', compact('title','cart', 'totalPrice', 'totalGST', 'totalPST', 'totalHST', 'totalTaxes', 'totalPriceWithTaxes'));
    }


    public function removeFromCart(Request $request, $productId)
    {
        $cart = $request->session()->get('cart', []);

        if (array_key_exists($productId, $cart)) {
            unset($cart[$productId]);
            $request->session()->put('cart', $cart);
            return redirect()->back()->with('danger', 'Product removed from cart');
        }

        return redirect()->back()->with('error', 'Product not found in cart');
    }
    
    

}
