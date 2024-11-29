<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    // login page view
        public function index()
        {
            return view('login/login');
        }

        public function loginPost(Request $request)
        {
            $requestData =  $request->all();

            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            $user = User::where('email', $requestData['email'])->first();

            if ($user && Hash::check($requestData['password'], $user->password)) {
                
                Auth::login($user);

                // Check user's role and redirect accordingly
                if 
                ($user->role === 'admin') {
                    return redirect()->intended('/admin/dashboard');
                } elseif ($user->role === 'user') {
                    return redirect()->intended('/user/dashboard');
                } 
            } else {
                return redirect()->back()->withErrors('Invalid credentials');
            }
        }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Session destroyed.']);
    }

}