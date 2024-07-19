<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;
    public function requests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }
}