<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminEditRequest extends FormRequest
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
            'name' => 'unique:users,name,'.$this->user()->id,
            'email' => 'unique:users,email,'.$this->user()->id,
        ];
    }
    public function messages()
    {
        return [
            'name.unique' => 'Name has exists',
            'email.unique' => 'Email has exists'
        ];
    }
}
