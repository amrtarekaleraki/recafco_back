<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'product_id' => 'required|exists:products,id',
            'title'        => 'required|string',
            'title_ar'        => 'required|string',
            'location'        => 'required|string',
            'location_ar'        => 'required|string',
            'client'        => 'required|string',
            'client_ar'        => 'required|string',
            'subtitle'        => 'required|string',
            'subtitle_ar'        => 'required|string',
            'description'    => 'required|string',
            'description_ar'    => 'required|string',
            'image'       => 'nullable|mimes:jpg,png,svg',
            'image2'       => 'nullable|mimes:jpg,png,svg',
            'slider_image'     => 'nullable',
            'slider_image.*'     => 'mimes:jpg,png,svg',
            'value'    => 'required|string',
            'featured' => 'required|in:active,inactive',
        ];
    }

    public function attributes(): array
    {
        return [
            'category_id'        => __("keywords.category"),
            'product_id'        => __("keywords.product"),
            'title'        => __("keywords.title_en"),
            'title_ar'        => __("keywords.title_ar"),
            'location'        => __("keywords.location_en"),
            'location_ar'        => __("keywords.location_ar"),
            'client'        => __("keywords.client_en"),
            'client_ar'        => __("keywords.client_ar"),
            'subtitle'        => __("keywords.subtitle_en"),
            'subtitle_ar'        => __("keywords.subtitle_ar"),
            'description' => __("keywords.description_en"),
            'description_ar' => __("keywords.description_ar"),
            'image'       => __("keywords.image_home"),
            'image2'       => __("keywords.image2"),
            'slider_image'       => __("keywords.slider_image"),
            'value'       => __("keywords.value"),
            'featured'       => __("keywords.featured"),
        ];
    }
}
