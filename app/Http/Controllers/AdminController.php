<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AuthMiddleware;

class AdminController extends Controller
{
    //To check the role of user

    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }


    public function dashboard()
    {
        return view('dashboard.admin.index'); // this will look for resources/views/admin/dashboard.blade.php
    }
}
