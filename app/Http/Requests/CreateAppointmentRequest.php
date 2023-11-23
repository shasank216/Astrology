<?php

namespace App\Http\Requests;

use App\Models\Appointment;
use Illuminate\Foundation\Http\FormRequest;

class CreateAppointmentRequest extends FormRequest
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

        return $rules;
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'service_id.required' => 'Service field is required.',
            'patient_id.required' => 'Patient field is required.',
            'from_time.required' => 'Please select appointment time slot.',
        ];
    }
}
