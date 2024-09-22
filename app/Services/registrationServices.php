<?php

namespace App\Services;
use App\Models\User;
use App\Models\Prefrence;
use Carbon\Carbon;

class RegistrationServices {
    
    //user registration

    public function storeUserRegistration($data, $picture) {
        $user = new User;
        $user->first_name = $data->firstName;
        $user->last_name = $data->lastName;
        $user->email = $data->email;
        $user->phone_number = $data->phone;
        $user->dob = $data->dob;
        $user->password = $data->createpass;
        $user->gender = $data->gender;
        $user->state = $data->state;
        $user->city = $data->plocation;
        $user->address = $data->address;
        $user->comment = $data->comment;
        $user->height = $data->height;
        $user->profession = $data->profession;
        $user->education = $data->education;
        $user->salary = $data->salary;
        $user->drink = $data->drink;
        $user->createpass = $data->createpass;
        $user->smoke = $data->smoke;
        $user->relation_status = $data->relation_status;
        $user->children = $data->hc;
        $user->religion = $data->religion;
        $user->qa1 = $data->qa1;
        $user->qa2 = $data->qa2;
        $user->preferable_time = $data->preferable_time;
        $user->preferable_date = $data->preferable_date;
        $user->picture = $picture;

        if($user->save()) {
            return true;
        }
        else {
            return false;
        }
    }

    //User prefrence

    public function storeUserPrefrence($data) {

        $user_id = User::where(email, $data->email)->first('id');

        $prefrence = new Prefrence;
        $prefrence->user_id= $user_id;
        $prefrence->smoke= $data->preferences_smoke;
        $prefrence->drink= $data->preferences_drink;
        $prefrence->marital_status= $data->preferences_marital_status;
        $prefrence->profile_with_children= $data->pwc;
        $prefrence->religion= $data->pref_religion;
        $prefrence->relaionship= $data->lookingfor;

        if($prefrence->save()) {
            return true;
        }
        else {
            return false;
        }
    }
}