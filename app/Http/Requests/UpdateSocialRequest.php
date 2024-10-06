<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSocialRequest extends FormRequest
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
            'factory_location'    => 'required',
            'factory_location_ar' => 'required',
            'factory_phone'        => 'required',
            'factory_fax'          => 'required',
            'office_location'     => 'required',
            'office_location_ar'  => 'required',
            'office_phone'         => 'required',
            'office_fax'           => 'required',
            'insta'               => 'required',
            'linkedin'            => 'required',
            'youtube'             => 'required',
            'email'               => 'required',
            'career_open'         => 'required',
            'comercial_no'         => 'required',
            'website'              => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            'factory_location'        => __("keywords.factory_location_en"),
            'factory_location_ar'        => __("keywords.factory_location_ar"),
            'office_location' => __("keywords.office_location_en"),
            'office_location_ar' => __("keywords.office_location_ar"),
            'factory_phone' => __("keywords.factory_phone"),
            'factory_fax' => __("keywords.factory_fax"),
            'office_phone' => __("keywords.office_phone"),
            'office_fax' => __("keywords.office_fax"),
            'insta' => __("keywords.insta"),
            'linkedin' => __("keywords.linkedin"),
            'youtube' => __("keywords.youtube"),
            'email' => __("keywords.email"),
            'career_open' => __("keywords.career_open"),
            'comercial_no' => __("keywords.comercial_no"),
            'website' => __("keywords.website"),
        ];
    }
}
