<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Banner extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'banner_title' => 'required|string',
            'banner_url'=>'required|string',
            'banner_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'banner_title.required|string' => 'Title field is required',
            'banner_url.required|string'  => 'Provide the button url',
            'banner_image.required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'  => 'Provide image with the allowed size',
            ];
    }
}
