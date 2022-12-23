<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnBoardingstRequest extends FormRequest
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
            'user_id' => ['required'],
            'title' => ['required', 'string',],
            'date' => ['required', 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/'],
            'start_time' => ['required', 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/'],
            'end_time' => ['required', 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/'],
            'status' => ['required'],

        ];
    }
}
