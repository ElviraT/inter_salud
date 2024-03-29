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
                    <img src="{{ asset('img/Logo1.png') }}" alt="homepage" class="dark-logo" width="50" />
                    <!-- Light Logo icon -->
                    <img src="{{ asset('img/logo1.png') }}" alt="homepage" class="light-logo" width="50" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="{{ asset('img/Logo2.png') }}" alt="homepage" class="dark-logo" width="150" />
                    <!-- Light Logo text -->
                    <img src="{{ asset('img/Logo2.png') }}" class="light-logo" alt="homepage" width="150" />
                </span>
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
                        <span class="fi fi-es"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animate-up"
                        aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="{{ route('language', 'es') }}">
                            <span class="fi fi-es"></span>
                            {{ __('es.Spanish') }}</a>
                        <a class="dropdown-item" href="{{ route('language', 'en') }}">
                            <span class="fi fi-us"></span>
                            {{ __('es.English') }}</a>
                        <a class="dropdown-item" href="#">
                            <span class="fi fi-fr"></span>
                            {{ __('es.French') }}</a>
                        <a class="dropdown-item" href="#">
                            <span class="fi fi-de"></span>
                            {{ __('es.German') }}</a>
                    </div>
                </li>

                <!-- -------------------------------------------------------------- -->
                <!-- User profile and search -->
                <!-- -------------------------------------------------------------- -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            @if (isset($foto->Foto_Medico) && $foto->Foto_Medico == '') src="{{ 'avatars/' . str_replace('\\', '/', $foto->Foto_Medico) }}"  @else src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" @endif
                            alt="user" class="rounded-circle" width="31" /></a>
                    <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                        <span class="with-arrow"><span class="bg-primary"></span></span>
                        <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                            <div class="">
                                <img @if (isset($foto->Foto_Medico) && $foto->Foto_Medico == '') src="{{ 'avatars/' . str_replace('\\', '/', $foto->Foto_Medico) }}"  @else src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" @endif
                                    alt="user" class="rounded-circle" width="60" />
                            </div>
                            <div class="ms-2">
                                <h4 class="mb-0">{{ auth()->user()->name }}</h4>
                                <p class="mb-0">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="#"><i data-feather="user"
                                class="feather-sm text-info me-1 ms-1"></i> {{ __('es.My_Profile') }}</a>
                        <a class="dropdown-item" href="#"><i data-feather="credit-card"
                                class="feather-sm text-primary me-1 ms-1"></i> My
                            Balance</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"
                            href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                            {{ __('es.Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
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
