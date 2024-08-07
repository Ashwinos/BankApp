<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Balance;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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



    public function transferAmount(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $sender = Auth::user();
        $recipient = User::where('email', $request->email)->first();
        $amount = $request->input('amount');

  
        DB::beginTransaction();

        try {
        
            $senderBalance = Balance::where('user_id', $sender->id)
                                    ->orderBy('created_at', 'desc')
                                    ->first();

            if (!$senderBalance || $senderBalance->balance < $amount) {
                return redirect()->back()->withErrors(['amount' => 'Insufficient balance']);
            }

          
            $recipientBalance = Balance::where('user_id', $recipient->id)
                                       ->orderBy('created_at', 'desc')
                                       ->first();

           
            $newSenderBalance = new Balance;
            $newSenderBalance->user_id = $sender->id;
            $newSenderBalance->balance = $senderBalance->balance - $amount;
            $newSenderBalance->debit = $amount;
            $newSenderBalance->credit = 0;
            $newSenderBalance->from = $sender->email;
            $newSenderBalance->to = $recipient->email;
            $newSenderBalance->save();

           
            $newRecipientBalance = new Balance;
            $newRecipientBalance->user_id = $recipient->id;
            $newRecipientBalance->balance = $recipientBalance ? $recipientBalance->balance + $amount : $amount;
            $newRecipientBalance->debit = 0;
            $newRecipientBalance->credit = $amount;
            $newRecipientBalance->from = $sender->email;
            $newRecipientBalance->to = $recipient->email;
            $newRecipientBalance->save();

           
            DB::commit();

            return redirect()->intended('/home')->with('success', 'Money sent successfully!');
        } catch (\Exception $e) {
            
            DB::rollback();
            return redirect()->back()->withErrors(['error' => 'Transaction failed: ' . $e->getMessage()]);
        }
    }


}
