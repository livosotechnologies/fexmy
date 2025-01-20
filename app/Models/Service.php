<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_name',
        'servce_detail',
        'image'
    ];
    public function categories()
    {
        return $this->hasMany(Category::class, 'service_name', 'service_name');
    }
 
}   
