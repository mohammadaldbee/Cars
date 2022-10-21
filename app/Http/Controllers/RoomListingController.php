<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class RoomListingController extends Controller
{

    public function index()
    {
        $rooms = DB::table('rooms')
        ->join('categories', 'rooms.cat_id', '=', 'categories.id')
        ->select('rooms.*', 'categories.cat_name')
        ->get();


        return view('pages.room', ['rooms' => $rooms]);
    }

    public function book($id)
    {
        $room = room::find($id);
        $user = Auth::user();


        return view('pages.booking', [
             'room' => $room,
             'user' => $user
            ]);
    }


    public function confirm($id, Request $request)
    {
        try {

            $room = room::find($id);
            $user = Auth::user();
            $insert = new room();

            $start_date = Carbon::parse($request->input('checkin'));
            $end_date = Carbon::parse($request->input('checkout'));
            $price = $room->room_price;

            $booking = $insert->bookForUser($user->id, $room->id, $start_date, $end_date, $price);

            return view('pages.success', [
                'room' => $room,
                'user' => $user,
                'booking' => $booking
            ]);

        } catch(\Exception $e) {
            return $e->getMessage();
            // return view('pages.error', [
            //     'room' => $room,
            //     'user' => $user
            // ]);
        }
    }


}
