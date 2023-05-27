<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
    <meta name="author" content="Bdtask">
    <title>Al Ummah Health Care Foundation - Admin Dashboard</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/icon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/icon.png')}}" type="image/x-icon">


    <!--Global Styles(used by all pages)-->
    <link href="{{asset('assets1/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/plugins/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/plugins/fontawesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/plugins/typicons/src/typicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/plugins/themify-icons/themify-icons.min.css')}}" rel="stylesheet">
    <!--Third party Styles(used by this page)-->
    <link href="{{asset('assets1/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <script type="text/javascript" src="http://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    @yield('link')
    <!--Start Your Custom Style Now-->
    <link href="{{asset('assets1/dist/css/style.css')}}" rel="stylesheet">
</head>
<body class="fixed">
    <!-- Page Loader -->
    {{-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Green Brain Hub Loading...</p>
        </div>
    </div> --}}
    <!-- #END# Page Loader -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav class="sidebar sidebar-bunker">
            <!--/.sidebar header-->
            <div class="profile-element d-flex align-items-center flex-shrink-0">

                <div class="profile-text">
                    <h6>{{Auth::User()->username}}</h6>
                    <span><a class="__cf_email__">{{Auth::User()->email}}</a></span>
                </div>
            </div>

            <!--/.search-->
            <div class="sidebar-body">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li class="nav-label mm-active">Main Menu</li>
                        <li><a href="{{route('admin.viewalbum')}}"><i class="typcn typcn-social-instagram mr-2"></i>Manage Album</a></li>
                        <li><a href="{{route('admin.viewsetting')}}"><i class="typcn typcn-puzzle mr-2"></i>Manage Website</a></li>
                        <li><a href="{{route('admin.viewtestimonial')}}"><i class="typcn typcn-scissors mr-2"></i>Manage Testimonials</a></li>
                        <li><a href="{{route('admin.viewblog')}}"><i class="typcn typcn-news mr-2"></i>Manage Blogs</a></li>
                        <li><a href="{{route('admin.viewevent')}}"><i class="typcn typcn-calendar mr-2"></i>Manage Events</a></li>
                        <li><a href="{{route('admin.viewstaff')}}"><i class="typcn typcn-user mr-2"></i>Manage Staff</a></li>
                        <li><a href="{{route('admin.viewmessage')}}"><i class="typcn typcn-user mr-2"></i>Manage Messages</a></li>
                        <li><a href="{{route('admin.viewvolunteer')}}"><i class="typcn typcn-user mr-2"></i>Manage Volunteers</a></li>
                        <li><a href="{{route('admin.viewresource')}}"><i class="typcn typcn-user mr-2"></i>Manage Resource</a></li>
                    </ul>
                </nav>
            </div><!-- sidebar-body -->
        </nav>
        <!-- Page Content  -->
        <div class="content-wrapper">
            <div class="main-content">
                <nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
                    <div class="sidebar-toggle-icon" id="sidebarCollapse">
                        sidebar toggle<span></span>
                    </div>
                    <!--/.sidebar toggle icon-->
                    <div class="d-flex flex-grow-1">
                        <ul class="navbar-nav flex-row align-items-center ml-auto">


                            <!--/.dropdown-->
                            <li class="nav-item dropdown user-menu">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <!--<img src="assets/dist/img/user2-160x160.png" alt="">-->
                                    <i class="typcn typcn-user-add-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header d-sm-none">
                                        <a href="#" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                    </div>
                                    <div class="user-header">
                                        <div class="img-user">
                                            @if(Auth::user()->image == '')
                                            <img src="{{asset('assets/images/user.png')}}" alt="people" />
                                            @else
                                            <img src="{{asset('storage/'.str_replace('public/','', Auth::user()->image))}}" alt="people" />
                                            @endif

                                        </div><!-- img-user -->
                                        <h6>{{Auth::User()->username}}</h6>
                                        <span><a class="__cf_email__">{{Auth::User()->email}}</a></span>

                                    </div><!-- user-header -->
                                    <a href="{{route('admin.viewprofile')}}" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item"><i class="typcn typcn-key-outline"></i> Sign Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                                <!--/.dropdown-menu -->
                            </li>
                        </ul>
                        <!--/.navbar nav-->
                        <div class="nav-clock">
                            <div class="time">
                                <span class="time-hours"></span>
                                <span class="time-min"></span>
                                <span class="time-sec"></span>
                            </div>
                        </div><!-- nav-clock -->
                    </div>
                </nav>
                <!--/.navbar-->

                @yield('content')





                <footer class="footer-content">
                    <div class="footer-text d-flex align-items-center justify-content-between">
                        <div class="copy">© 2021 Designed by Sarutech</div>
                    </div>
                </footer>
                <!--/.footer content-->
                <div class="overlay"></div>
            </div>
            <!--/.wrapper-->
        </div>


        <script src="{{asset('assets1/plugins/jQuery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('assets1/dist/js/popper.min.js')}}"></script>
        <script src="{{asset('assets1/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets1/plugins/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets1/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <!-- Third Party Sc1ripts(used by this page)-->
        <script src="{{asset('assets1/plugins/chartJs/Chart.min.js')}}"></script>
        <script src="{{asset('assets1/plugins/sparkline/sparkline.min.js')}}"></script>
        <script src="{{asset('assets1/plugins/datatables/dataTables.min.js')}}"></script>
        <script src="{{asset('assets1/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!--Page Active Scr1ipts(used by this page)-->
        @yield('script')
        <script src="{{asset('assets1/dist/js/pages/dashboard.js')}}"></script>
        <!--Page Scri'pts(used by all page)-->
        <script src="{{asset('assets1/dist/js/sidebar.js')}}"></script>
</body>

</html>