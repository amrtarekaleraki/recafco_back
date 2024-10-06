<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInformationRequest extends FormRequest
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
            'mission'      => 'sometimes|mimes:pdf',
            'trusted'      => 'sometimes|mimes:pdf',
            'quality'      => 'sometimes|mimes:pdf',
            'hse'          => 'sometimes|mimes:pdf',
            'annual'       => 'required',
            'increase'     => 'required',
            'employes'     => 'required',
            'projects'     => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            'mission'        => __("keywords.mission"),
            'trusted'        => __("keywords.trusted"),
            'quality' => __("keywords.quality"),
            'hse' => __("keywords.hse"),
            'annual'       => __("keywords.annual"),
            'increase'       => __("keywords.increase"),
            'employes'       => __("keywords.employes"),
            'projects'       => __("keywords.projects"),
        ];
    }
}
