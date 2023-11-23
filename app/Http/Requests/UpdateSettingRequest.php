<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
        if ($this->request->get('sectionName') == 'contact-information') {
            return [
                'country_id' => 'required',
                'state_id' => 'required',
                'city_id' => 'required',
                'address_one' => 'required',
                'address_two' => 'required',
                'postal_code' => 'required',
            ];
        }

        if ($this->request->get('sectionName') == 'general') {
            return [
                'email' => 'required|email:filter',
                'specialities' => 'required',
                'clinic_name' => 'required',
                'contact_no' => 'required',
                'logo' => 'image|mimes:jpeg,png,jpg',
                'favicon' => 'image|mimes:png|dimensions:width=32,height=32',
            ];
        }
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'country_id.required' => 'Country field is required.',
            'state_id.required' => 'State field is required.',
            'city_id.required' => 'City field is required.',
            'address_one.required' => 'Address 1 field is required.',
            'address_two.required' => 'Address 2 field is required.',
            'logo.dimensions' => 'Logo size should be 90 x 60 pixel',
            'favicon.dimensions' => 'Favicon size should be 32 x 32 pixel',
        ];
    }
}
