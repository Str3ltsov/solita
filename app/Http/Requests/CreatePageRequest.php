<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePageRequest extends FormRequest
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
            'name_lt' => 'required|string',
            'name_en' => 'required|string',
            'route' => 'required|string',
            'title_lt' => 'required|string',
            'title_en' => 'required|string',
            'text_lt' => 'nullable',
            'text_en' => 'nullable',
            'image' => 'image',
            'show_experience' => 'required',
            'experience_years' => 'required_if:show_experience,==,1'
        ];
    }
}
