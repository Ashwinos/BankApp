<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function withdrawPage(){
        return view('innerpages.withdraw');
    }
}
