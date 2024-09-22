<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseRequest as BaseRequest;

class storeRegistrationRequest extends BaseRequest
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
            'createpass' => 'required',
            // 'smoke' => 'required',
            // 'relation_status' => 'required',
            // 'hc' => 'required',
            // 'religion' => 'required',
            // 'qa1' => 'required',
            // 'qa2' => 'required',
            // 'preferences_smoke' => 'required',
            // 'preferences_drink' => 'required',
            // 'preferences_marital_status' => 'required',
            // 'pwc' => 'required',
            // 'pref_religion' => 'required',
            // 'lookingfor' => 'required',
            // 'preferable_date' => 'required',
            // 'preferable_time' => 'required',
            'image1'=>'required|file|mimes:jpg,png',
            'image2'=>'required|file|mimes:jpg,png',
            'image3'=>'required|file|mimes:jpg,png',
        ];
    }
}
