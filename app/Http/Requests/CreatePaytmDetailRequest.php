<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePaytmDetailRequest extends FormRequest
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
        return [
            'name' => 'required',
            'email' => 'required|email:filter',
            'mobile' => 'required|numeric',
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'mobile.required' => 'Mobile number field is required.',
        ];
    }
}
