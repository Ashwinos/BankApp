<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TransferController extends Controller
{
    public function transferpage(){
        return view('innerpages.transfer');
    }
}
