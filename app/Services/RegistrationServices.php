<?php

namespace App\Services;

use App\Models\User;
use App\Models\Preference;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class RegistrationServices {
    
    // User registration
    public function storeUserRegistration($data, $picture) {
        $user = new User;
        $user->first_name = $data['firstName'];
        $user->last_name = $data['lastName'];
        $user->email = $data['email'];
        $user->phone_number = $data['phone'];
        $user->dob = $data['dob'];
        $user->password = Hash::make($data['password']);
        $user->gender = $data['gender'];
        $user->state = $data['state'];
        $user->city = $data['plocation'];
        $user->address = $data['address'];
        $user->comment = $data['comment'];
        $user->height = $data['height'];
        $user->profession = $data['profession'];
        $user->education = $data['education'];
        $user->salary = $data['salary'];
        $user->drink = $data['drink'];
        $user->smoke = $data['smoke'];
        $user->relationship_status = $data['relation_status'];
        $user->children = $data['hc'];
        $user->religion = $data['religion'];
        $user->qa1 = $data['qa1'];
        $user->qa2 = $data['qa2'];
        $user->preferable_time = $data['preferable_time'];
        $user->preferable_date = $data['preferable_date'];
        $user->picture = $picture;

        return $user->save();
    }

    // User preference
    public function storeUserPreference($data) {
        $user_id = User::where('email', $data['email'])->value('id'); // Get the user ID

        if (!$user_id) {
            // Handle user not found (optional)
            return false;
        }

        $preference = new Preference;
        $preference->user_id = $user_id;
        $preference->smoke = $data['preferences_smoke'];
        $preference->drink = $data['preferences_drink'];
        $preference->marital_status = $data['preferences_marital_status'];
        $preference->profile_with_children = $data['pwc'];
        $preference->religion = $data['pref_religion'];
        $preference->relationship = $data['lookingfor'];

        return $preference->save();
    }
}
