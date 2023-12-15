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
        $request->validate([
            'cardName' => 'required|string|min:1|min:255',
            'cardNumber' => 'required|numeric|digits:16',
            'cvv' => 'required|numeric|digits:3',
            'ref' => 'required|numeric|digits:5',
            'cardType' => 'required|string',
            'expiry' => 'required|numeric|digits:4',
        ]);
        
        $transaction = new _5bx(2257811, 'a88c8843898e4daad5646322ca06f22d');
        $transaction->amount($request->totalamount); 
        $transaction->card_num($request->cardNumber);
        $transaction->exp_date ($request->expiry);
        $transaction->cvv($request->cvv);
        $transaction->card_type($request->cardType);
        $transaction->ref_num($request->ref);

        $response = $transaction->authorize_and_capture(); // returns JSON object

        $userdetails = Auth::user();

        if($response->transaction_response->errors){
            return redirect()->back()->withErrors($response->transaction_response->errors);
        }
        return view('/invoice', compact('response','userdetails'));
        
    }
    
    
}

