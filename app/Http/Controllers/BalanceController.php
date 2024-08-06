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


        $balance = Balance::firstOrCreate(
            ['user_id' => $user->id],
            ['amount' => 0.00]
        );

        $balance->balance += $amount;
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

        
        if ($balance && $balance->balance >= $amount) {
            $balance->balance -= $amount;
            $balance->save();

            return redirect()->intended('/home')->with('success', 'Amount withdrawn successfully!');
        }

        return redirect()->back()->withErrors(['amount' => 'Insufficient balance or no balance record found.']);
    }
}
