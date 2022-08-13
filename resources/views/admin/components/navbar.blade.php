<header class="topbar" data-navbarbg="skin4">
    <nav class="navbar top-navbar navbar-expand-md bg-light">
        <div class="navbar-header" data-logobg="skin4">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="/">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('img/logo.png') }}" alt="homepage"
                        width="120" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <h4 class="mt-2 ms-2 text-dark">Admin Panel</h4>

            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse d-flex justify-content-end">


                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="
            dropdown-toggle
            waves-effect waves

          "
                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('dash/assets/images/users/1.jpg') }}" alt="user" class=""
                            width="31" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                        aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i
                                                     class="fa fa-power-off me-1 ms-1"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </ul>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
