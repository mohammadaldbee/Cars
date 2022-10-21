<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
  use HasFactory;

  protected $fillable =
  [
    'cat_name', 'num_of_beds', 'room_price',
    'status', 'room_img', 'room_description'
  ];


  public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
    return $this->belongsTo(category::class);
  }

  public function reviews()
  {
    return $this->hasMany(review::class);
  }
 
}
