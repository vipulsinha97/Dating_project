<?php

namespace App\Services;

use App\Models\Age_group;
use App\Models\Preference;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AgeGroupService {
    
    // Edit Age Group
    public function editAgeGroup($data) {
        $ageGroup = Age_group::where('id', $data['id'])->first();
        $ageGroup->starting_age = $data['starting_age'];
        $ageGroup->ending_age = $data['ending_age'];

        return $ageGroup->save();
    }
}
