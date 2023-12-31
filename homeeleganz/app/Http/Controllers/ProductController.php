<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use App\Models\Message;
use App\Models\User;
use App\Models\Tax;
use App\Models\Order;

/**
 * Controller responsible for handling product related requests.
 */
class ProductController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function homepage()
    {
        $title = "Home";
        $slug = "homepage";
        return view('index', compact('title', 'slug'));
    }

    /**
     * Display a listing of products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $products = Product::latest()->paginate(8);
        $title = "All Collection";
        $slug = "products";
        return view('products', compact('products', 'title', 'categories','slug'));
    }

    /**
     * Display the specified product.
     *
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function show(string $id)
    {
        $information = Product::with(['reviews.user', 'categories'])->find($id);
        $title = 'About the Product';
        $slug = "products";
        return view('details', compact('information', 'title','slug'));
    }

     /**
     * Display products for a specific category.
     *
     * @param string $categoryName
     * @return \Illuminate\View\View
     */
    public function category($categoryName)
    {
        $category = Category::where('name', $categoryName)->with('products')->firstOrFail();
        $title = 'All Collection';
        $allCategories = Category::all();
        return view('category', compact('category', 'categoryName', 'allCategories', 'title'));
    }

     /**
     * Display partner brands.
     *
     * @return \Illuminate\View\View
     */
    public function brands()
    {
        $brands = ['Molteni&C', 'Palliser', 'Dufresne', 'Us & Coutumes', 'Mobilia'];
        $title = 'Our Partner Brands';
        $slug = "brands";
        return view('brands', compact('brands', 'title','slug'));
    }

    public function contactmethod()
    {
        $title = 'Get in touch';
        $slug = "contact";
        return view('contact', compact('title','slug'));
    }

    
    /**
     * Store a new message from the contact form.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:2|max:400',
        ]);

        Message::create($validatedData);

        return redirect('/products')->with('success', 'Message sent successfully!');
    }

    /**
     * Store a new product review.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
        return view('products', compact('title', 'products', 'categories'));
    }

     /**
     * Add a product to the shopping cart.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart(Request $request)
    {
        $productId = $request->product_id;
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $cart = $request->session()->get('cart', []);

        if (isset($cart[$productId])) {
            // Increment quantity if product exists
            $cart[$productId]['quantity'] += 1;
        } else {
            // Add product with quantity 1 if not exists
            $cart[$productId] = [
                "product" => $product->toArray(), // Store product data as an array
                "quantity" => 1
            ];
        }

        $request->session()->put('cart', $cart);

        return redirect('/products')->with('success', 'Product added to cart!');
    }


    public function viewCart(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        
        if (!is_array($cart)) {
            $cart = []; // Ensure $cart is always an array
        }

        // $slug = "cart";
        $slug = "cart";
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
            $unitPrice = $item['product']['unit_price'] ?? 0;
            $quantity = $item['quantity'] ?? 0;
            $totalPrice += $unitPrice * $quantity;
        }
        

        // Calculate tax amount for each tax type
        $totalGST = $totalPrice * $taxes['gst'];
        $totalPST = $totalPrice * $taxes['pst'];
        $totalHST = $totalPrice * $taxes['hst'];

        $totalTaxes = $totalGST + $totalPST + $totalHST;

        $totalPriceWithTaxes = $totalPrice + $totalTaxes;

        return view('cart', compact('cart','slug','totalPrice', 'totalGST', 'totalPST', 'totalHST', 'totalTaxes', 'totalPriceWithTaxes'));
    }


     /**
     * Display the checkout page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function viewCheckout(Request $request){
        if (!Auth::check()) {
            // Store the intended URL (cart page)
            $request->session()->put('url.intended', route('cart.view'));
            // Redirect to login page
            return redirect()->route('login');
        }
        $title = "Checkout";
        $cart = $request->session()->get('cart', []);
        $slug = "checkout";
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
    $unitPrice = isset($item['product']['unit_price']) ? $item['product']['unit_price'] : 0;
    $quantity = $item['quantity'] ?? 0; // Default to 0 if 'quantity' is not set
    $totalPrice += $unitPrice * $quantity;
}

        // Calculate tax amount for each tax type
        $totalGST = $totalPrice * $taxes['gst'];
        $totalPST = $totalPrice * $taxes['pst'];
        $totalHST = $totalPrice * $taxes['hst'];

        $totalTaxes = $totalGST + $totalPST + $totalHST;

        $totalPriceWithTaxes = $totalPrice + $totalTaxes;

        return view('checkout', compact('title','slug','cart', 'totalPrice', 'totalGST', 'totalPST', 'totalHST', 'totalTaxes', 'totalPriceWithTaxes'));
    }


    /**
     * Remove a product from the shopping cart.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $productId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeFromCart(Request $request, $productId)
    {
        $cart = $request->session()->get('cart', []);
    
        if (isset($cart[$productId])) {
            // Decrease quantity or remove the product
            if ($cart[$productId]['quantity'] > 1) {
                $cart[$productId]['quantity'] -= 1;
            } else {
                unset($cart[$productId]);
            }
            
            $request->session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product updated in cart');
        }
    
        return redirect()->back()->with('error', 'Product not found in cart');
    }
    

    public function aboutmethod()
    {
        $usercount = User::count();
        $productcount = Product::count();
        $slug="about";
        $title = "About Us";
        return view('about', compact('usercount', 'title', 'productcount','slug'));
    }

     /**
     * Display maintenance information.
     *
     * @return \Illuminate\View\View
     */
    public function maintenance()
    {
        $title = "Maintenance";
        return view('maintenance', compact('title'));
    }

     /**
     * Display terms and conditions.
     *
     * @return \Illuminate\View\View
     */
    public function termsandconditions()
    {
        $title = 'Terms and Conditions'; 
        return view('termsandconditions', compact('title'));
    }

    public function vieworders()
    {
        $title = "My Orders";
        $orders = Order::where('user_id', auth()->id())->get();
        return view('myorders', compact('title', 'orders'));
    }
}
