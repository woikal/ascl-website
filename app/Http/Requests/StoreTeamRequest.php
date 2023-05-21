<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'zvr'     => 'nullable | numeric | min_digits:9 | max_digits:9 | unique:teams,zvr',
            'name'    => 'nullable | required_without:acronym',
            'acronym' => 'sometimes | nullable | required_without:name',
            'show'    => 'boolean',
        ];
    }
}
