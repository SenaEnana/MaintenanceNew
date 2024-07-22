<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipment_id',
        'customer_id',
        'name',
    ];  

    public function employee()
    {
        return $this->hasMany(Customer::class);
    }

}
