<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Pacewdd\Bx\_5bx;
use App\Models\Order;
use App\Models\LineItem;
use App\Models\Transaction;
use Auth;

class ApiController extends Controller
{
    /**
     * Handles the creation of a new order and processes payment.
     *
     * Validates the card details, creates an order and line items,
     * processes the payment, and returns an invoice view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {
        $valid = $request->validate([
            'cardName' => 'required|string|min:1|max:255',
            'cardNumber' => 'required|numeric|digits_between:14,18',
            'cvv' => 'required|numeric|digits:3',
            'cardType' => 'required|string',
            'expiry' => 'required|numeric|digits:4',
        ]);
        
        ///inserting into order table
        $order = new Order();
        $order->order_date = now(); 
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
        foreach ($cartItems as $cartItem) {
            if (isset($cartItem['product']) && is_array($cartItem['product']) && isset($cartItem['product']['id'])) {
                $lineItem = new LineItem();
                $lineItem->order_id = $order->id;
                $lineItem->product_id = $cartItem['product']['id'];            
                $lineItem->name = $cartItem['product']['name'];
                $lineItem->quantity = $cartItem['quantity'];
                $lineItem->unit_price = $cartItem['product']['unit_price'];
        
                $lineItem->save(); // Save line_items
            } 
        }
           
        //transaction vbox
        $transaction = new _5bx(2257811, 'a88c8843898e4daad5646322ca06f22d');

        $transaction->card_num($valid['cardNumber']);
        $transaction->exp_date($valid['expiry']);
        $transaction->cvv($valid['cvv']);
        $transaction->card_type($valid['cardType']);
        $transaction->ref_num($order->id);

        //dd($order->id);
        $response = $transaction->authorize_and_capture(); // returns JSON object
        // dd($response);
        //save in transacation tables
       
        //default status is false
        $newTransaction = new Transaction();
        $newTransaction->order_id = $order->id;
        $newTransaction->transaction = json_encode($transaction->authorize_and_capture());
        
        // Set the default status value. Adjust this based on your application's logic.
        // For example, you might set it based on the response from your payment gateway.
        // $newTransaction->status = 'default_status'; 
        
        $newTransaction->save();


        if($response->transaction_response->response_code !=1){
            $error = '';
            foreach($response->transaction_response->errors as $key=>$value){
                $error.= "$value";
                break;
            }
            return redirect()->back()->with('danger', $error);
        }

        $order->status = true;
        $order->save();
    
        $userdetails = Auth::user();

        //FORGET THE SESSION
        $request->session()->forget('cart');
    
        return view('invoice', compact('response', 'userdetails', 'order'));

        // $cart = $request->session()->forget('cart');
        // return view('/invoice', compact('response','userdetails','cart'));
    }
    
    
}

