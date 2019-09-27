<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RenewAccount extends FormRequest
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
            'package_id' => 'required',
            'email' => 'required',
            'passwordrenew' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'package_id.required' => 'Package is required',
            'email.required' => 'Email is required',
            'passwordrenew.required' => 'Password is required'
        ];
    }
}
