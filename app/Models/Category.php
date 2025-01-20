<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'service_name',
        'sub_service_name',
        'image',
        'service_description'
        
    ];
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_name', 'service_name');
    }
 
}   
