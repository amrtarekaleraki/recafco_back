<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title'        => 'required|string',
            'title_ar'        => 'required|string',
            'description'    => 'required|string',
            'description_ar'    => 'required|string',
            'pdf'       => 'nullable|mimes:pdf',
            'image'       => 'nullable|mimes:jpg,png,svg',
        ];
    }

    public function attributes(): array
    {
        return [
            'title'        => __("keywords.title_en"),
            'title_ar'        => __("keywords.title_ar"),
            'description' => __("keywords.description_en"),
            'description_ar' => __("keywords.description_ar"),
            'pdf'       => __("keywords.pdf"),
            'image'       => __("keywords.image"),
        ];
    }
}
