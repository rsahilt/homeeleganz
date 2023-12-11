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
        return view('/admin/products/index', compact('products', 'title'));
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
        return view('/admin/products/create', compact('title','categories'));
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
            // 'image' => 'required|image|mimes:jpeg,png,gif',
            'image' => 'required|string',
            'material' => 'required|string|min:1|max:255',
            'unit_price' => 'required|numeric|min:20|max:100000',
            'description' => 'string|min:10',
            'brand' => 'required|string|min:1|max:255',
            'weight' => 'required|numeric|min:5|max:5000',
            'dimensions' => 'required|string|min:1|max:255',
            'category_id' => 'string|min:1|max:255',
        ]);
        $product = Product::create($valid);
        // if($file = $request->file('image')){
        //     $filename = uniqid() . '_' . $file->getClientOriginalName();
        //     Storage::disk('images')->put($filename,File::get($file));
        //     $cartoon->image=$filename;
        //     $cartoon->save();
        // }
        $product->save();

        if ($product) {
            //set success flash message
            $flash = [
                'type' => 'success',
                'message' => 'New product succesfully added'
            ];
            return redirect()->route('storeproducts');
        } else {
            $flash = [
                'type' => 'danger',
                'message' => 'Failed to add the product! Try Again'
            ];
            return redirect('/admin/products/create')->with(['flash' => $flash]);
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
        if ($product) {
            return view('admin/products/edit', compact('product', 'title', 'categories'));
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
                // 'image' => 'required|image|mimes:jpeg,png,gif',
                'image' => 'required|string',
                'material' => 'required|string|min:1|max:255',
                'unit_price' => 'required|numeric|min:20|max:100000',
                'description' => 'string|min:10',
                'brand' => 'required|string|min:1|max:255',
                'weight' => 'required|numeric|min:5|max:5000',
                'dimensions' => 'required|string|min:1|max:255',
                'category_id' => 'string|min:1|max:255',
            ]);

            // if($file = $request->file('image')){
            //     $filename = uniqid() . '_' . $file->getClientOriginalName();
            //     Storage::disk('images')->put($filename,File::get($file));
            //     $cartoon->image=$filename;
            //     // $cartoon->save();
            //     $cartoon->update($validatedData);

            // }
            $product->update($validatedData);
            return redirect()->route('productlist');
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
            //set success flash message
            $flash = [
                'type'=>'success',
                'message'=>'Cartoon succesfully deleted!'
            ];
            return redirect('/admin/products/')->with(['flash' => $flash]);
        }else{
            //set error flash message
            $flash = [
                'type'=>'danger',
                'message'=>'No matching record to delete!'
            ];
            return redirect('/admin/products')->with(['flash' => $flash]);
        }
    }
}
