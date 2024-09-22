<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




class loginController extends Controller
{
    //login page view
    
    public function index()
    {
        // if(Auth::check()){
        //     return redirect('/dashboard');
        // }
        return view('login/login');
    }

    public function loginPost(Request $request)
    {
        $requestData =  $request->all();
        //dd($requestData);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       
        $user = User::where('email', $requestData['email'])->first();

        if ($user && Hash::check($requestData['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended('http://localhost/dating_project/');
        } else {
            return redirect()->back()->withErrors('Invalid credential');
        }
    }
}
