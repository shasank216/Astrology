<?php

namespace App\Http\Requests;

use App\Models\Appointment;
use Illuminate\Foundation\Http\FormRequest;

class CreateFrontAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = Appointment::$rules;
        unset($rules['patient_id']);
        $rules['email'] = 'required|email|max:255|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';

        return $rules;
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'service_id.required' => 'Service field is required.',
            'from_time.required' => 'Please select appointment time slot.',
        ];
    }
}
