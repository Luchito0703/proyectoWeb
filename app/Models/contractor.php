<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contractor extends Model
{
    use HasFactory;
    
    public function contractors()
    {
        return $this->belongsTo(contract::class);
    }
}
