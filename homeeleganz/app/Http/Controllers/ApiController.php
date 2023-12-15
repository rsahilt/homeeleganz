<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

use Pacewdd\Bx\_5bx;

use Auth;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $valid = $request->validate([
            'cardName' => 'required|string|min:1|max:255',
            'cardNumber' => 'required|numeric|digits_between:14,18',
            'cvv' => 'required|numeric|digits:3',
            'ref' => 'required|numeric|digits:7',
            'cardType' => 'required|string',
            'expiry' => 'required|numeric|digits:4',
        ]);
        
        if ($valid) {
            ///inserting into order table
            $order = new Order();
            $order->order_date = now();
            $order->sub_total = $valid['sub_total'];
            $order->pst = $valid['pst']; 
            $order->gst = $valid['gst'];
            $order->hst = $valid['hst'];
            $order->total = $valid['total'];
            $order->user_id = Auth::id();
            $order->address = $valid['address'];
            $order->city = $valid['city'];
            $order->province = $valid['province'];
            $order->postal_code = $valid['postal_code'];
            
            $order->save(); //save order

            //inserting into line_items
            $lineItem = new LineItem();
            $lineItem->order_id = $order->id;
            $lineItem->product_id = $valid['product_id']; 
            $lineItem->name = $valid['name'];
            $lineItem->quantity = $valid['quantity']; 
            $lineItem->unit_price = $valid['unit_price']; 
            
            $lineItem->save(); //save line_items

            
            //transaction vbox
            $transaction = new _5bx(2257811, 'a88c8843898e4daad5646322ca06f22d');
            // $transaction->amount($valid['totalamount']);
            $transaction->card_num($valid['cardNumber']);
            $transaction->exp_date($valid['expiry']);
            $transaction->cvv($valid['cvv']);
            $transaction->card_type($valid['cardType']);
            $transaction->ref_num($valid['ref']);
        
            $response = $transaction->authorize_and_capture(); // returns JSON object
        
            $userdetails = Auth::user();
        
            return view('invoice', compact('response', 'userdetails'));
        }
        
    }
    
    
}

