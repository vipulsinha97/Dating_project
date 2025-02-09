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
        return Socialite::driver('facebook')->scopes(['email', 'public_profile', 'user_link'])->redirect();
    }

    public function handleCallBack()
    {
        //finding user data using facebook login
        $user = Socialite::driver('facebook')->stateless()->user();
        $user_email = $user->email;
        
        //Finding data in our database
        $existingUser = User::where('email', $user_email)->first();

        if (!empty($existingUser)) {            
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
        $appId = '589059930152184';
        $redirectUri = 'https://notjustswipe.com/insta/callback';
        return redirect()->to("https://api.instagram.com/oauth/authorize?app_id={$appId}&redirect_uri={$redirectUri}&scope=user_profile,user_media&response_type=code");
    }

    public function instaHandleCallBack(Request $request)
    {
        $code = $request->code;
        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');

        $appId = '589059930152184';
        $secret = '1c05e4f6c8ec41a8b699729f4fb27816';
        $redirectUri = 'https://notjustswipe.com/insta/callback';

        $client = new Client();

        // Get access token
        $response = $client->request('POST', 'https://api.instagram.com/oauth/access_token', [
            'form_params' => [
                'app_id' => $appId,
                'app_secret' => $secret,
                'grant_type' => 'authorization_code',
                'redirect_uri' => $redirectUri,
                'code' => $code,
            ]
        ]);

        if ($response->getStatusCode() != 200) {
            return redirect()->route('home')->with('error', 'Unauthorized login to Instagram.');
        }

        $content = $response->getBody()->getContents();
        $content = json_decode($content);

        $accessToken = $content->access_token;
        $userId = $content->user_id;

        // Get user info
        $response = $client->request('GET', "https://graph.instagram.com/me?fields=id,username,account_type&access_token={$accessToken}");

        $content = $response->getBody()->getContents();
        $oAuth = json_decode($content);

        // Get instagram user name 
        $username = $oAuth->username;

        // //finding user data using insta login
        // $user = Socialite::driver('insta')->stateless()->user();
        $user_email = $username;
        
        //Finding data in our database
        $existingUser = User::where('email', $user_email)->first();

        if(!empty($existingUser)) {
            
            Auth::login($existingUser);
            return redirect('/user/dashboard');
        }
        else {

            $name = $username;
            $split_name = explode(" ", $name);
            Session::put('first_name', $split_name[0]);
            Session::put('last_name', $split_name[1]);
            Session::put('email', $username);
            Session::put('facebook_token', $userId);
            return redirect('/signup-details');
        }
    }    
}