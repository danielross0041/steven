<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameStoreRequest extends FormRequest
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
            'package.required' => 'Package is required',  
            'logo.required' => 'Logo is required',  
            'image.required' => 'Image is required',  
            'status.required' => 'Status is required',  
            'description.required' => 'Description is required',
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',   
            'package'=>'required',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:max_width=400,max_height=400',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:max_width=1000,max_height=500',
            'status'=> 'required',
            'description' => 'required'
        ];
    }
}
