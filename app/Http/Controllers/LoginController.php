<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;

class LoginController extends Controller
{
    public function loginpage(){
        return view('login');
    }

    public function attemptLogin(Request $request){
        $data = $request->except('_token');
       
       
        $validator = Validator::make($request->all(), [ 
    
            'email' => 'required|email',
            'password' => 'required',
          
        ], );

        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if(Auth::attempt($data)){
            $user = Auth::user();
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
}



        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
           
            return redirect()->route('login');

        }


        public function forgotPassword(){
            return view('innerpages.forgotpassword');
        }
}