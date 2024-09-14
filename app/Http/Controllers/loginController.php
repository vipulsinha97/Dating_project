<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //login page view
    
    public function index()
    {
        return view('login/login');
    }
}
