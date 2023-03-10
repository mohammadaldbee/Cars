<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\carController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ReviewuserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\carListingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactusAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserPublicController;
use App\Http\Controllers\UsersController;
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
})->name('home');





Route::get('/about', function () {
    return view('pages.about');
})->name('about');



Route::get('/service', function () {
    return view('pages.service');
})->name('service');



Route::get('/car', [carListingController::class, 'index'])->name('car');
Route::post('/carearch', [carListingController::class, 'avilable'])->name('avilable');
Route::middleware([GuestMiddleware::class])->group(function () {
    Route::get('/car/{id}/book', [carListingController::class, 'book'])->name('car.book');
    Route::post('/car/{id}/booking/confirm', [carListingController::class, 'confirm'])->name('car.book.confirm');
    
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

Route::get('/dashboard', [carListingController::class, 'index'])->name('dashboard');



Route::resource('/userprofile', UserPublicController::class);

Route::resource('/contactus', ContactusController::class);
Route::resource('/review', ReviewuserController::class);


Route::get('middleware', function () {
    $collection = collect(Route::getRoutes())->map(function ($r) {
        if (isset($r->action['middleware']))
            return $r->action['middleware'];
    })->flatten();
    return array_unique($collection->toArray());
});
Route::middleware([AdminMiddleware::class])->name('admin.')->prefix('admin')->group(function () {
    Route::resource('/products', ProductsController::class);
    Route::resource('/users', UsersController::class);
    Route::resource('/booking', BookingController::class);
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/carAdmin', carController::class);
    Route::resource('/categoryAdmin', CategoryController::class);
    Route::resource('/reviewsAdmin', ReviewController::class);
    Route::resource('/contactAdmin', ContactusAdminController::class);
});





