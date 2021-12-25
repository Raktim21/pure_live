<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/bootstrap.css')}}">
    <title>Admin Panel</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard_assets/images/dash-logo-color.png') }}">
    <link href="{{ asset('dashboard_assets/css/icon.css') }}" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/vendors/vendors.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/themes/dashboard.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/themes/style.min.css') }}">
    <!-- BEGIN: Style CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/css/style.css') }}">
</head>
<!-- END: Head-->

<body>
    <!-- preloader start -->
    <div class="preloader">
        <div class="box"></div>
        <div class="box2"></div>
    </div>

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed p-0">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light shadow">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                        <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Enter Text"
                            data-search="template-list">
                        <ul class="search-list collection display-none"></ul>
                    </div>
                    <ul class="navbar-list right">
                        <li class="hide-on-med-and-down">
                            <a class="waves-effect waves-block waves-light toggle-fullscreen"
                                href="javascript:void(0);">
                                <i class="material-icons">settings_overscan</i>
                            </a>
                        </li>
                        <li class="hide-on-large-only search-input-wrapper">
                            <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i
                                    class="material-icons">search</i>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-block waves-light notification-button"
                                href="javascript:void(0);" data-target="notifications-dropdown">
                                <i class="material-icons">notifications_none<small
                                        class="notification-badge">5</small></i></a>
                        </li>
                        <li>
                            <a class="waves-effect waves-block waves-light profile-button" href="profile.html"
                                data-target="profile-dropdown">
                                <span><b>Admin</b></span>
                                <span class="avatar-status avatar-online">
                                    <img src="./images/admin-avatar.png" alt="avatar"><i></i>
                                </span>
                            </a>
                        </li>
                    </ul>

                    <!-- notifications-dropdown-->
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li>
                            <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!">
                                <img src="images/user/2.jpg" alt="img1" class="border-rounded" width="40" height="40">
                                <span class="not-dp-p"><b>Congratulation Sam 🎉 </b> winner!</span>
                                <br><small class="notification-text"> Won the monthlybest seller badge.</small>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!">
                                <img src="images/user/7.jpg" alt="img1" class="border-rounded" width="40" height="40">
                                <span class="not-dp-p"><b>New Message</b> Recived</span>
                                <br><small class="notification-text"> You have 10 unread message</small>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!">
                                <img src="images/user/4.jpg" alt="img1" class="border-rounded" width="40" height="40">
                                <span class="not-dp-p"><b>Revised Order 👋</b> Checkout</span>
                                <br><small class="notification-text"> MD Inc. order updated</small>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!">
                                <img src="images/user/9.jpg" alt="img1" class="border-rounded" width="40" height="40">
                                <span class="not-dp-p"><b>MD Inc. order updated</b>winner!</span>
                                <br><small class="notification-text"> Won the monthlybest seller badge.</small>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!">
                                <img src="images/user/10.jpg" alt="img1" class="border-rounded" width="40" height="40">
                                <span class="not-dp-p"><b>Server down</b> registered</span>
                                <br><small class="notification-text"> USA Server is down due to hight CPU usage.</small>
                            </a>
                        </li>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li>
                            <a class="grey-text text-darken-1" href="profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user mr-50">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="menu-title-nav">Profile</span>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="grey-text text-darken-1" href="{{ route('logout') }}"onclick="event.preventDefault();this.closest('form').submit();">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-power mr-50">
                                        <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                        <line x1="12" y1="2" x2="12" y2="12"></line>
                                    </svg> --}}
                                
                                    <span class="menu-title-nav">Logout</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required="" id="search"
                                    placeholder="Explore Materialize" data-search="template-list">
                                <label class="label-icon" for="search"><i
                                        class="material-icons search-sm-icon">search</i></label><i
                                    class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection search-list-sm display-none"></ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->

    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper">
                <a class="brand-logo darken-1" href="dashboard.html">
                    <img class="hide-on-med-and-down " src="{{ asset('dashboard_assets/images/dash-logo-color.png') }}"
                        alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">SoClose</span>
                </a>
                <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
            </h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
            data-menu="menu-navigation" data-collapsible="accordion">
            <li class="navigation-header">
                <a class="navigation-header-text">Public View</a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>

            <li class="bold">
                <a class="waves-effect waves-cyan " href="public/index.html" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span class="menu-title">View Website</span>
                </a>
            </li>

            <li class="navigation-header">
                <a class="navigation-header-text"> Apps & Pages </a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="active bold">
                <a class="waves-effect waves-cyan @yield('dashboard')" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-flag">
                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                        <line x1="4" y1="22" x2="4" y2="15"></line>
                    </svg>
                    <span class="menu-title" data-i18n="Banners">Banners</span>
                </a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li>
                            <a href="banner.html">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="List">List</span>
                            </a>
                        </li>
                        <li>
                            <a href="banner-create.html" class="">
                                <i class="material-icons">radio_button_unchecked</i>
                                <span data-i18n="Create">Create</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            {{-- <li class="bold">
          <a class="waves-effect waves-cyan" href="./about.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
            <span class="menu-title">About</span>
          </a>
        </li> --}}

        </ul>
        <div class="navigation-background"></div><a
            class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
            href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->


    <!-- Banner main section -->
    <section class="banner-main-section py-5" id="main">
        <div class="row">
            @yield('breadcome')
        </div>

        <div class="container">
            @yield('main')
        </div>
    </section>

    <!-- BEGIN: Footer-->
    <footer class="page-footer footer footer-static footer-light navbar-shadow">
        <div class="footer-copyright">
            <div class="container">
                <span>COPYRIGHT © 2021 <a href="#"> SoClose, </a> All rights reserved.</span>
                <span class="right hide-on-small-only">Design by <a href="#">WebAbdullah</a>
                </span>
            </div>
        </div>
    </footer>
    <!-- END: Footer-->

    <script src="{{ asset('dashboard_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/popper.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('dashboard_assets/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGES  JS-->
    <script src="{{ asset('dashboard_assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/js/search.min.js') }}"></script>

</body>

</html>