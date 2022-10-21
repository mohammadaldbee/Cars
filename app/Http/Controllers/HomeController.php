<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $allProducts = Product::all()->count();

        return view('.dashboard', [
            'allUsers' => $allUsers->count(),
            'allProducts' => $allProducts
        ]);
    }
}
