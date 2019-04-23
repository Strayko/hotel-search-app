<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantCreateRequest extends FormRequest
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
	        'distance_id' => 'required',
	        'food_id' => 'required',
	        'body' => 'required'
        ];
    }

	public function messages()
	{
		return [
			'title.required' => 'Name is required',
			'location_id.required' => 'City is required',
			'distance_id.required' => 'Distance is required',
			'food_id.required' => 'Food is required',
			'body.required' => 'Description is required'
		];
	}
}
