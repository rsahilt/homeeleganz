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

