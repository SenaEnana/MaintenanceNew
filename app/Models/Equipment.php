<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments'; // Ensure this is correct

    // If your primary key column is named differently
    protected $primaryKey = 'equipment_id'; 

    protected $fillable = [
        'equipment_id',
        'name',
    ];  

}
