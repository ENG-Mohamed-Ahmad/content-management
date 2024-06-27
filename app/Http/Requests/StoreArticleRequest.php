<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'title' => 'required|unique:articles|',
            'content' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpg,png,gif,jpeg',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The article title is required.',
            'title.unique' => 'The article title must be unique.',
            'content.string' => 'The content must be a string.',
            'images.*.image' => 'Each file must be an image.',
            'images.*.mimes' => 'image must be type of jpg, png, gif, or jpeg.',
        ];
    }
}