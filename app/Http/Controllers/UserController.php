<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AuthMiddleware;

class UserController extends Controller
{

    //To check the role of user
    
    public function __construct()
    {
        $this->middleware('checkRole:user');
    }

    public function dashboard()
    {
        return view('dashboard.user.index'); 
    }
}
