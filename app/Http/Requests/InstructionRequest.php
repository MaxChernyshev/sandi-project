<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructionRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:191'],
            'content' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'field "Name" is required."',
            'title.max' => 'Maximum 191 characters allowed.',
            'content.required' => 'field "Content" is required.',
        ];
    }
}
