<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
}
