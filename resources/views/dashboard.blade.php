@extends('layouts.app')
@extends('layouts.nav')
@section('content')

    <head>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        {{-- <style>
            body {
                background: #eee;
            }

            .card-box {
                position: relative;
                color: #fff;
                padding: 20px 10px 40px;
                margin: 20px 0px;
            }

            .card-box:hover {
                text-decoration: none;
                color: #f1f1f1;
            }

            .card-box:hover .icon i {
                font-size: 100px;
                transition: 1s;
                -webkit-transition: 1s;
            }

            .card-box .inner {
                padding: 5px 10px 0 10px;
            }

            .card-box h3 {
                font-size: 27px;
                font-weight: bold;
                margin: 0 0 8px 0;
                white-space: nowrap;
                padding: 0;
                text-align: left;
            }

            .card-box p {
                font-size: 15px;
            }

            .card-box .icon {
                position: absolute;
                top: auto;
                bottom: 5px;
                right: 5px;
                z-index: 0;
                font-size: 72px;
                color: rgba(0, 0, 0, 0.15);
            }

            .card-box .card-box-footer {
                position: absolute;
                left: 0px;
                bottom: 0px;
                text-align: center;
                padding: 3px 0;
                color: rgba(255, 255, 255, 0.8);
                background: rgba(0, 0, 0, 0.1);
                width: 100%;
                text-decoration: none;
            }

            .card-box:hover .card-box-footer {
                background: rgba(0, 0, 0, 0.3);
            }


            .bg-blue {
                background: linear-gradient(45deg, #4099ff, #73b4ff);
            }

            .bg-green {
                background: linear-gradient(45deg, #2ed8b6, #59e0c5);
            }

            .bg-orange {
                background: linear-gradient(45deg, #FFB64D, #ffcb80);
            }

            .bg-red {
                background: linear-gradient(45deg, #FF5370, #ff869a);
            }

            .bg-red2 {
                background: linear-gradient(45deg, #0a0a0a, #202020d6);
            }

            .bg-red3 {
                background: linear-gradient(45deg, #9812c9, #6d484e);
            }
        </style>


    </head>
   

    <div class="container">
        <div class="row justify-content">




            <div class="container">
                <div class="row">


                    <div class="col-lg-3 col-sm-6">
                        <div class="card-box bg-blue">
                            <div class="inner">
                                <h3> ( {{ $allUsers }} ) </h3>
                                <p> Number Of Users </p>
                            </div>
                            <div class="icon">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <a href="users" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>






                    <div class="col-lg-3 col-sm-6">
                        <div class="card-box bg-green">
                            <div class="inner">
                                <h3> ( {{ $allCategory }} ) </h3>
                                <p> Number Of Categories </p>
                            </div>
                            <div class="icon">
                                <i class="bi bi-columns-gap"></i>
                            </div>
                            <a href="{{ route('admin.categories.index') }}" class="card-box-footer">View More <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>








                    <div class="col-lg-3 col-sm-6">
                        <div class="card-box bg-orange">
                            <div class="inner">
                                <h3> ( {{ $allcar }} ) </h3>
                                <p> Number Of car </p>
                            </div>
                            <div class="icon">
                                <i class="bi bi-hospital"></i>
                            </div>
                            <a href="{{ route('admin.carAdmin.index') }}" class="card-box-footer">View More <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>





                    <div class="col-lg-3 col-sm-6">
                        <div class="card-box bg-red">
                            <div class="inner">
                                <h3> ( {{ $allReservations }} ) </h3>
                                <p> Number Of Reservations </p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-credit-card f-left"></i>
                            </div>
                            <a href="{{ route('admin.booking.index') }}" class="card-box-footer">View More <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>






                    <div class="col-lg-3 col-sm-6">
                        <div class="card-box bg-red2">
                            <div class="inner">
                                <h3> ( {{ $allreview }} ) </h3>
                                <p> Number Of Reviews </p>
                            </div>
                            <div class="icon">
                                <i class="bi bi-chat"></i>
                            </div>
                            <a href="{{ route('admin.reviewsAdmin.index') }}" class="card-box-footer">View More <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="card-box bg-red3">
                            <div class="inner">
                                <h3> ( {{ $allmessages }} ) </h3>
                                <p> Number Of Messages </p>
                            </div>
                            <div class="icon">
                                <i class="bi bi-envelope-open-fill"></i>
                            </div>
                            <a href="{{ route('admin.contactAdmin.index') }}" class="card-box-footer">View More <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>




























                </div>
            </div>





































        </div>










    </div> --}}
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{url("css/sb-admin-2.min.css")}} rel="stylesheet">
<style>
    .admin{color:#eee;
    margin-left:20px}
    .first{
        text-align: center;
        margin:3%;
        color:blue;
        font-size:2rem
    }

</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
       
            <!-- Divider -->
            <hr class="sidebar-divider">

       
           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a href="users" class="card-box-footer "><h5 class="admin">Users </h5><i class="fa fa-arrow-circle-right"></i></a>
                </a>
             
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="card-box-footer"><h5 class="admin">Categories</h5> <i
                    class="fa fa-arrow-circle-right"></i></a>
             
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.carAdmin.index') }}" class="card-box-footer"><h5 class="admin">Cars</h5> <i
                    class="fa fa-arrow-circle-right"></i></a>
             
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.booking.index') }}" class="card-box-footer"><h5 class="admin">Reservations</h5> <i
                    class="fa fa-arrow-circle-right"></i></a>
             
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.reviewsAdmin.index') }}" class="card-box-footer"><h5 class="admin">Reviews</h5> <i
                    class="fa fa-arrow-circle-right"></i></a>
             
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.contactAdmin.index') }}" class="card-box-footer"><h5 class="admin">Contact</h5><i
                    class="fa fa-arrow-circle-right"></i></a>
             
            </li>

           
            <!-- Divider -->
            <hr class="sidebar-divider">

    
          

     
           
           
        </ul>
      

        <!-- Content Wrapper -->
      
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="first">OUR STATS</div>
            <!-- Main Content -->
            <div id="content">

              

                <!-- Begin Page Content -->
                <div class="container-fluid">

               
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Number of Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $allUsers }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Categories</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $allCategory }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Cars</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $allcar }} </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                       

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Reservations</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $allReservations }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                

                  

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
@endsection
