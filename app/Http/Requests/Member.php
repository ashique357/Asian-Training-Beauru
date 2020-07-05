<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Member extends FormRequest
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
            'name.0'=>"required_if:member_type,==,1",
            'name.1'=>"required_if:member_type,==,2",
            'name.2'=>"required_if:member_type,==,3",

            'email.0'=>"required_if:member_type,==,1",
            'email.1'=>"required_if:member_type,==,2",
            'email.2'=>"required_if:member_type,==,3",

            'address.0'=>"required_if:member_type,==,1",
            'address.1'=>"required_if:member_type,==,2",
            
            'phone.0'=>"required_if:member_type,==,1",
            'phone.1'=>"required_if:member_type,==,2",
            'phone.2'=>"required_if:member_type,==,3",

            'exp.0'=>"required_if:member_type,==,1",
            'exp.1'=>"required_if:member_type,==,2",
        ];
    }


    public function messages(){

        return[
            "name.0.required_if"=>"Person name is required",
            "name.1.required_if"=>"Training Provider name is required",
            "name.2.required_if"=>"Corporate Organizations name is required",

            "email.0.required_if"=>"Email is required",
            "email.1.required_if"=>"Email is required",
            "email.2.required_if"=>"Email is required",

            "address.0.required_if"=>"Address is required",
            "address.1.required_if"=>"Address is required",
            
            "phone.0.required_if"=>"Phone is required",
            "phone.1.required_if"=>"Phone is required",
            "phone.2.required_if"=>"Phone is required",

            "exp.0.required_if"=>"Year of experience is required",
            "exp.1.required_if"=>"Year of establishment is required",
        ];
    }
}
