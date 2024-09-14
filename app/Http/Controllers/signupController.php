<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    //signup page view
    
    public function index()
    {
        return view('signup/signup');
    }
}
