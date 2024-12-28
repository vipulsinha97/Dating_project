<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\editAgeGroupRequest; 
use App\Services\AgeGroupService;

class AgeGroupController extends Controller
{
    protected $AgeGroupService;

    public function __construct(AgeGroupService $AgeGroupService) 
    {
        $this->AgeGroupService = $AgeGroupService;
    }

    //edit age group function

    public function ageGroupEdit(editAgeGroupRequest $request)
    {
        $data = $request->all();
        
        // Store Age group
        $storeAgeGroup = $this->AgeGroupService->editAgeGroup($data);
        if ($storeAgeGroup === true) {

            return redirect('/admin/dashboard/ageGroup')->with('success', 'Age Group Edited');
        }
    }
}
