<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatementController extends Controller
{
    public function statementPage(){
        $userId = Auth::id();
        $transactions = Balance::where('user_id', $userId)->get();
        return view('innerpages.statement', compact('transactions'));
   
}
}
