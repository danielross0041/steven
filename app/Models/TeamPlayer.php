<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MatchTeam;

class TeamPlayer extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_id',
        'player_id',
        'player_name'
    ];
    public function team(){
        return $this->belongsTo(MatchTeam::class);
    }
}
