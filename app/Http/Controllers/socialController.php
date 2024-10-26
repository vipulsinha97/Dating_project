<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\User;
use Laravel\Sociallite\Facades\Socialite;

class socialController extends Controller
{
    public function provider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleCallBack()
    {
        $data = Socialite::driver('facebook')->user();
        dd(user);
    }
}
