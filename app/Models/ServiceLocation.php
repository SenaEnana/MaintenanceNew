<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_locations_id',
        'name',
        'technician_id',
    ]; 

}
