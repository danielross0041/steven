<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamPlayer;

class MatchTeam extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_name','added_by'
    ];

    public function team(){
        return $this->hasMany(TeamPlayer::class,'team_id');
    }
}
