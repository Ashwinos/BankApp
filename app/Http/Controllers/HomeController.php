<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function homePage(Request $request){
        $user = Auth::user(); 
        $balance = Balance::where('user_id', $user->id)
                      ->orderBy('created_at', 'desc') // or 'id', 'desc'
                      ->first();

        return view('Home.home',compact('user','balance'));
}
}   