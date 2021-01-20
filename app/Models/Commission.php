<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
