<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistrationRequest; 
use App\Services\RegistrationServices; 
use Illuminate\Support\Facades\Session;

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
                // Get the uploaded file
                $file = $request->file('image');
                // Generate a unique filename
                $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                // Store the file in the 'uploads/event_feature_image' directory on the public disk
                $filePaths[$image] = $file->storeAs('uploads/profile_pictures', $fileName, 'public');
            }
        }

        // Combine file paths into a single JSON string
        $combinedFilePaths = json_encode($filePaths);

        // Store registration
        $storeRegistration = $this->registrationServices->storeUserRegistration($data, $combinedFilePaths);
        if ($storeRegistration === true) {
            $storePreference = $this->registrationServices->storeUserPreference($data);
            if ($storePreference === true) {
                // dispatch(new SendEmailJob($request));
                session('success', 'Your Registration is successful Please login now');
                return response()->json(['status' => 'true', 'message' => 'Registration successful']);
            }
        }

        // Return error response
        return response()->json(['status' => 'false', 'message' => 'Registration failed'], 500);
    }
}
