@extends('pages.master.master')

@section('content')
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/car1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                    
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Car Rental</h1>
                            <h4 class="display-3 text-white mb-4 animated slideInDown">For Interesting Time</h4>


                            <a href="{{ route('car') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">CHOOSE YOUR CAR</a>



                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/car2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                    
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Car Rental</h1>
                            <h4 class="display-3 text-white mb-4 animated slideInDown">For Interesting Time</h4>

                            <a href="{{ route('car') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">CHOOSE YOUR CAR</a>


                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/car3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                     
                            <h1 class="display-3 text-white mb-4 animated slideInDown">Car Rental</h1>
                            <h4 class="display-3 text-white mb-4 animated slideInDown">For Interesting Time</h4>

                            <a href="{{ route('car') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">CHOOSE YOUR CAR</a>


                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

  <!-- Video Start -->
  <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s" >
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5">FUN DRIVING.....</h1>

    </div>
    <div class="row g-0">
       
        <div class="col-md-12">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src=""
                    data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe width="916" height="515" src="https://www.youtube.com/embed/31kplxJn6nw"
                        title="DELPHIN BOTANIK PLATINUM HOTEL -  Promotion Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Start -->
 


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





    <!-- Video Start -->
    {{-- <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our car</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">car</span></h1>
        </div>
        <div class="row g-0">
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5">
                    <h6 class="section-title text-start text-white text-uppercase mb-3">Luxury Living</h6>
                    <h1 class="text-white mb-4">Discover A Brand Luxurious Hotel</h1>
                    <p class="text-white mb-4">To us, true luxury is a meaningful sense of belonging. It is a dedicated
                        focus on how people want to be treated, grounded in the genuine care you experience during your stay
                        and defined by an abundance of humanity and generosity. This starts with our passionate team,
                        welcoming you to be the centre of our world, anywhere in the world – and always with a distinctly
                        human touch.
                    </p>
                    <a href="{{ route('car') }}" class="btn btn-primary py-md-3 px-md-5 me-3">Our car</a>

                </div>
            </div>
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src=""
                        data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe width="916" height="515" src="https://www.youtube.com/embed/agaC9xKVqUk"
                            title="DELPHIN BOTANIK PLATINUM HOTEL -  Promotion Video" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Video Start -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div id="more" class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            
                <h1 class="mb-5">Our Most Important </h1>
                <h1 class="mb-5">brands</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <h5 class="items">Mercedes</h5>
                        <img src = "img/mer.jfif" style="border-radius: 50%;margin:auto" width="250px" height="250px">
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <h5 class="items" style="">Volkswagen</h5>

                        <img src = "img/vw.jfif" style="border-radius: 50%;margin:auto" width="250px" height="250px">
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <h5 class="items">Porsche</h5>
                        <img src = "img/por.jfif" style="border-radius: 50%;margin:auto" width="250px" height="250px">
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <h5 class="items">Bentley</h5>
                        <img src = "img/bentley.jfif" style="border-radius: 50%;margin:auto" width="250px" height="250px">
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <h5 class="items">BMW</h5>
                        <img src = "img/bmw.jfif" style="border-radius: 50%;margin:auto" width="250px" height="250px">
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <h5 class="items">Nissan</h5>
                        <img src = "img/nissan.jfif" style="border-radius: 50%;margin:auto" width="250px" height="250px">
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <h5 class="items">lamborghini</h5>
                        <img src = "img/lamborghini.jfif" style="border-radius: 50%;margin:auto" width="250px" height="250px">
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <h5 class="items">Toyota</h5>
                        <img src = "img/toyota.jfif" style="border-radius: 50%;margin:auto" width="250px" height="250px">
                       
                    </div>
                </div>


               
               
               
             
            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php $array = DB::table('reviews')->get(); ?>

    <!-- Testimonial Start -->
    <div>
        <br><br><br>
        <div id="testimonial" class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6>Testimonial</h6>
            <h1 class="mb-5">Our Customers Reviews</h1>
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

                        <i class="fa fa-quote-right fa-3x position-absolute end-0 bottom-0 me-4 mb-n1"></i>

                    </div>
                @endforeach

            </div>

        </div>

    </div>



    <!-- Testimonial End -->



    <h2 style="text-align: center">Have a good trip with <span style="color:blue">CarRental</span></h2>
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
