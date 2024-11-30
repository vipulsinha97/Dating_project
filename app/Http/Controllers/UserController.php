<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AuthMiddleware;

class UserController extends Controller
{

    public function dashboard()
    {
        return view('dashboard.user.index'); 
    }
}
