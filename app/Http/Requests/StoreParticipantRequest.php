<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'event'          => ['required', 'exists:events'],
            'forename'       => 'required|alpha',
            'surname'        => 'required|alpha',
            'nickname'       => 'string',
            'email'          => 'required|email',
            'club'           => '',
            'birthday'       => 'required|date',
            'equipment.*'    => '',
            'rent_equipment' => 'boolean',
            'comment'        => 'string',
        ];
    }
}
