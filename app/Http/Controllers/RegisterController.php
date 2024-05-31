<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Mail;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
           
        ]);
     //   $request['device_key'] = $request->_token;
        // $user = User::create(request(['name', 'email', 'password', 'created_at','updated_at']));
   
        // return redirect()->to('/')->withWarning('Please signin your account');
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Make sure to hash the password
            'status' => 1, // Set the status to 1 (or any other integer value)
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Redirect the user after registration
        return redirect()->to('/')->withWarning('Please sign in to your account');
    }
}
