<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestType extends Model
{
    use HasFactory;

    protected $table = 'request_types'; // Ensure this is correct

    // If your primary key column is named differently
    protected $primaryKey = 'request_types_id'; 

    protected $fillable = [
        'request_types_id',
        'name',
        'description',
    ]; 

}
