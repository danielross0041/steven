<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateProfileRequest extends FormRequest
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
    public function messages()
    {
        return [
        'name.required' => 'Name is required',  
        'address.required' => 'Address is required',  
        'contact_no.required' => 'Contact number is required',  
        'contact_no.string' => 'Contact number must be string',  
        'contact_no.min' => 'Contact number must be at leat 8 characters',  
        'contact_no.max' => 'Contact number must be at most 16 characters',  
        'nick.required' => 'nick is required',  
        'age.required' => 'age is required',  
        'gender.required' => 'gender is required',  
        'language.required' => 'language is required',  
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',   
            'age' => 'required',
            'nick' => 'required',
            'language' => 'required',  
            'contact_no' => 'required|string|min:8|max:16',
            'address'=>'required',
            'gender' => 'required',
        ];
    }
}
