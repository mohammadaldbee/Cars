@extends('pages.master.master')
@section('content')
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/7.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#" style="color:white">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:white">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn " data-wow-delay="0.1s">
        <div class="container ">
            <div class="bg-white shadow-lg " style="padding: 35px;">
                <div class="row g-2">
                    <h4 class=" mb-4 text-center text-uppercase "style="color:#4D4D8D"> CHOOSE YOUR CAR &<br>
                        START YOUR DREAM.</h4>

                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h4 class="  text-uppercase" style="color:gray;text-align:center">About Us</h4>
                    <h1 class="mb-4" style="text-align:center">Car Rental</h1>
                    <p class="mb-4">No matter who you are, or where you are going, our travel brands help every type of traveler not only find the trip that’s right for them, but get the best value every time.
                    </p>


                    <div class="row g-3 pb-4">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-car fa-2x  mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">{{ DB::table('cars')->count() }}</h2>
                                    <p class="mb-0">car</p>
                                </div>
                            </div>
                        </div>



                  
                   
                    </div>
                  
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                  <img src= "img/car3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



  

















            </div>
        </div>
    </div>
    <!-- Team End -->












    <!-- Newsletter Start -->
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">For more information please <span
                                    style="color:blue" class="text-uppercase">Contact US</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">

                                <a type="button" href="{{ route('contactus.index') }}" style="background:black;border:none"
                                    class="btn btn-primary py-2 px-3 position-center absolute top-0 end-0 mt-2 me-2">Contact
                                    US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Start -->


    <!-- Footer Start -->
@endsection
