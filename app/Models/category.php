<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'cat_name',
        'cat_img',
        
    ];
    public function car(){
        return $this->hasMany(car::class);
    }
}
