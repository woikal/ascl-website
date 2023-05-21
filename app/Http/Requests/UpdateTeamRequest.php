<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'zvr'     => 'nullable | numeric | min_digits:9 | max_digits:9 | unique:teams,zvr',
            'acronym' => 'nullable | sometimes | required_without:name',
            'name'    => 'nullable | sometimes | required_without:acronym',
            'show'    => 'boolean',
        ];
    }
}
