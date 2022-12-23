<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountManagerStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:6', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'contact_no' => ['required'],
            'response_time' => ['required']
        ];
    }
}
