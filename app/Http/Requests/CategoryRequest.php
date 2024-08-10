<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:191'],
            'description' => ['string', 'max:1000'],
            'image' => ['mimes:png,jpg,jpeg,webp', 'max:4096'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'field "Name" is required."',
            'name.max' => 'Maximum 191 characters allowed.',

            'description.max' => 'Maximum 1000 characters allowed.',

//            'image.required' => 'Image is required.',
            'image.mimes' => 'Allowed only jpg, jpeg, webp image file types',
            'image.max' => 'Maximum allowed image size is 4MB',
        ];
    }
}
