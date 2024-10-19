<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistrationRequest; 
use App\Services\RegistrationServices; 

class SignupController extends Controller
{
    protected $registrationServices;

    public function __construct(RegistrationServices $registrationServices) 
    {
        $this->registrationServices = $registrationServices;
    }

    // Signup page view
    public function index()
    {
        return view('signup/signup');
    }

    // Signup detail page
    public function signupDetails()
    {
        return view('signup/signup-details');
    }

    // Save Registration details
    public function saveRegistration(StoreRegistrationRequest $request)
    {
        $data = $request->all();
        // Store uploaded files and get their paths
        $filePaths = [];
        foreach (['image1', 'image2', 'image3'] as $image) {
            if ($request->hasFile($image)) {
                $filePaths[$image] = $request->file($image)->store('uploads');
            }
        }

        // Combine file paths into a single JSON string
        $combinedFilePaths = json_encode($filePaths);

        // Store registration
        $storeRegistration = $this->registrationServices->storeUserRegistration($data, $combinedFilePaths);
        if ($storeRegistration === true) {
            $storePreference = $this->registrationServices->storeUserPreference($data);
            if ($storePreference === true) {
                return response()->json(['status' => 'true', 'message' => 'Registration successful']);
            }
        }

        // Return error response
        return response()->json(['status' => 'false', 'message' => 'Registration failed'], 500);
    }
}
