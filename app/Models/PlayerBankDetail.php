<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerBankDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_id', 'account_number', 'account_title', 'bank_name',
    ];

    public function user(){
        return $this->belongsTo(User::class,'player_id');
    }
}
