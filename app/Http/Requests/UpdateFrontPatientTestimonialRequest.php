<?php

namespace App\Http\Requests;

use App\Models\FrontPatientTestimonial;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFrontPatientTestimonialRequest extends FormRequest
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
        $rules = FrontPatientTestimonial::$editRules;

        return $rules;
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'profile.max' => 'Profile size should be less than 2 MB',
        ];
    }
}
