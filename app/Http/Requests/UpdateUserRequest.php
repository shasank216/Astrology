<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|regex:/(.*)@(.*)\.(.*)/|unique:users,email,'.$this->route('doctor')->user_id,
            'contact' => 'nullable|unique:users,contact,'.$this->route('doctor')->user_id,
            'dob' => 'nullable|date',
            'experience' => 'nullable|numeric',
            'specializations' => 'required',
            'gender' => 'required',
            'status' => 'nullable',
            'postal_code' => 'nullable',
            'profile' => 'mimes:jpeg,jpg,png|max:2000',
        ];
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
