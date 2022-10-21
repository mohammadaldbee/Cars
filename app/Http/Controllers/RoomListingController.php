<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
}
