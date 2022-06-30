<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserUpdateRequest extends FormRequest
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
            'name' => 'required',   
                'address'=>'required',
                'password' => 'sometimes|min:8',
                'contact_no' => 'required|string|min:8|max:16',  
                'status'=> 'required',
                'nick' => 'required',
                'age' => 'required',  
                'gender' => 'required',  
                'language' => 'required' 
        ];
    }
}
