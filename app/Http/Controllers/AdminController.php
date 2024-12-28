<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Event;
use App\Models\User;
use App\Models\Location;

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

    //this will open category page

    public function location()
    {
        $location = Location::all();
        
        return view('dashboard.admin.location', ['location'=>$location]);
    }

    //open event page

    public function event()
    {
        $event = Event::leftJoin('locations', 'locations.id', '=', 'events.location')
        ->select('events.*', 'locations.location_name')
        ->get();
        return view('dashboard.admin.event', ['event'=>$event]);
    }

    //open add event page

    public function addEvent() 
    {
        $location = Location::all();

        return view('dashboard.admin.addEvent', ['location'=>$location]);  
    }

    //open edit event page

    public function editEvent($id)
    {
        //fetching data of selected event
        $event = Event::leftJoin('locations', 'locations.id', '=', 'events.location')
        ->select('events.*', 'locations.location_name')
        ->get();
        $location = Location::all();

        return view('dashboard.admin.editEvent', ['event'=>$event, 'location'=>$location]);
    }

    // open age group page

    public function age_group()
    {
        $ageGroup = Age_group::all();

        return view('dashboard.admin.ageGroup', ['ageGroup'=>$ageGroup]);
    }

    //Open add location page

    public function addLocationPage()
    {
        return view('dashboard.admin.addLocation');
    }

    //Open add location page

    public function editLocation($id)
    {
        $location = Location::where('id', $id)->get();

        return view('dashboard.admin.editLocation', ['location'=>$location]);
    }

}
