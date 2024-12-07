<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;

class socialController extends Controller
{
    // facebook login and signup

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

    //linkedIn login and signup

    public function linkedinProvider()
    {
        return Socialite::driver('linkedin-openid')->redirect();
    }

    public function linkedinHandleCallBack()
    {
        //finding user data using linkedin login
        $user = Socialite::driver('linkedin-openid')->stateless()->user();
        $name = $user->name;
        $split_name = explode(" ", $name);
        Session::put('first_name', $split_name[0]);
        Session::put('last_name', $split_name[1]);
        Session::put('email', $user->email);
        Session::put('facebook_token', $user->token);
        return redirect('/signup-details');
    }

    //Instagram login and singup

    public function instaProvider()
    {
        return Socialite::driver('insta-openid')->redirect();
    }

    public function instaHandleCallBack()
    {
        //finding user data using insta login
        $user = Socialite::driver('insta-openid')->stateless()->user();
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
}