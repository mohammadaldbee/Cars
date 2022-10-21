<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;

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

Route::get('/booking', function () {
    return view('pages.booking');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/room', function () {
    return view('pages.room');
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



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::resource('/products',ProductsController::class );
Route::resource('/productsAdmin',ProductAdminController::class );
Route::resource('/roomsAdmin',RoomController::class );
Route::resource('/categoryAdmin',CategoryController::class );
Route::resource('/reviewsAdmin',ReviewController::class );
Route::resource('/users',UsersController::class);