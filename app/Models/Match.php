<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Match extends Model
{
    use HasFactory;

    public function game(){
        return $this->belongsTo(Game::class);
    }

    
    
    public function place(){
        return $this->hasOne(MatchPositionPoint::class);
    }

    public function players(){
        return $this->hasMany(MatchPlayer::class);
    }

}
