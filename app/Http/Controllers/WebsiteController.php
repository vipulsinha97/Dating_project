<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;
use App\Models\Age_group;

class WebsiteController extends Controller
{
    public function event($city = null)
    {
        // All the event details
        if(empty($city)) {
            $city = '2';
            $event = Event::leftJoin('locations', 'locations.id', '=', 'events.location')
            ->leftJoin('age_groups', 'age_groups.id', '=', 'events.age_group')
            ->select('events.*', 'locations.location_name', 'age_groups.starting_age', 'age_groups.ending_age')
            ->where('location', $city)
            ->get();
        } else {
            $event = Event::leftJoin('locations', 'locations.id', '=', 'events.location')
            ->leftJoin('age_groups', 'age_groups.id', '=', 'events.age_group')
            ->select('events.*', 'locations.location_name', 'age_groups.starting_age', 'age_groups.ending_age')
            ->where('location', $city)
            ->get();
        }

        $currentLocation = Location::where('id', $city)->first();
        //Fetching all the location
        $location = Location::all();

        //Fetching all the Age group
        $ageGroup = Age_group::leftJoin('events', 'events.age_group', '=', 'age_groups.id')->get();

        return view('event', ['event'=>$event, 'location'=>$location, 'ageGroup'=>$ageGroup, 'currentLocation'=>$currentLocation]);
    }
}
