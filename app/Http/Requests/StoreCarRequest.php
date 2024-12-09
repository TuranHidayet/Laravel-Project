<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'brand' => 'required|string|max:50',
            'model' => 'nullable|string|max:50',
            'year' => 'nullable',
            'color' => 'nullable|string|max:50',
            'price' => 'nullable|numeric|min:0',
            'status' => 'nullable',
            'features' => 'nullable|array',
            'features.*' => 'nullable|string',
            'description' => 'nullable|string',
        ];
    }
}
