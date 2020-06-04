<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TopNav extends FormRequest
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
            'email' => 'required|email',
            'phone'=>'required',
            'address'=>'required|string',
            'time'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'time.required' => 'Closing/Opening is required',
            'email.required|email'  => 'Valid email address is required',
            'phone.required'  => 'Phone number is required',
            'address.required|string'  => 'Please provide your address',
        ];
    }
}


