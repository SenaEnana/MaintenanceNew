<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;

    protected $fillable = [
        'technician_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'job_type_id',
        'locations_id',
    ]; 

    public function requests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }
}
