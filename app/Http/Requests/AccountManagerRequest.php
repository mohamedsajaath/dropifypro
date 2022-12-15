<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountManagerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' =>['required','string'],
            'contact_no' => ['Required'],
            'responce_time' => ['required', 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/'],
        ];
    }
}
