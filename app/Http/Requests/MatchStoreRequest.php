<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatchStoreRequest extends FormRequest
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
            'game_id' => 'required',
                'name' => 'required', 
                'url' => 'required', 
                'timing' => 'required', 
                'prize_pool' => 'required', 
                'per_kill' => 'required',   
                'team'=>'required',
                'entry_fee'=>'required',
                'total_player'=>'required',
                'map'=>'required',
                'room_id'=>'required',
                'banner' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:max_width=1000,max_height=500',
                'status'=> 'required',
                'desc' => 'required',
                'private_desc' => 'required',
                'sponsor' => 'required',
                'prize_desc' => 'required'
        ];
    }
}
