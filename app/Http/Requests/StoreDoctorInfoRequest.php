<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorInfoRequest extends FormRequest
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
            'phone'=>'required|regex:/^(?=.*?[0-9]).{11}$/i|numeric',
            'gender'=>'required',
            'country'=>'required',
            'date_of_birth'=>'required|date',
            'specialty'=>'required',

        ];
    }
    public function messages()
    {
        return [
                'first_name.min'=>'first name should be at least 3 characters',
                'last_name.min'=>'last name should be at least 3 characters',
                'phone.regex'=>'your phone number must be 11 number',
        ];
    }
}
