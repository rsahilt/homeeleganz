<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class InvoiceController extends Controller
{
    public function show()
    {

        return view('invoice');
    }
}
