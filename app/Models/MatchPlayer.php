<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchPlayer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'team_id',
        'match_id',
        'win_prize',
        'kills',
        'kill_amount',
        'position',
        'refund',
        'bonus',
        'total_amount'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function team(){
        return $this->belongsTo(MatchTeam::class,'team_id');
    }

    public function match(){
        return $this->belongsTo(Match::class);
    }

    public function winning(){
        return $this->hasOne(Winning::class,'match_players_id');
    }
}
