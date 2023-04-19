<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return session()->user->can('create.location') || true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|maxLength:150',
            'description' => 'string',
            'address'=> 'string|maxLength:255',
            'zipcode'=> 'integer|maxLength:5',
            'city'=> 'string|maxLength:60',
            'country'=> 'string|maxLength:60',
            'longitude',
            'latitude',
        ];
    }
}
