<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
            'title_lt' => 'required_if:route,!=,|string',
            'title_en' => 'required_if:route,!=,|string',
            'text_lt' => 'nullable',
            'text_en' => 'nullable',
            'image' => 'required_if:route,!=,',
            'show_experience' => 'required_if:route,!=,|boolean',
            'experience_years' => 'required_if:show_experience,==,1|integer'
        ];
    }

    // /**
    //  * Custom message for validation
    //  *
    //  * @return array
    //  */
    // public function messages(): array
    // {
    //     return [
    //         'name.required' => __('Pavadinimas yra privalomas.'),
    //         'route.required' => __(''),
    //         'route.unique' => __(''),
    //         'title.required' => __(''),
    //         'text.required' => __('Tekstas yra privalomas.'),
    //         'image.required' => __(''),
    //         'show_experience' => __(''),
    //         'experience_years.required' => __('')
    //     ];
    // }
}
