<?php

namespace App\Services;

use App\Models\Location;
use App\Models\Preference;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class LocationService {
    
    // Adding New Event
    public function storeLocation($data, $fileName) {
        $location = new Location;
        $location->location_name = $data['location'];
        $location->location_image = $fileName;
        $location->is_delete = '0';
        return $location->save();
    }

    // Edit Event
    public function editLocation($data, $fileName=Null) {
        $location = Location::where('id', $data['id'])->first();
        $location->location_name = $data['location'];
        if(!empty($fileName))
        {
            $location->location_image = $fileName;
        }
        $location->is_delete = '0';

        return $location->save();
    }

    //Deleting event

    public function deleteLocation($id)
    {
        $location = Location::where('id', $id)->first();
        return $location->delete();
    }
}
