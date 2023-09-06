<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ri-close-line fs-6 ri-menu-2-line"></i>
            </a>
            <!-- -------------------------------------------------------------- -->
            <!-- Logo -->
            <!-- -------------------------------------------------------------- -->
            <a class="navbar-brand" href="#">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{ asset('img/Logo.png') }}" alt="homepage" class="dark-logo" width="200" />
                    <!-- Light Logo icon -->
                    <img src="{{ asset('img/Logo_blanco.png') }}" alt="homepage" class="light-logo" width="200" />
                </b>
                <!--End Logo icon -->
            </a>
            <!-- -------------------------------------------------------------- -->
            <!-- End Logo -->
            <!-- -------------------------------------------------------------- -->
            <!-- -------------------------------------------------------------- -->
            <!-- Toggle which is visible on mobile only -->
            <!-- -------------------------------------------------------------- -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ri-more-line fs-6"></i></a>
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Logo -->
        <!-- -------------------------------------------------------------- -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- -------------------------------------------------------------- -->
            <!-- toggle and nav items -->
            <!-- -------------------------------------------------------------- -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                        data-sidebartype="mini-sidebar"><i data-feather="menu" class="feather-sm"></i></a>
                </li>
            </ul>
            <!-- -------------------------------------------------------------- -->
            <!-- Right side toggle and nav items -->
            <!-- -------------------------------------------------------------- -->
            <ul class="navbar-nav">
                <!-- -------------------------------------------------------------- -->
                <!-- create new -->
                <!-- -------------------------------------------------------------- -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animate-up"
                        aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#"><i class="me-2 flag-icon flag-icon-us"></i>
                            English</a>
                        <a class="dropdown-item" href="#"><i class="me-2 flag-icon flag-icon-fr"></i>
                            French</a>
                        <a class="dropdown-item" href="#"><i class="me-2 flag-icon flag-icon-es"></i>
                            Spanish</a>
                        <a class="dropdown-item" href="#"><i class="me-2 flag-icon flag-icon-de"></i>
                            German</a>
                    </div>
                </li>

                <!-- -------------------------------------------------------------- -->
                <!-- User profile and search -->
                <!-- -------------------------------------------------------------- -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/assets/images/users/1.jpg"
                            alt="user" class="rounded-circle" width="31" /></a>
                    <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                        <span class="with-arrow"><span class="bg-primary"></span></span>
                        <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                            <div class="">
                                <img src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/assets/images/users/1.jpg"
                                    alt="user" class="rounded-circle" width="60" />
                            </div>
                            <div class="ms-2">
                                <h4 class="mb-0">Steave Jobs</h4>
                                <p class="mb-0">varun@gmail.com</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="#"><i data-feather="user"
                                class="feather-sm text-info me-1 ms-1"></i> My
                            Profile</a>
                        <a class="dropdown-item" href="#"><i data-feather="credit-card"
                                class="feather-sm text-primary me-1 ms-1"></i> My
                            Balance</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"
                            href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                            {{ 'Logout' }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <!-- -------------------------------------------------------------- -->
                <!-- User profile and search -->
                <!-- -------------------------------------------------------------- -->
            </ul>
        </div>
    </nav>
</header>
