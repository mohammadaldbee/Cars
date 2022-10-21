<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomListingController;
use App\Http\Middleware\GuestMiddleware;

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

Auth::routes();

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


Route::middleware([GuestMiddleware::class])->group(function () {

    Route::get('/room/{id}/book', [RoomListingController::class, 'book'])->name('room.book');

    Route::post('/room/{id}/booking/confirm', [RoomListingController::class, 'confirm'])->name('room.book.confirm');
});


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

Route::get('/dashboard', [RoomListingController::class, 'index'])->name('dashboard');



Route::get('middleware', function () {
    $collection = collect(Route::getRoutes())->map(function ($r) {
        if (isset($r->action['middleware']))
            return $r->action['middleware'];
    })->flatten();
    return array_unique($collection->toArray());
});
