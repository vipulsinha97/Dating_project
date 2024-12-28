<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editLocationRequest extends FormRequest
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
            'location'=>'required',
        ];
    }

    public function message(): array
    {
        return [
            'location.required'=>'Please enter location name',
        ];
    }
}
