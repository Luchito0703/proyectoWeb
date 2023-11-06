<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;
    
    public function adminProject()
    {
        return $this->belongsTo(adminProject::class,'dni_admin_project','dni');
    }

    public function contractor()
    {
        return $this->belongsTo(contractor::class,'id_contra','id_contractor');
    }

    public function customer()
    {
        return $this->belongsTo(customer::class,'nit_customer','nit_customer');
    }
}
