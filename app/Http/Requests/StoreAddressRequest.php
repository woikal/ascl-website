<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'address' => 'required',
            'zipcode' => 'required | min_digits:4',
            'city'    => 'required',
            'country' => 'sometimes | nullable',
        ];
    }
}
