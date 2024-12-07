<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;

class socialController extends Controller
{
    public function provider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleCallBack()
    {
        //finding user data using facebook login
        $user = Socialite::driver('facebook')->stateless()->user();
        $user_email = $user->email;
        
        //Finding data in our database
        $existingUser = User::where('email', $user_email)->first();

        if(!empty($existingUser)) {
            
            Auth::login($existingUser);
            return redirect('/user/dashboard');
        }
        else {

            $name = $user->name;
            $split_name = explode(" ", $name);
            Session::put('first_name', $split_name[0]);
            Session::put('last_name', $split_name[1]);
            Session::put('email', $user->email);
            Session::put('facebook_token', $user->token);
            return redirect('/signup-details');
        }
    }

    public function linkedinProvider()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function linkedinHandleCallBack()
    {
        //finding user data using linkedin login
        $user = Socialite::driver('linkedin')->stateless()->user();
        
        $name = $user->name;
        $split_name = explode(" ", $name);
        Session::put('first_name', $split_name[0]);
        Session::put('last_name', $split_name[1]);
        Session::put('email', $user->email);
        Session::put('facebook_token', $user->token);
        return redirect('/signup-details');
    }
}