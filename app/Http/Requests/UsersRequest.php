<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name' => 'required|unique:users|max:30',
	        'email' => 'required|unique:users|max:30',
            'password' => 'required',
	        'role_id' => 'required',
	        'is_active' => 'required',
	        'photo_id' => 'required'
        ];
    }

	public function messages()
	{
		return [
			'name.required' => 'Name is required',
			'email.required'  => 'Email is required',
			'password.required' => 'Password is required',
			'role_id.required' => 'Role is required',
			'is_active.required' => 'Status is required',
			'photo_id.required' => 'Photo is required'
		];
	}

	public function attributes()
	{
		return [
			'name' => 'Name',
			'email' => 'Email'
		];
	}
}
