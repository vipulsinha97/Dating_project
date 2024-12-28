<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreLocationRequest; 
use App\Http\Requests\editLocationRequest; 
use App\Services\LocationService;

class LocationController extends Controller
{

    protected $LocationService;

    public function __construct(LocationService $LocationService) 
    {
        $this->LocationService = $LocationService;
    }

    //add new location
    
    public function newLocation(StoreLocationRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('uploads/location_feature_image');
        }
        
        // Store event
        $storeLocation = $this->LocationService->storeLocation($data);
        if ($storeLocation === true) {

            return redirect('/admin/dashboard/location')->with('success', 'New Location Added');
        }
    }

    //edit location

    public function locationEdit(editLocationRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('uploads/location_feature_image');
        }
        
        // Store event
        $storeEvent = $this->LocationService->editlocation($data);
        if ($storeEvent === true) {

            return redirect('/admin/dashboard/location')->with('success', 'Location Edited');
        }
    }

    //Delete event
    
    public function deleteLocation($id)
    {
        // delete event
        $storeEvent = $this->LocationService->deleteLocation($id);
        if ($storeEvent === true) {

            return redirect('/admin/dashboard/location')->with('success', 'Location Deleted');
        }
    }
}
