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
            // Get the uploaded file
            $file = $request->file('image');
            // Generate a unique filename
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Store the file in the 'uploads/event_feature_image' directory on the public disk
            $filePath = $file->storeAs('uploads/location_feature_image', $fileName, 'public');
        }
        
        // Store Location
        $storeLocation = $this->LocationService->storeLocation($data, $fileName);
        if ($storeLocation === true) {

            return redirect('/admin/dashboard/location')->with('success', 'New Location Added');
        }
    }

    //edit location

    public function locationEdit(editLocationRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            // Get the uploaded file
            $file = $request->file('image');
            // Generate a unique filename
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Store the file in the 'uploads/event_feature_image' directory on the public disk
            $filePath = $file->storeAs('uploads/location_feature_image', $fileName, 'public');
        }
        
        // Store Location
        if(!empty($fileName)) {
            $storeLocation = $this->LocationService->editlocation($data, $fileName);
        }
        else {
            $storeLocation = $this->LocationService->editlocation($data);
        }
        if ($storeLocation === true) {

            return redirect('/admin/dashboard/location')->with('success', 'Location Edited');
        }
    }

    //Delete Location
    
    public function deleteLocation($id)
    {
        // delete Location
        $storeLocation = $this->LocationService->deleteLocation($id);
        if ($storeLocation === true) {

            return redirect('/admin/dashboard/location')->with('success', 'Location Deleted');
        }
    }
}
