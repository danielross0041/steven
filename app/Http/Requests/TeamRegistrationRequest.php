<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRegistrationRequest extends FormRequest
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
            'team_name' => 'sometimes|unique:match_teams,team_name',
            'player1_name' => 'sometimes|string',
            'player1_id' => 'sometimes|string',
            'player2_name' => 'sometimes|string',
            'player2_id' => 'sometimes|string',
            'player3_name' => 'sometimes|string',
            'player3_id' => 'sometimes|string',
            'player4_name' => 'sometimes|string',
            'player4_id' => 'sometimes|string',
        ];
    }
}
