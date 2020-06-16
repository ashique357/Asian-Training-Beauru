<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Opportunity extends FormRequest
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
            'org_name.0'=>"required_if:post_type,==,1",
            'assignment_details.0'=>"required_if:post_type,==,1",
            'approx.0'=>"required_if:post_type,==,1",
            'fees.0'=>"required_if:post_type,==,1",

            'org_name.1'=>"required_if:post_type,==,2",
            "position" => "required_if:post_type,==,2",
            "assignment_details.1" => "required_if:post_type,==,2",
            "location" => "required_if:post_type,==,2",
            "fees.1" => "required_if:post_type,==,2",

            'org_name.2'=>"required_if:post_type,==,3",
            'assignment_details.2'=>"required_if:post_type,==,3",
            'approx.2'=>"required_if:post_type,==,3",
            'fees.2'=>"required_if:post_type,==,3",
        ];
    }

    public function messages(){

        return[
            "org_name.0.required_if"=>"Organization name is required",
            "assignment_details.0.required_if"=>"Write something about your assignment",
            "approx.0.required_if"=>"Please provide time duration(Ex:2 months)",
            "fees.0.required_if"=>"Payment amount field is required",
            
            "org_name.1.required_if"=>"Organization name is required",
            "assignment_details.1.required_if"=>"Write something about your job description",
            "location.required_if"=>"Please provide the job location",
            "fees.1.required_if"=>"Payment amount field is required",
            "position.required_if"=>"Job Position required",

            "org_name.0.required_if"=>"Organization name is required",
            "assignment.0.required_if"=>"Write something about your consultation",
            "approx.0.required_if"=>"Please provide time duration(Ex:2 months)",
            "fees.0.required_if"=>"Payment amount field is required",
        ];
    }
}
