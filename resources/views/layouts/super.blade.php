<!DOCTYPE html>
<html>

<head>
    {{-- <base href="#"> --}}
    <meta charset="utf-8">
    <meta name="author" content="Xcrowfx">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="Solar Panel, Inverter, Sales of Solar Panel, Inverters, Light Emitting Diodes, Batteries, Solar chargers, Installation of solar Panels, Satlex Nigeria Limited">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>Satlex Nigeria Limited</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('super-assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('super-assets/css/theme.css?ver=2.2.0')}}">
</head>
<!-- main header @e -->
<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{asset('assets/images/logo-dark.png')}}" alt="logo">
                            <img class="logo-dark logo-img" src="{{asset('assets/images/logo-dark.png')}}" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{ route('super.dashboard') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cart-fill"></em></span>
                                        <span class="nk-menu-text">Manage Products</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('super.viewcat') }}" class="nk-menu-link"><span class="nk-menu-text">Category</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('super.viewsubcat') }}" class="nk-menu-link"><span class="nk-menu-text">Sub Category</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('super.viewproduct') }}" class="nk-menu-link"><span class="nk-menu-text">Product</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('super.viewservice') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Manage Services</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('super.viewtestimonial') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cc-secure-fill"></em></span>
                                        <span class="nk-menu-text">Manage Testimonials</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('super.viewproject') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-cc-new"></em></span>
                                        <span class="nk-menu-text">Manage Projects</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('super.viewbanner') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-truck"></em></span>
                                        <span class="nk-menu-text">Manage Banner</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('super.viewuser',['type'=>'user']) }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                                        <span class="nk-menu-text">Manage Users</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('super.viewmessage') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Messages</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('super.setting') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Website Settings</span>
                                    </a>
                                </li><!-- .nk-menu-item -->

                                <li class="nk-menu-item">
                                    <a href="#" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                                        <span class="nk-menu-text">Logout</span>
                                    </a>
                                </li>
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="" class="logo-link">
                                    <img class="logo-light logo-img" src="{{asset('./images/logo.png')}}" alt="logo">
                                    <img class="logo-dark logo-img" src="{{asset('./images/logo-dark.png')}}" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            {{-- <div class="nk-header-search ml-3 ml-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                            </div> --}}<!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    {{-- <li class="dropdown chats-dropdown hide-mb-xs">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                                <a href="#">Setting</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item">
                                                        <a class="chat-link" href="html/apps-chats.html">
                                                            <div class="chat-media user-avatar">
                                                                <span>IH</span>
                                                                <span class="status dot dot-lg dot-gray"></span>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div>
                                                                    <span class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                                    <div class="status delivered">
                                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li><!-- .chat-item -->
                                                </ul><!-- .chat-list -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="html/apps-chats.html">View All</a>
                                            </div>
                                        </div>
                                    </li> --}}
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-name dropdown-indicator">{{Auth::user()->full_name}}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        @if(Auth::user()->image =='')
                                                        <em class="icon ni ni-user-alt"></em>
                                                        @else
                                                        <img src="{{asset('storage/'.str_replace('public/','', Auth::user()->image))}}" alt="" class="thumb">
                                                        @endif

                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{Auth::user()->full_name}}</span>
                                                        <span class="sub-text">{{Auth::user()->email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('super.viewprofile', ['id'=> Auth::user()->id])}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                @yield('content')
                <!-- footer @s -->
                <div class="nk-footer nk-footer-fluid bg-lighter">
                    <div class="container-xl wide-lg">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2021 Satlex Nigeria Limited. Designed by <a target="blank" href="https://sarutech.com/">Saru Tech</a>
                            </div>
                            {{-- <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
        </div>
        <script src="{{asset('assets1/plugins/jQuery/jquery-3.4.1.min.js')}}"></script>
        @yield('script')
        <script src="{{asset('super-assets/js/bundle.js?ver=2.2.0')}}"></script>
        <script src="{{asset('super-assets/js/scripts.js?ver=2.2.0')}}"></script>
        <script src="{{asset('super-assets/js/charts/chart-ecommerce.js?ver=2.2.0')}}"></script>


</body>

</html>