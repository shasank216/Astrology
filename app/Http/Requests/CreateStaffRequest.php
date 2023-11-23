<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStaffRequest extends FormRequest
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
            'email' => 'required|email:filter|unique:users,email',
            'contact' => 'nullable|unique:users,contact',
            'password' => 'required|same:password_confirmation|min:6',
            'gender' => 'required',
            'role' => 'required',
            'profile' => 'nullable|mimes:jpeg,jpg,png|max:2000',
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
