<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseRequest as BaseRequest;

class StoreRegistrationRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|numeric',
            'dob' => 'required',
            'gender' => 'required',
            'state' => 'required',
            'plocation' => 'required',
            'address' => 'required',
            'height' => 'required',
            'profession' => 'required',
            'salary' => 'required',
            'education'=>'required',
            'drink' => 'required',
            'password' => 'required',
            'smoke' => 'required',
            'relation_status' => 'required',
            'hc' => 'required',
            'religion' => 'required',
            'qa1' => 'required',
            'qa2' => 'required',
            // 'preferences_smoke' => 'required',
            // 'preferences_drink' => 'required',
            // 'preferences_marital_status' => 'required',
            // 'pwc' => 'required',
            // 'pref_religion' => 'required',
            // 'lookingfor' => 'required',
            'preferable_date' => 'required',
            'preferable_time' => 'required',
            'image1'=>'required|file|mimes:jpg,png',
            'image2'=>'required|file|mimes:jpg,png',
            'image3'=>'required|file|mimes:jpg,png',
        ];
    }

    public function messages(): array
    {
        return [
            'firstName.required' => 'First name is required',
            'lastName.required' => 'Last name is required',
            'email.required' => 'Email is reqired',
            'email.unique'=>'Email should be unique',
            'phone.required'=> 'Phone is required',
            'phone.numeric'=>'Phone should be numeric',
            'dob.required' => 'Please enter your Date of Birth',
            'gender.required' => 'Please select your gender',
            'state.required' => 'Please select your state',
            'plocation.required' => 'Please enter your city',
            'address.required' => 'Please enter your address',
            'height.required' => 'Please select your height',
            'profession.required' => 'Please select your profession',
            'salary.required' => 'Please select your salary',
            'education.required'=>'Please enter your education',
            'drink.required' => 'Please select the option',
            'createpass.required' => 'Please enter your password',
            'smoke.required' => 'Please select your option',
            'relation_status.required' => 'Please select your option',
            'hc.required' => 'Please select your option',
            'religion.required' => 'Please select your religion',
            'qa1.required' => 'Please enter your Answer',
            'qa2.required' => 'Please enter your Answer',
            'preferences_smoke.required' => 'Please select your option',
            'preferences_drink.required' => 'Please select your option',
            'preferences_marital_status.required' => 'Please select your option',
            'pwc.required' => 'Please select your option',
            'pref_religion.required' => 'Please select your option',
            'lookingfor.required' => 'Please select your option',
            'preferable_date.required' => 'Please select your option',
            'preferable_time.required' => 'Please select your option',
        ];
    }
}
