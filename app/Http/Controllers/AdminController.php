<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Event;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('dashboard.admin.index'); // this will look for resources/views/admin/dashboard.blade.php
    }
    
    //open event page

    public function event()
    {
        $event = Event::all();
        return view('dashboard.admin.event', ['event'=>$event]);
    }

    //open add event page

    public function addEvent() 
    {
        return view('dashboard.admin.addEvent');  
    }

}
