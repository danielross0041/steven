<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_id',
        'amount',
    ];
    public function user(){
        return $this->belongsTo(User::class,'player_id');
    }
}
