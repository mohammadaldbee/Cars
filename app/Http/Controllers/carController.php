<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class carController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $categories = category::all();
        // $car = car::all();
        $car = DB::table('cars')
        ->join('categories', 'cars.cat_id', '=', 'categories.id')
        ->select('cars.*', 'categories.cat_name')
        ->get();

        return view('car-Admin', ['car' =>$car]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $categories = category::all();
        return view('add_car', [
            'categories'=>$categories,
            'auth_user'=>Auth::user(),

        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'num_of_car'          => 'required',

            'car_price'        => 'required',
            'car_description'   => 'required',
            'car_image'           => 'required|image',
            'car_image1'           => 'required|image',
            'car_image2'           => 'required|image'
        ]);

        $file_name = time() . '.' . request()->car_image->getClientOriginalExtension();

        request()->car_image->move(public_path('images'), $file_name);

        $file_name1 = time() .'img1'. '.' . request()->car_image1->getClientOriginalExtension();

        request()->car_image1->move(public_path('images'), $file_name1);

        $file_name2 = time() .'img2'. '.' . request()->car_image2->getClientOriginalExtension();

        request()->car_image2->move(public_path('images'), $file_name2);

        $car = new car;

        $car->num_of_car = $request->num_of_car;
        $car->cat_id = $request->cat_name;
        $car->car_price = $request->car_price;
        $car->car_description = $request->car_description;
        $car->car_image = $file_name;
        $car->car_image1 = $file_name1;
        $car->car_image2 = $file_name2;

        $car->save();

        return redirect('admin/carAdmin')->with('success', 'car Data Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories = category::all();
        $car = car::find($id);
        return view('edit_car', [
            'categories'=>$categories,
            'car'=>$car,
            'auth_user'=>Auth::user(),

        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'num_of_car'          => 'required',
            'cat_id'          => 'required',
            'car_price'        => 'required',
            'car_description'   => 'required',
            'status'        => 'required',
            'car_image'           => 'image',
            'car_image1'           => 'image',
            'car_image2'           => 'image'

        ]);



        if ($request->car_image != "") {
            $car_image = time() . '.' . request()->car_image->getClientOriginalExtension();
            request()->car_image->move(public_path('images'), $car_image);
        } 
        
        else {
            $car_image = $request->hidden_img;
        }
        //img1
        if ($request->car_image1 != "") {
            $car_image1 = time().'img1' . '.' . request()->car_image1->getClientOriginalExtension();
            request()->car_image1->move(public_path('images'), $car_image1);
        } 
        
        else {
            $car_image1 = $request->hidden_img1;
        }
        //img2
        if ($request->car_image2  != "") {
            $car_image2  = time() .'img2'. '.' . request()->car_image2 ->getClientOriginalExtension();
            request()->car_image2 ->move(public_path('images'), $car_image2 );
        } 
        
        else {
            $car_image2  = $request->hidden_img2;
        }


        $car = car::find($id);
        $car->num_of_car = $request->num_of_car;
        $car->cat_id = $request->cat_id;
        $car->car_price = $request->car_price;
        $car->car_description = $request->car_description;
        $car->status = $request->status;
        $car->car_image = $car_image;
        $car->car_image1 = $car_image1;
        $car->car_image2 = $car_image2;

        $car->save();

        return redirect('admin/carAdmin')->with('success', 'car Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userDestroy = car::find($id);
        $userDestroy->destroy($id);
        return redirect('admin/carAdmin')->with('success', ' car Data deleted successfully');
    }
}
