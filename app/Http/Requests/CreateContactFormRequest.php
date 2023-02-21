<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email:rfc',
            'topic' => 'required|string',
            'description' => 'nullable|string'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => __('Vardo laukas yra privalomas.'),
            'email.required' => __('El. pašto laukas yra privalomas.'),
            'topic.required' => __('Temos laukas yra privalomas.')
        ];
    }
}
