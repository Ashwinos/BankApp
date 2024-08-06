<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Balance;

class BalanceController extends Controller
{
    public function addAmount(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = Auth::user();     
        $amount = $request->input('amount');      
        $currentBalance= Balance::where('user_id', $user->id)
                          ->orderBy('created_at', 'desc') // or 'id', 'desc'
                          ->first();
        $balance=new Balance;
        $balance->user_id = $user->id;
        $balance->balance =$currentBalance->balance + $amount;
        $balance->debit= 0;
        $balance->credit= $amount;
        $balance->from = 'self';
        $balance->save();

        return redirect()->intended('/home')->with('success', 'Amount added successfully!');
    }

    public function minusAmount(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = Auth::user();
        $amount = $request->input('amount');
        $balance = Balance::where('user_id', $user->id)->first();
        $currentBalance= Balance::where('user_id', $user->id)
                          ->orderBy('created_at', 'desc') // or 'id', 'desc'
                          ->first();
        if ( $currentBalance >= $amount) {
            $balance=new Balance;
            $balance->user_id = $user->id;
            $balance->balance =$currentBalance->balance- $amount;
            $balance->debit= $amount;
            $balance->credit= 0;
            $balance->from = 'self';
            $balance->save();
            return redirect()->intended('/home')->with('success', 'Amount withdrawn successfully!');
        }

        return redirect()->back()->withErrors(['amount' => 'Insufficient balance or no balance record found.']);
    }
}
