<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

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
            'title' => ['required', 'string', 'min:3', 'max:100'],
            'author' => ['sometimes', 'nullable', 'string'],
            'pages' => ['sometimes', 'nullable', 'numeric'],
            'band' => ['sometimes', 'nullable', 'string', 'min:3', 'max:100'],
            'studio' => ['sometimes', 'nullable', 'string', 'min:3', 'max:100'],
            'playlength' => ['sometimes', 'nullable', 'numeric'],
            'price' => ['required', 'numeric'],
            'description' => ['sometimes', 'nullable', 'string'],
            'category' => ['required', 'string'],
            'image' => ['sometimes', 'nullable', 'mimes:jpg,png,jpeg']
        ];
    }
}
