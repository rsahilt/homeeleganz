<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Pacewdd\Bx\_5bx;
use App\Models\Order;
use App\Models\LineItem;


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
            // $order->sub_total = $valid['sub_total'];
            //$order->pst = session('totalGST'); 
            $order->pst = session('totalPST'); 
            $order->gst = session('totalGST');
            $order->hst = session('totalHST');
            $order->sub_total = session('totalPrice');
            $order->total = session('totalPriceWithTaxes');

            $userdetails = Auth::user();
            $order->user_id = Auth::id();
            $order->address = $userdetails->address;
            $order->city = $userdetails->city;
            $order->province = $userdetails->province;
            $order->postal_code = $userdetails->postal_code;
            
            $order->save(); //save order
    

            $cartItems = session('cartItems');
            foreach($cartItems as $cartItem){
                // //inserting into line_items
                $lineItem = new LineItem();
                $lineItem->order_id = $order->id;
                $lineItem->product_id = $cartItem->id; 
                $lineItem->name = $cartItem->name;
                $lineItem->quantity = 1; 
                $lineItem->unit_price = $cartItem->unit_price;
                $lineItem->save(); //save line_items
            }



            //transaction vbox
            $transaction = new _5bx(2257811, 'a88c8843898e4daad5646322ca06f22d');

            $transaction->card_num($valid['cardNumber']);
            $transaction->exp_date($valid['expiry']);
            $transaction->cvv($valid['cvv']);
            $transaction->card_type($valid['cardType']);
            $transaction->ref_num($order->id);
        
            $response = $transaction->authorize_and_capture(); // returns JSON object
        
            $userdetails = Auth::user();
        
            // return view('invoice', compact('response', 'userdetails'));

            $request->session()->forget('cart');
        
            return view('invoice', compact('response', 'userdetails'));
        }

        // $cart = $request->session()->forget('cart');
        // return view('/invoice', compact('response','userdetails','cart'));
        
    }
    
    
}

