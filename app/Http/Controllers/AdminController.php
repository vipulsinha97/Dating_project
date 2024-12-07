<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Event;
use App\Models\User;

class AdminController extends Controller
{
    // this will look for resources/views/admin/dashboard.blade.php

    public function allUsers()
    {
        $users = User::where('role', '!=', 'admin')->where('status', 'activate')->get();
        return view('dashboard.admin.allUsers', ['users'=>$users]);
    }

    // this will open pending user request page

    public function pendingRequest()
    {
        $users = User::where('role', '!=', 'admin')->where('status', 'deactivate')->get();
        return view('dashboard.admin.pendingUsers', ['users'=>$users]);
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
