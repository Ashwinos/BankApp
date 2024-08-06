<?php

namespace App\Http\Controllers;

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
           
        
        $message = User::create($data);
        return redirect()->route('loginpage')->with('success', 'Registration successful. You can now log in.');
}
}