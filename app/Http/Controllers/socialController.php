<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\User;
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
        $user = Socialite::driver('facebook')->user();
        
        //Finding data in our database
        $data = User::where('email', $user->email)->get();

        if(!empty($data)) {
            
            Auth::login($user);
            return redirect('/user/dashboard');
        }
        else {
            
            $name = $user->name;
            $split_name = explode(" ", $name);
            $first_name = $split_name[0];
            $last_name = $split_name[1];
            $email = $user->email;
            $facebook_token = $user->token;
            return redirect('/signup-details')->withInput(['first_name'=>$first_name, 'last_name'=>$last_name, 'email'=>$email, 'facebook_token'=>$facebook_token]);
        }
    }
}