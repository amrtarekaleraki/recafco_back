<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCounterRequest extends FormRequest
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
            'projects'        => 'required',
            'employes'        => 'required',
            'awards'          => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            'projects'        => __("keywords.projects"),
            'employes'        => __("keywords.employes"),
            'awards'       => __("keywords.awards"),
        ];
    }
}
