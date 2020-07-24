<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientInfoRequest extends FormRequest
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
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            // 'email' => 'required|email|unique:users',
            'phone'=>'required|regex:/^(?=.*?[0-9]).{11}$/i|numeric',
            'gender'=>'required',
            'country'=>'required',
            'occupation'=>'required',
            'date_of_birth'=>'required|date',

        ];
    }
    public function messages()
    {
        return [
                'first_name.min'=>'first name should be at least 3 characters',
                'last_name.min'=>'last name should be at least 3 characters',
                // 'email.unique'=>'this email is already exists',
                'phone.regex'=>'your phone number must be 11 number',
        ];
    }
}
