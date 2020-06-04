<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Trainer extends FormRequest
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
            'address'=>'required|string',
            'country'=>'required',
            'web'=>'nullable|string',
            'exp'=>'required|numeric',
            'con_person'=>'required|string',
            'msg'=>'nullable|string|max:500',
            // 'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is required',
            'email.required|email'  => 'Valid email address is required',
            'phone.required|regex:/(0)[0-9]{10}/'  => 'Valid phone number is required',
            'address.required|string'  => 'Please provide your address',
            'country.required'  => 'Please select your country',
            'web.nullable|string'=> 'Please provide your web address',
            'exp.required|numeric'=>'Please use correct format',
            'con_person.required|string'=>'Please provide your contact person name',
            // 'desg.nullable|string|max:250'=>'Designation organization may not exceed 250 charachters',
            'msg.nullable|string|max:500'=>"Description may not exceed more than 500 charachters",
        ];
    }

    public function attributes()
{
    return [
        'exp' => 'Year Of Establishment',
        'email'=>'Email address',
        'con_person'=>'Contact Person',
        'web'=>'Web address',
        'msg'=>'Details about provider',
    ];
}
}
