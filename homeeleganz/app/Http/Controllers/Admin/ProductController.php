<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
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
        $products = Product::latest()->get();
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
        return view('/admin/products/create', compact('title'));
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
            'name'=>'required|string|min:1|max:255',
            'summary'=>'required|string|min:10',
            'color'=>'required|string|min:1|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,gif',
            'image' => 'image|mimes:jpeg,png,gif',
            'material'=>'required|string|min:1|max:255',
            'unit_price'=>'required|integer|min:20|max:5000',
            'description'=>'required|string|min:10',
            'brand'=>'required|integer|min:1930|max:2050',
            'weight'=>'required|integer|min:10|max:5000',
            'dimensions'=>'required|string|min:1|max:255',
            'category_id'=>'required|string|min:1|max:255',
        ]);
        $product = Product::create($valid);
        // if($file = $request->file('image')){
        //     $filename = uniqid() . '_' . $file->getClientOriginalName();
        //     Storage::disk('images')->put($filename,File::get($file));
        //     $cartoon->image=$filename;
        //     $cartoon->save();
        // }
        $product->save();
        
        if($product){
            //set success flash message
            $flash = [
                'type'=>'success',
                'message'=>'New product succesfully added'
            ];
        }else{
            $flash = [
                'type'=>'danger',
                'message'=>'Failed to add the product! Try Again'
            ];
        }

        return redirect('/admin/products/index')->with(['flash' => $flash]);
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
        if ($product) {
            return view('admin/products/edit', compact('cartoon', 'title'));
            
        } else {
            return redirect('/admin/products/')->with(['flash' => $flash]);
        }
    }
}
