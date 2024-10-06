<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name'        => 'required|string',
            'email'        => 'required|email',
            'old_password' => 'required_with:new_password',
            'new_password' => 'nullable',
            'image'       => 'nullable|mimes:jpg,png',
        ];
    }

    public function attributes(): array
    {
        return [
            'name'        => __("keywords.name"),
            'eamil'        => __("keywords.email"),
            'old_password' => __("keywords.password"),
            'image'       => __("keywords.image"),
        ];
    }
}
