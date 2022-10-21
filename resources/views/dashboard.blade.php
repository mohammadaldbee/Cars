@extends('layouts.app')
{{-- @extends('pages.master.header') --}}
@section('content')
    <div class="container">
        <div class="row justify-content">
            <div class="col col-lg-4 ">
                <div class="card text-bg-info m-5 col-1" style="width: 18rem;">
                    <img src="/images/useredite.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h1 class="card-title">Users</h1><br>
                        <h5 class="card-title">Number Of Users : ({{ $allUsers }})</h5>

                        <br>
                        <a href="users" class=" btn btn-primary text-white text-decoration-none col-6 ">
                            <h6 class="text-white m-0 p-0">
                                Show Users
                            </h6>
                        </a>
                    </div>
                </div>

            </div>


            <div class="col col-lg-4 ">

                <div class="card text-bg-secondary m-5 col-1" style="width: 18rem;">
                    <img src="/images/pro.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h1 class="card-title">Categories</h1><br>
                        <h5 class="card-title">Number Of Categories : ({{ "0" }})</h5>

                        <br>
                        <a href="{{ route('categoryAdmin.index') }}"
                            class=" btn btn-primary text-white text-decoration-none col-6 ">
                            <h6 class="text-white m-0 p-0">
                                Categories
                            </h6>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col col-lg-4 ">

                <div class="card text-bg-secondary m-5 col-1" style="width: 18rem;">
                    <img src="/images/pro.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h1 class="card-title">Rooms</h1><br>
                        <h5 class="card-title">Number Of Products : ({{ '#0' }})</h5>

                        <br>
                        <a href="{{ route('roomsAdmin.index') }}"
                            class=" btn btn-primary text-white text-decoration-none col-6 ">
                            <h6 class="text-white m-0 p-0">
                                Show Rooms
                            </h6>
                        </a>
                    </div>
                </div>
            </div>




            <div class="col col-lg-4 ">

                <div class="card text-bg-secondary m-5 col-1" style="width: 18rem;">
                    <img src="/images/pro.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h1 class="card-title">Reservations</h1><br>
                        <h5 class="card-title">Number Of Reservations : ({{ '0' }})</h5>

                        <br>
                        <a href="{{ route('productsAdmin.index') }}"
                            class=" btn btn-primary text-white text-decoration-none col-6 ">
                            <h6 class="text-white m-0 p-0">
                                Show Reservations
                            </h6>
                        </a>
                    </div>
                </div>
            </div>




            <div class="col col-lg-4 ">

                <div class="card text-bg-secondary m-5 col-1" style="width: 18rem;">
                    <img src="/images/pro.png" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h1 class="card-title">Reviews</h1><br>
                        <h5 class="card-title">Number Of Reviews : ({{ '0' }})</h5>

                        <br>
                        <a href="{{ route('reviewsAdmin.index') }}"
                            class=" btn btn-primary text-white text-decoration-none col-6 ">
                            <h6 class="text-white m-0 p-0">
                                Show Reviews
                            </h6>
                        </a>
                    </div>
                </div>
            </div>






        </div>










    </div>
@endsection
