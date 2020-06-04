<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SingleMember extends FormRequest
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
            'address'=>'required',
            'country'=>'required',
            'desg'=>'nullable|string|max:255',
            'exp'=>'nullable|numeric',
            'msg'=>'nullable|string|max:500',
            'linkedin'=>'nullable',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Name field is required',
        'email.required|email'  => 'Valid email address is required',
        'phone.required|regex:/(0)[0-9]{10}/'  => 'Valid phone number is required',
        'address.required'  => 'Please provide your address',
        'country.required'  => 'Please select your country',
        'exp.nullable|numeric'=>'Please use correct format',
        'desg.nullable|string|max:250'=>'Designation organization may not exceed 250 charachters',
        'msg.nullable|string|max:500'=>"Description may not exceed more than 500 charachters",
    ];
}

public function attributes()
{
    return [
        'exp' => 'Experience',
        'email'=>'Email address',
        'desg'=>'Designation Organization',
        'msg'=>'Details'
    ];
}

}
