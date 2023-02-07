<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\car;
use App\Models\category;
use App\Models\contactus;
use App\Models\Product;
use App\Models\review;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allUsers = User::get()->where('role', 'user');
        $allCategory =category ::all()->count();
        $allcar = car::all()->count();
        $allreview = review::all()->count();
        $allReservations = Booking::all()->count();
        $allmessages = contactus::all()->count();


        return view('.dashboard', [
            'allUsers' => $allUsers->count(),
            'allCategory' => $allCategory,
            'allcar'=>$allcar,
            'allreview'=>$allreview,
            'allReservations'=>$allReservations,
            'allmessages'=>$allmessages

        ]);
    }
}
