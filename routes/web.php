<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});


Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/room', [RoomListingController::class, 'index'])->name('room');

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/team', function () {
    return view('pages.team');
});
Route::get('/testimonial', function () {
    return view('pages.testimonial');
});

Route::get('/Privacy Policy', function () {
    return view('pages.Privacy Policy');
});

Route::get('/Terms and Condition', function () {
    return view('pages.Terms and Condition');
});



Auth::routes();
