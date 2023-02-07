<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\car;
use App\Models\category;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class carListingController extends Controller
{

    public function index()
    {
        $cat=category::all();
        $car = DB::table('cars')
        ->join('categories', 'cars.cat_id', '=', 'categories.id')
        ->select('cars.*', 'categories.cat_name')->where('status','=','1')
        ->get();
        return view('pages.car', ['car' => $car,
        'cat'=>$cat
    ]);
    }


    public function avilable(Request $request){

        $cat=category::all();
        $user_date_input=Booking::where('checkIn_date','>=',"{$request->from}")
                                ->where('checkOut_date','<=',"{$request->to}")
                                ->get("car_id");
                                // ->orWhereBetween('checkOut_date', [$request->from, $request->to])

        $available=car::whereNotIn('id',$user_date_input)->get();
        $available= $available->where('cat_id',$request->cat_id)
        ;
     
 

       return view('pages.car',[
           'car'=>$available,
           'cat'=>$cat
           


       ]);


    }


    public function book($id)
    {
             

        
        $car = car::find($id);
        $user = Auth::user();
        return view('pages.booking', [
             'car' => $car,
             'user' => $user
            ]);
    }


    public function confirm($id, Request $request)
    {
        try {

            $car = car::find($id);
            $user = Auth::user();
            $insert = new car();

            $start_date = Carbon::parse($request->input('checkin'));
            $end_date = Carbon::parse($request->input('checkout'));
            $price = $car->car_price;
            $special_request=$request->special_request ;

            $booking = $insert->bookForUser($user->id, $car->id, $start_date, $end_date, $price,$special_request);

            return redirect('userprofile');


        } catch(\Exception $e) {
          
            return redirect()->route('car.book',$car->id)->with('errorx',  $e->getMessage());
        }
    }


}
