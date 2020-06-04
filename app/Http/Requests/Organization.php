<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Organization extends FormRequest
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
            'name' => 'required|max:25|min:4',
            'email' => 'required|email',
            'phone'=>'required|regex:/(0)[0-9]{10}/',
            'country'=>'required',
            'employee'=>'required|numeric',
            'con_person'=>'required|string',
            'msg'=>'nullable|string|max:500',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is required',
            'email.required|email'  => 'Valid email address is required',
            'phone.required|regex:/(0)[0-9]{10}/'  => 'Valid phone number is required',
            'country.required'  => 'Please select your country',
            'employee.required|numeric'=>'Please use correct format',
            'con_person.required|string'=>'Please provide your contact person name',
            'msg.nullable|string|max:500'=>"Description may not exceed more than 500 charachters",
        ];
    }

    public function attributes()
    {
        return [
            'email'=>'Email address',
            'con_person'=>'Contact Person',
             'employee'=>'Number of employee',
            'msg'=>'Details about organization',
        ];
    }
}
