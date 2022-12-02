<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:5'],
            'description' => ['required', 'string', 'min:5'],
            'sku' => ['required', 'string', 'min:3'],
            'weight' => ['required', 'numeric', 'gt:0'],
            'variant.quantity' => ['required', 'numeric', 'gt:0'],
            'variant.sku' => ['required', 'numeric', 'gt:0'],
            'variant.price' => ['required', 'numeric', 'gt:0'],
        ];
    }
}
