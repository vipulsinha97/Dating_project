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
         // Store the uploaded files and get their paths
        $file1Path = $request->file('image1')->store('uploads');
        $file2Path = $request->file('image2')->store('uploads');
        $file3Path = $request->file('image3')->store('uploads');

        // Combine file paths into a single string (JSON or comma-separated)
        $combinedFilePaths = json_encode([
            'file1' => $file1Path,
            'file2' => $file2Path,
            'file3' => $file3Path,
        ]);
        $storeRegistration = $this->registrationServices->storeUserRegistration($data, $combinedFilePaths);
        if($storeRegistration === true) {
            $storePrefrence = $this->registrationServices->storeUserPrefrence($data);
            if($storePrefrence === true) {
                return response()->json(['status'=>'true', 'message'=>'Registration successful']);
            } 
        }
    }
}
