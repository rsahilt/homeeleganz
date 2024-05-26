<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class InvoiceController extends Controller
{
    /**
     * Display the invoice view.
     *
     * This method returns the invoice view. Additional data
     * can be passed to the view if required.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        

        return view('invoice');
    }
}
