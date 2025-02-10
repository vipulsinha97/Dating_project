<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
                if($user->status === 'activate') {    
                    Auth::login($user);
                    
                    $img = json_decode($user->picture);
                    // Check user's role and redirect accordingly
                    if 
                    ($user->role === 'admin') {
                        Session::put('role', 'admin');
                        Session::put('name', $user->first_name);
                        Session::put('profile_pic', $img->image1);
                        return redirect()->intended('/admin/dashboard');
                    } elseif ($user->role === 'user') {
                        Session::put('role', 'user');
                        Session::put('name', $user->first_name);
                        Session::put('profile_pic', $img->image1);
                        return redirect()->intended('/user/dashboard');
                    }
                }
                else {
                    return back()->with('fail', 'Admin needs to authorise your account first');
                } 
            } else {
                return back()->with('fail','Invalid credentials');
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