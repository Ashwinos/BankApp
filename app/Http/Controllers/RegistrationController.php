<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class RegistrationController extends Controller
{
    public function registrationpage(){
        return view('registration');
    }
    public function createRegistration(Request $request){
        $data = $request->except('_token');
        
        $validator = Validator::make($request->all(), [ 
    
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            
          
        ], );
        if ($validator->fails()) {
                // dd($validator->errors());
                return redirect()->to(url()->previous() . '#review')
                ->withErrors($validator)
                ->withInput();
            }
           
        
        $user = User::create($data);
        // Balance::create([
        //     'user_id' => $user->id,
        //     'balance' => 0.00,
        // ]);
       
        $balance=new Balance;
        $balance->user_id=$user->id;
        $balance->balance=0.00;
        $balance->save();
        
           
        return redirect()->route('loginpage')->with('success', 'Registration successful. You can now log in.');
}
}