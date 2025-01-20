<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'service_name',
        'sub_service_name',
        'service_type',
        'price',
        'description',
        'points',
        'quotation'
        
    ];
}
