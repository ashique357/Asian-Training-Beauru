<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Course extends FormRequest
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
            'course_title' => 'required|string',
            'course_image'=>'nullable:image|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'course_url'=>'nullable:icon|string',
        ];
    }

    public function messages(){
        return[
            'course_title.required|string'=>'Provide Course title',
            'course_url.nullable:icon|string'=>'provide course icon.(Ex:fa fa-suitcase)',
            'course_image.nullable:image|image|mimes:jpeg,png,jpg,gif,svg|max:2048'=>'Please upload the image'
        ];
    }
}
