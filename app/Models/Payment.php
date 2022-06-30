<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function hiring(){
        return $this->belongsTo(HiringRequest::class,'hiring_request_id');
    }
}
