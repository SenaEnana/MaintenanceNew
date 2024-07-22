<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'location',
    ];
    public function requests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }
}
