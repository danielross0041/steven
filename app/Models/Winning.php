<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winning extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount',
        'match_id',
        'match_players_id'
    ];

    public function winning(){
        return $this->belongsTo(MatchPlayer::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
