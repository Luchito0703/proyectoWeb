<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    use HasFactory;

    public function contractors()
    {
        return $this->belongsTo(contract::class);
    }
    public function customers()
    {
        return $this->belongsTo(customer::class);
    }
    public function contracts()
    {
        return $this->belongsTo(contract::class);
    }
}
