<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Go Bid</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dash/assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href=" {{ asset('dash/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('dash/dist/css/style.min.css') }}" rel="stylesheet" />

</head>

<body>

    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - Navbar -->
        @include('admin.components.navbar')

        <!-- Left Sidebar  -->
        @include('admin.components.sidebar')

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                @yield('content')

                {{-- <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white">
                                    <i class="mdi mdi-view-dashboard"></i>
                                </h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white">
                                    <i class="mdi mdi-chart-areaspline"></i>
                                </h1>
                                <h6 class="text-white">Charts</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white">
                                    <i class="mdi mdi-collage"></i>
                                </h1>
                                <h6 class="text-white">Widgets</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white">
                                    <i class="mdi mdi-border-outside"></i>
                                </h1>
                                <h6 class="text-white">Tables</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white">
                                    <i class="mdi mdi-receipt"></i>
                                </h1>
                                <h6 class="text-white">Forms</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white">
                                    <i class="mdi mdi-relative-scale"></i>
                                </h1>
                                <h6 class="text-white">Buttons</h6>
                            </div>
                        </div>
                    </div>

                </div> --}}

            </div>
            <!-- End Container fluid  -->

            <!-- footer -->
            <!-- ============================================================== -->
            @include('admin.components.footer')

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('dash/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('dash/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dash/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('dash/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dash/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dash/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dash/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="dash/dist/js/pages/dashboards/dashboard1.js')}}"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('dash/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('dash/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('dash/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('dash/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('dash/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('dash/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('dash/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dash/dist/js/pages/chart/chart-page-init.js') }}"></script>
</body>

</html>
