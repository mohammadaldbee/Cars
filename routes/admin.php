<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;


Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);

    Route::resource('/productsAdmin', ProductAdminController::class);
    Route::resource('/roomsAdmin', RoomController::class);
    Route::resource('/categoryAdmin', CategoryController::class);
    Route::resource('/reviewsAdmin', ReviewController::class);
});
