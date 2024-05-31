<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Socialite;

class LoginController extends Controller
{
    //
    public function index()
    {
         return view('auth.login');
    }

    
    public function login(Request $request)
    {
        try {
            // Validate input
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('/')
                    ->withErrors($validator)
                    ->withInput();
            }

            // Attempt to authenticate user
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();

                // Check if the user's account is activated
                if ($user->status == 0) {
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['error' => 'Your account is not activated']);
                }

                // Successful login
                // Here, you might want to update last login time or redirect to a specific route
                // User::where('email', $request->email)->update(['last_login' => now()]);
                return redirect()->intended('posts')->with('success', 'You have successfully logged in');
            }

            // Failed login attempt
            return redirect()->route('login')->withErrors(['error' => 'Oops! You have entered invalid credentials']);
        } catch (Exception $e) {
            // Handle any unexpected exceptions
            return redirect()->route('login')->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
