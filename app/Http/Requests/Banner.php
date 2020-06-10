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
        return true;
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
            'banner_paragraph'=>'required|string|max:500',
            // 'banner_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'btn_name'=>'required|string',
        ];
    }

    public function messages()
    {
        return [
            // 'banner_image.required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'  => 'Provide image with the allowed size',
            'banner_title.required|string' => 'Title field is required',
            'banner_paragraph.required|string|max:500' => 'Paragraph is required and not exceed than 500',
            'banner_url.required|string'  => 'Provide the button url',
            'btn_name.required'=>"Provide Button name.ex:President's message",    
        ];
    }
}

