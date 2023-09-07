<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown mt-3">
                        <div class="user-pic">
                            <img @if (isset($foto->Foto_Medico) && $foto->Foto_Medico == '') src="{{ 'avatars/' . str_replace('\\', '/', $foto->Foto_Medico) }}"  @else src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" @endif
                                alt="users" class="rounded-circle" width="40" />
                        </div>
                        <div class="user-content hide-menu ms-2">
                            <a href="#" class="" id="Userdd" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 user-name font-medium">
                                    {{ auth()->user()->name }}
                                    <i data-feather="chevron-down" class="feather-sm"></i>
                                </h5>
                                <span class="op-5 user-email">{{ auth()->user()->email }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}"><i data-feather="user"
                                        class="feather-sm text-info me-1"></i> {{ __('es.My_Profile') }}</a>
                                <a class="dropdown-item" href="#"><i data-feather="credit-card"
                                        class="feather-sm text-primary me-1"></i> My
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
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <!-- User Profile-->
                <li class="sidebar-item {{ @request()->routeIs('dashboard') ? 'active' : ' ' }}">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">{{ 'Dashboard' }}</span></a>
                </li>
                <li class="nav-small-cap">
                    <i data-feather="more-horizontal" class="feather-icon"></i>
                    <span class="hide-menu">{{ __('menu.Configuration') }}</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">{{ __('menu.Sistem') }}
                        </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        @can('role-list')
                            <li class="sidebar-item {{ @request()->routeIs('roles*') ? 'active' : ' ' }}">
                                <a href="{{ route('roles.index') }}" class="sidebar-link"><i
                                        class="mdi mdi-view-quilt"></i><span class="hide-menu">
                                        {{ __('menu.Role') }} </span></a>
                            </li>
                        @endcan
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/sidebar-type-iconsidebar.html"
                                class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu">
                                    Icon Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/sidebar-type-overlaysidebar.html"
                                class="sidebar-link"><i class="mdi mdi-view-day"></i><span class="hide-menu"> Overlay
                                    Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/sidebar-type-fullsidebar.html"
                                class="sidebar-link"><i class="mdi mdi-view-array"></i><span class="hide-menu"> Full
                                    Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/sidebar-type-horizontalsidebar.html"
                                class="sidebar-link"><i class="mdi mdi-view-module"></i><span class="hide-menu">
                                    Horizontal Sidebar </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            data-feather="clipboard" class="feather-icon"></i><span class="hide-menu">Page Layouts
                        </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/layout-inner-fixed-left-sidebar.html"
                                class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">
                                    Inner Fixed Left Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/layout-inner-fixed-right-sidebar.html"
                                class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span
                                    class="hide-menu"> Inner Fixed Right Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/layout-inner-left-sidebar.html"
                                class="sidebar-link"><i class="mdi mdi-format-float-left"></i><span
                                    class="hide-menu"> Inner Left Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/layout-inner-right-sidebar.html"
                                class="sidebar-link"><i class="mdi mdi-format-float-right"></i><span
                                    class="hide-menu"> Inner Right Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/page-layout-fixed-header.html"
                                class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> Fixed
                                    Header </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/page-layout-fixed-sidebar.html"
                                class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu">
                                    Fixed Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/page-layout-fixed-header-sidebar.html"
                                class="sidebar-link"><i class="mdi mdi-view-column"></i><span class="hide-menu">
                                    Fixed Header &amp; Sidebar </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/page-layout-boxed-layout.html"
                                class="sidebar-link"><i class="mdi mdi-view-carousel"></i><span class="hide-menu">
                                    Box Layout </span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Apps</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/app-chats.html"
                        aria-expanded="false"><i data-feather="message-circle" class="feather-icon"></i><span
                            class="hide-menu">Chat Apps</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/app-todo.html"
                        aria-expanded="false"><i data-feather="check-circle" class="feather-icon"></i><span
                            class="hide-menu">Todo</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/app-calendar.html"
                        aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                            class="hide-menu">Calendar</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/app-taskboard.html"
                        aria-expanded="false"><i data-feather="layout" class="feather-icon"></i><span
                            class="hide-menu">Taskboard</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/app-contacts.html"
                        aria-expanded="false"><i data-feather="phone" class="feather-icon"></i><span
                            class="hide-menu">Contact</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/app-notes.html"
                        aria-expanded="false"><i data-feather="book" class="feather-icon"></i><span
                            class="hide-menu">Notes</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/app-invoice.html"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Invoice</span></a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            data-feather="mail" class="feather-icon"></i><span class="hide-menu">Inbox </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/inbox-email.html"
                                class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Email
                                </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/inbox-email-detail.html"
                                class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu">
                                    Email Detail </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/inbox-email-compose.html"
                                class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu">
                                    Email Compose </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                            data-feather="bookmark" class="feather-icon"></i><span class="hide-menu">Ticket
                        </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/ticket-list.html"
                                class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">
                                    Ticket List </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/xtreme-bootstrap/package/html/ltr/ticket-detail.html"
                                class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Ticket
                                    Detail </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="dropdown-item"
                        href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                        {{ __('es.Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
