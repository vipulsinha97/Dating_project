<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.admin.index'); // this will look for resources/views/admin/dashboard.blade.php
    }
}
