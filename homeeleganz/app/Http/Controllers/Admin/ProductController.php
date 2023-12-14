<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of all cartoons.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $products = Product::latest()->paginate(30);
        $title = "List of all products";
        $slug="productdashboard";
        return view('/admin/products/index', compact('products', 'title','slug'));
    }


    /**
     * Show the form for creating a new cartoon.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $title = "Upload New Cartoon";
        $categories = Category::all();
        $slug="productdashboard";
        return view('/admin/products/create', compact('title','categories','slug'));
    }

    /**
     * Store a newly created cartoon in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string|min:1|max:255',
            'summary' => 'required|string|min:1|max:255',
            'color' => 'required|string|min:1|max:255',
            'image' => 'image',
            'material' => 'required|string|min:1|max:255',
            'unit_price' => 'required|numeric|min:20|max:100000',
            'description' => 'string|min:10',
            'brand' => 'required|string|min:1|max:255',
            'weight' => 'required|numeric|min:5|max:5000',
            'dimensions' => 'required|string|min:1|max:255',
            'category_id' => 'string|min:1|max:255',
        ]);
        $product = Product::create($valid);
        if($file = $request->file('image')){
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            Storage::disk('images')->put($filename,File::get($file));
            $product->image=$filename;
            $product->save();
        }

        if ($product) {
            return redirect()->route('storeproducts')->with('success', 'Product added successfully');
        } else {
            return redirect('/admin/products/create');
        }
    }

    /**
     * Show the form for editing the specified cartoon.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $title = 'Edit Product';
        $categories = Category::all();
        $slug="productdashboard";
        if ($product) {
            return view('admin/products/edit', compact('product', 'title', 'categories','slug'));
        } else {
            return redirect('/admin/products/index');
        }
    }

    /**
     * Update the specified cartoon in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product) {
            $validatedData = $request->validate([
                'name' => 'required|string|min:1|max:255',
                'summary' => 'string|min:1|max:255',
                'color' => 'required|string|min:1|max:255',
                'image' => 'image',
                'material' => 'required|string|min:1|max:255',
                'unit_price' => 'required|numeric|min:20|max:100000',
                'description' => 'string|min:10',
                'brand' => 'required|string|min:1|max:255',
                'weight' => 'required|numeric|min:5|max:5000',
                'dimensions' => 'required|string|min:1|max:255',
                'category_id' => 'string|min:1|max:255',
            ]);
            $product->update($validatedData);

            // Sync the categories
            if ($request->has('category_ids')) {
                $product->categories()->sync($request->input('category_ids'));
            } else {
                // If no categories are selected, detach all categories
                $product->categories()->detach();
            }

            //Handle image uploads
            if($file = $request->file('image')){
                
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                Storage::disk('images')->put($filename,File::get($file));
                $product->image=$filename;
                $product->save();
            }
            
            return redirect()->route('productlist')->with('success','Changes Saved');
        } else {
            return redirect('/admin/product/edit');
        }
    }

    /**
     * Remove the specified cartoon from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        // if id exists
        if($product){
            $product->delete();
            return redirect()->route('productlist')->with('danger', 'Product removed permanently');
        }else{
            return redirect()->route('productlist');
        }
    }
}
