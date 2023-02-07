@extends('pages.master.master')
@section('content')
    <!-- Header End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/7.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">car</h1>
                {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">car</li>
                    </ol>
                </nav> --}}
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    {{-- <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">


        </div>
    </div>
    </div>
    </div>
    <!-- Booking End --> --}}

    <div class="row mx-2 justify-content-center">
        <div class="col-md-4 ">

            <form action="{{ route('avilable') }}" method="post" class="mt-5">

                @csrf
                <div class="bg-white shadow " style="padding: 35px; ">
                    <div class=" g-2">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="text-center text-uppercase">Our car</h6>
                            <h2 class="mb-5">Explore Our <span class=" text-uppercase">car</span></h2>
                        </div>
                        <div class="">
                            <div class=" g-2">
                                <div class="col">
                                    <div class="date" id="date1" data-target-input="nearest" >
                                        <input name="from" type="date"class="form-control datetimepicker-input  mb-3"
                                            placeholder="Check in" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input name="to" type="date" class="form-control datetimepicker-input  mb-3"
                                            placeholder="Check out" />
                                    </div>
                                </div>

                                <div class="col">
                                    <select name="cat_id" class="form-control  mb-3">
                                        <option disabled="">Select a Category</option>
                                        @foreach ($cat as $category)
                                            <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                {{-- <div class="col-md-3">
                                <select name="beds" class="form-control">
                                    <option  disabled="">Select Beds Number</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                  
                                </select>
                              
                            </div> --}}


                                <div class="col-12 pb-5">
                                    <button type="submit" style="background: #4D4D8D;color:white" class="btn  w-100">Find</button>
                                </div>

                            </div>
                        </div>


            </form>
        </div>
    </div>
    </div>
    <div class="col-8 py-5  ">
        <div class="container ">
            <div class="text-center wow fadeInUp " data-wow-delay="0.1s">
                <h6 class="text-center text-uppercase">Our car</h6>
                <h1 class="mb-5" style="color: #4D4D8D">Explore Our <span class=" text-uppercase">car</span></h1>
            </div>



            <div class="row g-4 ">

                @foreach ($car as $car)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="car-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="/images/{{ $car->car_image }}" alt="" width="100%" style="height:200px ">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-danger text-white rounded py-1 px-3 ms-4">{{ $car->car_price }}/DAY</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">car Number : ( {{ $car->id }} )<br><span>
                                            <h6  style="color: #4D4D8D">- {{ $car->cat_name }} </h6>
                                        </span></h5>
                                    {{-- <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                    </div> --}}
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-car me-2"></i>{{ $car->num_of_car }} Car Seats</small>

                                    {{-- <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small> --}}
                                </div>
                                <p class="text-body mb-3">{{ $car->car_description }}</p>
                                <div class="col justify-content-end">
                                    <a class="btn w-100 col btn-dark rounded text-white car py-2 px-4" href="{{ route('car.book', $car->id) }}">Book
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- car Start -->

    <!-- car End -->
    </div>



    <?php $array = DB::table('reviews')->get(); ?>

    <!-- Testimonial Start -->
    <div>
        <br><br><br>
        <div id="testimonial" class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-center text-uppercase">Testimonial</h6>
            <h1 class="mb-5">Our Customers <span class="text-uppercase">Reviews</span></h1>
        </div>
    </div>


    <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">

        <div class="container">


            <div class="owl-carousel testimonial-carousel py-5">

                @foreach ($array as $item)
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">

                        <p>{{ $item->Review }}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">{{ $item->name }}</h6>
                                <small>Customer</small>
                            </div>
                        </div>

                        <i class="fa fa-quote-right fa-3x  position-absolute end-0 bottom-0 me-4 mb-n1"></i>

                    </div>
                @endforeach

            </div>

        </div>

    </div>



    <!-- Testimonial End -->





    <!-- Newsletter Start -->
    <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">For more information please <span
                                    class="text-uppercase">Contact
                                    US</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">

                                <a type="button" href="{{ route('contactus.index') }}"
                                    class="btn py-2 px-3 position-center absolute top-0 end-0 mt-2 me-2" style="color:blue">Contact
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
