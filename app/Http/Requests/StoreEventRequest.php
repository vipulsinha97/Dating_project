<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'location' => 'required',
            'age_group' => 'required',
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'event_start_time' => 'required',
            'event_duration' => 'required',
            'ticket_price' => 'required',
            'image'=>'required|file|mimes:jpg,png,webp',
        ];
    }

    public function messages(): array
    {
        return [
            'location.required' => 'location is required',
            'age_group.required' => 'Age Group is required',
            'title.required' => 'Title is required',
            'event_date.required'=>'Event Date is required',
            'description.required'=> 'Description is required',
            'event_start_time.required' => 'Event Start is required',
            'event_duration.required' => 'Event Duration is required',
            'ticket_price.required' => 'Ticket Price is required',
            'image.required' => 'Image is required',
        ];
    }
}
