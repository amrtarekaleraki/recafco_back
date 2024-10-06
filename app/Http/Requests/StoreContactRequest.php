<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'f_name'        => 'required',
            'l_name'        => 'required',
            'email'    => 'required|email',
            'phone'    => 'required',
            'subject'       => 'required',
            'message'       => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            'f_name'        => __("keywords.f_name"),
            'l_name'        => __("keywords.l_name"),
            'email' => __("keywords.email"),
            'phone' => __("keywords.phone"),
            'subject'       => __("keywords.subject"),
            'message'       => __("keywords.message"),
        ];
    }
}
