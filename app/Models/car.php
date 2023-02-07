<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Throwable;

class car extends Model
{
  use HasFactory;

  protected $fillable =
  [
    'cat_name', 'num_of_car', 'car_price',
    'status', 'car_img', 'car_img1','car_img2','car_description', 'name','special_request'
  ];


  public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
  {
    return $this->belongsTo(category::class);
  }

  public function reviews()
  {
    return $this->hasMany(review::class);
  }


  public function bookForUser($userId, $carId, $start_date, $end_date, $price,$special_request)
  {

    //1. check the car availability

    if ($end_date <= $start_date) {
      abort(403, "invalid date");
    }

    $from = $start_date->toDateString();
    $to = $end_date->toDateString();


    $diff = $start_date->diffInDays($end_date);

    $totalPrice = ($diff * $price);
    $tax = $totalPrice * 16 / 100;
    $finalAmount =  $tax + $totalPrice;




    $reserved = Booking::where('car_id', $carId)
    ->where('checkIn_date', '<=', $from)
    ->where('checkOut_date', '>=', $to)
    ->orWhereBetween('checkOut_date', [$from, $to])
    ->where('car_id', $carId)->count();;










    $reserved2 = Booking::where('car_id', $carId)
      ->whereBetween('checkIn_date', [$from, $to])->count();



    // Show results of log

    if ($reserved2 > 0 || $reserved > 0)

      abort(403, "The car is not available for this date. Please selected different date.");


    //2. Book the car

    $booking = new Booking();
    $booking->user_id = $userId;
    $booking->car_id = $carId;
    $booking->totalAmount = $finalAmount;
    $booking->checkIn_date = $from;
    $booking->checkOut_date = $to;
    $booking->special_request = $special_request;

    $booking->save();

    return $booking;
  }
}
