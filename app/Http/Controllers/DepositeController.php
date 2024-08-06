<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositeController extends Controller
{
    public function depositePage(){
        return view('innerpages.deposite');
    }
}
