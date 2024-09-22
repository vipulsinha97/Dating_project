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

    //Signup detail page

    public function signupDetails()
    {
        return view('signup/signup-details');
    }
    
    //save Registration details

    public function saveRegistration(Request $request)
    {
        $data = $request->all();
    }
}
