<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatementRequest extends FormRequest
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
            'content' => ['required', 'text'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'field "Name" is required."',
            'name.max' => 'Maximum 191 characters allowed.',
            'content.required' => 'field "Content" is required.',
        ];
    }
}
