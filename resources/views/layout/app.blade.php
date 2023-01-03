<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Shiv Shakti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('public/admin_assets') }}/images/favicon.ico">
    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{ url('public/admin_assets') }}/vendor/daterangepicker/daterangepicker.css">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{ url('public/admin_assets') }}/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme Config Js -->
    <script src="{{ url('public/admin_assets') }}/js/hyper-config.js"></script>
    <!-- App css -->
    <link href="{{ url('public/admin_assets') }}/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link href="{{ url('public/admin_assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />
   <style>
        .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #727cf5;
}

input:focus + .slider {
  box-shadow: 0 0 1px #727cf5;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


        .error
        {
            color: red;
            font-size: 12px;
        }
        @media only screen and (max-width: 600px)
        {
            #DataTables_Table_0_wrapper
            {
                width: 100%;
                overflow: scroll;
            }
            #DataTables_Table_0_length
            {
                width: 10%;
                float: left;
            }
            #DataTables_Table_0_filter
            {
                width: 30%;
                float: left;
                padding-left: 100%;
            }
            .col-sm-12
            {
                float: left;
                width: 25%;
            }
        }
        
    </style>
</head>
</head>
<body>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom topnav-navbar">
                <div class="container-fluid detached-nav">

                    <!-- Topbar Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="{{ url('public/admin_assets') }}/images/logo.png" alt="logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ url('public/admin_assets') }}/images/logo-sm.png" alt="small logo" height="22">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="{{ url('public/admin_assets') }}/images/logo-dark.png" alt="dark logo" height="22">
                            </span>
                            <span class="logo-sm">
                                <img src="{{ url('public/admin_assets') }}/images/logo-dark-sm.png" alt="small logo" height="22">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>

                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-search-line noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ url('public/admin_assets') }}/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12"> 
                                <span class="align-middle d-none d-lg-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ url('public/admin_assets') }}/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ url('public/admin_assets') }}/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ url('public/admin_assets') }}/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ url('public/admin_assets') }}/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-notification-3-line noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-3" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->
                        
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="{{ url('public/admin_assets') }}/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="{{ url('public/admin_assets') }}/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-apps-2-line noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ url('public/admin_assets') }}/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ url('public/admin_assets') }}/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ url('public/admin_assets') }}/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ url('public/admin_assets') }}/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ url('public/admin_assets') }}/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{ url('public/admin_assets') }}/images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>

                            </div>
                        </li>

                        <li class="notification-list d-none d-sm-inline-block">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                                <i class="ri-settings-3-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="notification-list d-none d-sm-inline-block">
                            <a class="nav-link" href="javascript:void(0)" id="light-dark-mode">
                                <i class="ri-moon-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="notification-list d-none d-md-inline-block">
                            <a class="nav-link" href="#" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="{{ url('public/admin_assets') }}/images/users/demo.png" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name" style="margin-top: 8px;">Shiv Shakti Team</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('logout') }}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <!-- Topbar Search Form -->
                    <div class="app-search dropdown">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="{{ url('public/admin_assets') }}/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="{{ url('public/admin_assets') }}/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Logo Light -->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ url('public/admin_assets') }}/images/logo.png" alt="logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ url('public/admin_assets') }}/images/logo-sm.png" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{ url('public/admin_assets') }}/images/logo-dark.png" alt="dark logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ url('public/admin_assets') }}/images/logo-dark-sm.png" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </button>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="{{ url('public/admin_assets') }}/images/users/avatar-1.jpg" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="{{ url('admin/dashboard') }}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboards </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="{{ url('admin/donnors') }}" aria-expanded="false"
                                aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class=" ri-user-3-line" aria-hidden="true"></i>
                                <span> Donnor </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a  href="#sidebarThirdLevel" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class=" ri-shield-user-fill" aria-hidden="true"></i>
                                <span>  Subscriptions  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarThirdLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="{{ url('admin/subscription/add-subscription') }}">Add Subscription</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/subscription/view-subscription') }}">View Subscription</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a  href="#sidebarFourthLevel" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="ri-settings-3-line noti-icon"></i>
                                <span> App Setting  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarFourthLevel">
                                <ul class="side-nav-third-level">
                                    <li>
                                        <a href="{{ url('admin/app-setting/manage-slider') }}">Manage Slider</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/app-setting/manage-services') }}">Manage Services</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/app-setting/manage-notification') }}">Manage Notifications</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!--- End Sidemenu -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->

<div class="content-page">
<div class="content">
    <div class="container-fluid">
        @yield('contant')  
    </div>
</div>
</div>

<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>document.write(new Date().getFullYear())</script> © Design and Devloped by MyProject HD
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-md-block">
                    <a href="javascript: void(0);">About</a>
                    <a href="javascript: void(0);">Support</a>
                    <a href="javascript: void(0);">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->


<!-- Vendor js -->
<script src="{{ url('public/admin_assets') }}/js/vendor.min.js"></script>

<!-- Daterangepicker js -->
<script src="{{ url('public/admin_assets') }}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{ url('public/admin_assets') }}/vendor/daterangepicker/daterangepicker.js"></script>


<!-- Vector Map js -->
<script src="{{ url('public/admin_assets') }}/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ url('public/admin_assets') }}/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- App js -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('public/admin_assets') }}/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  
<script src="{{ url('public/admin_assets') }}/custom_js/validation.js"></script>
<script>
    $(document).ready(function(){
        var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('data') }}",
        columns: [
            {data: 'user_id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'mobile_number', name: 'mobile_number'},
            {data: 'address', name: 'address'},
            {data: 'city', name: 'city'},
            {data: 'pin_code', name: 'pin_code'},
            {data: 'pan_number', name: 'pan_number'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        });
        var table = $('.sub-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('sub-data') }}",
        columns: [
            {data: 'donnors', name: 'donnors'},
            {data: 'amount', name: 'amount'},
            {data: 'duration_number', name: 'duration_number'},
            {data: 'duration', name: 'duration'},
            {data: 'emi', name: 'emi'}
        ]
        });
        var table = $('.getData').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('getdataSlider') }}",
        columns: 
        [
            {
                data: 'image',
                name: 'image',
                render: function(data, type, full, meta){
                    return "<span class='logo-lg'><img src='{{ url('public/slider_images/')}}/"+ data + "' width='100px' alt='slider image'></span>"
                }
            },
            {data: 'title', name: 'title', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        });
        var table = $('.noti_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('getData') }}",
        columns: [
            {data: 'title', name: 'title'},
            {data: 'description', name: 'description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        });  
         $(document).on('click','.check',function(){ 
            var id = $('.id').val();
            alert(id);
        //     $.post('php/detail.php',data,function(resp){
        //         if (resp==1)   
        //         {
        //           window.location.reload();
        //         }
        //    });  
            
            // $(this).change(function() {
    		// if(this.checked) 
			// {
            //     var data=new FormData($(this)[0]);
            //     $.ajax({
            //         type:'POST',
            //         url: '{{ url("StatusChange") }}',
            //         data: data,
            //         contentType:false,
            //         processData:false,
            //         success:function(resp)
            //         {
            //             //window.location = "{{ url('admin/app-setting/manage-slider') }}";
            //         } 
            //     });
    		// }
            // else
            // {
            //     var data=new FormData($(this)[0]);
            //     $.ajax({
            //         type:'POST',
            //         url: '{{ url("StatusChange") }}',
            //         data: data,
            //         contentType:false,
            //         processData:false,
            //         success:function(resp)
            //         {
            //             console.log(resp)
            //             //window.location = "{{ url('admin/app-setting/manage-slider') }}";
            //         } 
            //     });
            // }
		// });
         })  
    });
    $(document).on('click','#editBtn',function(){
        var id = $(this).attr("data-id");
        var name = $(this).attr("data-name");
        var email = $(this).attr("data-email");
        var mobile_number = $(this).attr("data-mobile_number");
        var address = $(this).attr("data-address");
        var city = $(this).attr("data-city");
        var pin_code = $(this).attr("data-pin_code");
        var pan_number = $(this).attr("data-pan_number");
        $('#edit-modal').modal('show');
        $('#edit_id').val(id);
        $('#edit_name').val(name);
        $('#edit_email').val(email);
        $('#edit_mobile_number').val(mobile_number);
        $('#edit_address').val(address);
        $('#edit_city').val(city);
        $('#edit_pin_code').val(pin_code);
        $('#edit_pan_number').val(pan_number);
    });
    $(document).on('click','#delete_btn',function(){
        var id = $(this).attr('data-id');
        $('#id').val(id);
        var url = "{{ url('delete/') }}/"+id;
        $('#con_delete').attr("href",url);
    });
    $(document).on('click','#edit_slider_Btn',function(){
        var id = $(this).attr("data-id");
        var title = $(this).attr("data-title");
        var image = $(this).attr("data-image");
        $('#edit-slider').modal('show');
        $('#edit_id').val(id);
        $('#edit_title').val(title);
        $('#edit_image').val(image);
    });
    $(document).on("click","#submit",function(){
        var image = $('#image').val();
        if(image == '')
        {
            $("#image_error").html("* The Field is Required")
            setTimeout(function(){
                $("#image_error").html("")
            }, 3000);
        }
        
    });
    $(document).on('click','#submit',function(){
        var title = $('#title').val();
        var desc = $('#description').val();
        if(title == '')
        {
            $("#title_error").html("* The Field is Required")
            setTimeout(function(){
                $("#title_error").html("")
            }, 3000);
        }
        if(desc == '')
        {
            $("#description_error").html("* The Field is Required")
            setTimeout(function(){
                $("#description_error").html("")
            }, 3000);
        }
    })
    $(document).on('submit','.database_operation_form',function(){
        var url=$(this).attr('action');
        var data=new FormData($(this)[0]);
        var popup=$(this).attr('data-pop');
        $.ajax({
            type:'POST',
            url:url,
            data:data,
            contentType:false,
            processData:false,
            success:function(resp)
            { 
                if(resp == 1)
                {
                    window.location="{{ url('admin/subscription/view-subscription') }}";
                }
                else if(resp == 2)
                {
                    window.location="{{ url('admin/donnors') }}";
                }
                else if(resp == 3)
                {   
                    window.location="{{ url('admin/app-setting/manage-slider') }}";
                }
                else if(resp == 'notification saved')
                {
                    window.location="{{ url('admin/app-setting/manage-notification') }}";
                }
            }


        });
        return false;
    });
</script>
</body>
</html>