<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest
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
        'email.required' => 'email is required',  
        'email.unique' => 'Email address must be unique', 
        'password.required' => 'Password is required', 
        'password.min' => 'Password must be at least 8 characters', 
        'contact_no.required' => 'Contact number is required',  
        'contact_no.string' => 'Contact number must be string',  
        'contact_no.min' => 'Contact number must be at leat 8 characters',  
        'contact_no.max' => 'Contact number must be at most 16 characters',  
        'nick.required' => 'nick is required',  
        'age.required' => 'age is required',  
        'gender.required' => 'gender is required',  
        'language.required' => 'language is required',  
        'image.required' => 'image is required',
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',   
            'address'=>'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'contact_no' => 'required|string|min:8|max:16',
            'nick' => 'required',
            'age' => 'required',  
            'gender' => 'required',  
            'language' => 'required',  
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        ];
    }
}
