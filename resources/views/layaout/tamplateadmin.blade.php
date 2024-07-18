<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management,
     minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - {{ config('app_name', "I-Tech")  }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="{{ route('index') }}" class="logo">
                <img src="{{ asset("assets/img/logo.png")}}" width="40" height="40" alt="">
            </a>
        </div>
        <!-- /Logo -->

        <a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
        </a>

        <!-- Header Title -->
        <div class="page-title-box">
            <h3>Innovation tech</h3>
        </div>
        <!-- /Header Title -->

        <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

        <!-- Header Menu -->
        <ul class="nav user-menu">

            <!-- Search -->
            <li class="nav-item">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#">
                        <input class="form-control" type="text" placeholder="Search here">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
            <!-- /Search -->

            <!-- Flag -->
            <li class="nav-item dropdown has-arrow flag-nav">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                    <img src="{{ asset("assets/img/flags/us.png")}}" alt="" height="20"> <span>English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{asset("assets/img/flags/us.png")}}" alt="" height="16"> English
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{asset("assets/img/flags/fr.png")}}" alt="" height="16"> French
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{asset("assets/img/flags/es.png")}}" alt="" height="16"> Spanish
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{asset("assets/img/flags/de.png")}}" alt="" height="16"> German
                    </a>
                </div>
            </li>
            <!-- /Flag -->

            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar">
													<img alt="" src="{{asset("assets/img/profiles/avatar-02.jpg")}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">{{ Auth::user()->nom }}</span>
                                                added new task <span class="noti-title">
                                                    Patient appointment booking</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar">
													<img alt="" src="{{asset("assets/img/profiles/avatar-03.jpg")}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">Tarah Shropshire</span> changed the task name
                                                <span class="noti-title">Appointment booking with payment gateway</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar">
													<img alt="" src="{{asset("assets/img/profiles/avatar-06.jpg")}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">Misty Tison</span>
                                                added <span class="noti-title">Domenic Houston</span>
                                                and <span class="noti-title">Claire Mapes</span>
                                                to project
                                                <span class="noti-title">
                                                    Doctor available module
                                                </span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar">
													<img alt="" src="{{asset("assets/img/profiles/avatar-17.jpg")}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">Rolland Webber</span> completed task
                                                <span class="noti-title">Patient and Doctor video conferencing</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar">
													<img alt="" src="{{asset('assets/img/profiles/avatar-13.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">
                                                    Bernardo Galaviz
                                                </span>
                                                added new task
                                                <span class="noti-title">
                                                    Private chat module
                                                </span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">2 days ago</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- Message Notifications -->
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Messages</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="list-item">
                                        <div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset("assets/img/profiles/avatar-09.jpg")}}">
													</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="list-item">
                                        <div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset("assets/img/profiles/avatar-02.jpg")}}">
													</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">6 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="list-item">
                                        <div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset("assets/img/profiles/avatar-03.jpg")}}">
													</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">5 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="list-item">
                                        <div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset("assets/img/profiles/avatar-05.jpg")}}">
													</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">3 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href='#'>
                                    <div class="list-item">
                                        <div class="list-left">
													<span class="avatar">
														<img alt="" src="{{asset("assets/img/profiles/avatar-08.jpg")}}">
													</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">27 Feb</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">View all Messages</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <!-- /Message Notifications -->

            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="{{("assets/img/profiles/avatar-21.jpg")}}" alt="">
							<span class="status online"></span></span>
                    <span>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
        <!-- /Header Menu -->

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle"
               data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-dashboard">

                            </i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           @if(auth()->user()->id == 1)
                            <li><a class="active" href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                            @endif
                        </ul>
                    </li>

                    <li class="menu-title">
                        <span>Employees</span>
                    </li>
                    @if(auth()->user()->id == 1)
                    <li >

                        <a href="{{route('users.index')}}" class="la la-users"> <span> Utilisateurs</span> </a>
                    </li>
                    @endif


                    <li>
                        <a href="{{route('produits.create')}}">
                            <i class="la la-user-secret"></i> <span>Ajouter un Produit</span></a>
                    </li>
                    @if(auth()->user()->id == 1)
                    <li>
                        <a href="{{route('categories.index')}}"><i class="la la-ticket"></i> <span>Categories</span></a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid" id="container">
            @yield('container')

        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/app.js')}}"></script>

</body>
</html>
