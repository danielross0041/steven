<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiringRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'player_id', 'password',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function player(){
        return $this->belongsTo(User::class,'player_id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class,'hiring_request_id');
    }
}
