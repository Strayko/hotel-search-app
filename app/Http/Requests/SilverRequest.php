<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SilverRequest extends FormRequest
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
            'title' => 'required',
	        'location_id' => 'required',
	        'food_id' => 'required',
	        'body' => 'required',
	        'photo_id' => 'required'
        ];
    }

	public function messages()
	{
		return [
			'title.required' => 'Title is required',
			'location_id.required' => 'Location is required',
			'food_id.required' => 'Food is required',
			'body.required' => 'Body is required',
			'photo_id.required' => 'Photo is required'
		];
	}
}
