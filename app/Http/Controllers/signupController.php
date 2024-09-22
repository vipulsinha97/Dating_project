<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeRegistrationRequest;
use App\Services\registrationServices;

class signupController extends Controller
{
    
    protected $registrationServices;

    public function _construct(registrationServices $registrationServices) {
        $this->registrationServices = $registrationServices;
    }

    //signup page view
    
    public function index()
    {
        return view('signup/signup');
    }

    //Signup detail page

    public function signupDetails()
    {
        return view('signup/signup-details');
    }
    
    //save Registration details

    public function saveRegistration(storeRegistrationRequest $request)
    {
        $data = $request->all();

        // Initialize an array to hold file paths
        $filePaths = [];

        // Check if each file exists and store it
        if ($request->hasFile('image1')) {
            $filePaths['file1'] = $request->file('image1')->store('uploads');
        }

        if ($request->hasFile('image2')) {
            $filePaths['file2'] = $request->file('image2')->store('uploads');
        }

        if ($request->hasFile('image3')) {
            $filePaths['file3'] = $request->file('image3')->store('uploads');
        }

        // Combine file paths into a single JSON string
        $combinedFilePaths = json_encode($filePaths);

        // Store registration data
        $storeRegistration = $this->storeUserRegistration($data, $combinedFilePaths);
        if($storeRegistration === true) {
            $storePrefrence = $this->registrationServices->storeUserPrefrence($data);
            if($storePrefrence === true) {
                return response()->json(['status'=>'true', 'message'=>'Registration successful']);
            } 
        }
    }
}
