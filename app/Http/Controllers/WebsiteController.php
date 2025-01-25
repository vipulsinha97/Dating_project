<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;
use App\Models\Age_group;

class WebsiteController extends Controller
{
    //home page
    public function index()
    {
        $location = Location::join('events', 'events.location', '=', 'location.id');
        return view('home', ['location'=>$location]);
    }

    //Event page details
    public function event($city = null)
    {
        // All the event details
            $event = Event::leftJoin('locations', 'locations.id', '=', 'events.location')
            ->leftJoin('age_groups', 'age_groups.id', '=', 'events.age_group')
            ->select('events.*', 'locations.location_name', 'age_groups.starting_age', 'age_groups.ending_age')
            ->where('location', $city)
            ->get();
        $currentLocation = Location::where('id', $city)->first();
        //Fetching all the location
        $location = Location::all();

        //Fetching all the Age group
        $ageGroup = Age_group::join('events', 'events.age_group', '=', 'age_groups.id')
        ->leftJoin('locations', 'locations.id', '=', 'events.location')
        ->select('age_groups.starting_age', 'age_groups.ending_age', 'locations.location_name', 'events.age_group')
        ->get();
        return view('event', ['event'=>$event, 'location'=>$location, 'ageGroup'=>$ageGroup, 'currentLocation'=>$currentLocation]);
    }

    //Event details page

    public function eventDetail($id)
    {
        $eventDetail = Event::leftJoin('locations', 'locations.id', '=', 'events.location')
        ->leftJoin('age_groups', 'age_groups.id', '=', 'events.age_group')
        ->select('events.*', 'locations.location_name', 'age_groups.starting_age', 'age_groups.ending_age')
        ->where('events.id', $id)
        ->first();
        $totalAmount = $eventDetail->ticket_price+$eventDetail->ticket_price*$eventDetail->gst_percentage/100;
        return view('eventDetails', ['ed'=>$eventDetail,'ta'=>$totalAmount]);
    }
}
