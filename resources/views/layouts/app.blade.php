<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="VANNO - Premium directory consumer reviews and listings template by Ansonika">
    <meta name="author" content="Ansonika">
    <title>VANNO | Premium directory consumer reviews and listings template by Ansonika.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">


    <!-- BASE CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
</head>

<body>

    <div id="page">

        <header class="header_in is_fixed menu_fixed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="logo">
                            <a href="index.html">
                                <img src="img/logo_sticky.svg" width="140" height="35" alt="" class="logo_sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <ul id="top_menu">
                            <li><a href="{{route('customer.createreview')}}" class="btn_top">Write a Review</a></li>
                            @if (Auth::user())
                            <li>
                                <div class="dropdown dropdown-user">
                                    <a href="#0" class="logged" data-toggle="dropdown"><img src="{{asset('assets/img/avatar4.jpg')}}" alt=""></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="">My Reviews</a></li>
                                            <li><a href="user-settings.html">My Settings</a></li>
                                            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> Sign Out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li><a href="companies-landing.html" class="btn_top company">For Companies</a></li>
                            <li><a href="/login" class="login" title="Sign In">Sign In</a></li>
                            @endif
                        </ul>
                        <!-- /top_menu -->
                        <a href="#menu" class="btn_mobile">
                            <div class="hamburger hamburger--spin" id="hamburger">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                        </a>
                        <nav id="menu" class="main-menu">
                            <ul>

                                <li><span><a href="#0">Sectors</a></span>
                                    <ul>
                                        @foreach($cats as $category)
                                        @if($category->has('subcategories'))
                                        <li><span><a href="javascript:void(0);">{{ $category->name }}</a></span>
                                            <ul>
                                                @foreach($category->subcategories as $subcategory)
                                                <li><a href="#">{{$subcategory->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @else
                                        <li><a href="#">{{ $category->name }}</a></li>
                                        @endif

                                        @endforeach
                                    </ul>
                                </li>
                                <li class="d-block d-sm-none"><span><a href="#0" class="btn_top">Write a review</a></span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </header>
        <!-- /header -->
        @yield('content')
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
                            <h3>Quick Links</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_1">
                            <ul class="links">
                                <li><a href="#0">About us</a></li>
                                <li><a href="#0">Faq</a></li>
                                <li><a href="#0">Help</a></li>
                                <li><a href="/login">My account</a></li>
                                <li><a href="/register">Create account</a></li>
                                <li><a href="#0">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
                            <h3>Sectors</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_2">
                            <ul class="links">
                                @foreach($cats as $cat)
                                <li><a href="#0">{{$cat->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
                            <h3>Contacts</h3>
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </a>
                        <div class="collapse show" id="collapse_ft_3">
                            <ul class="contacts">
                                <li><i class="ti-home"></i>{{$setting->address}}</li>
                                <li><i class="ti-headphone-alt"></i>{{$setting->phone}}</li>
                                <li><i class="ti-email"></i><a href="#0">{{$setting->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
                            <div class="circle-plus closed">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                            <h3>Keep in touch</h3>
                        </a>
                        <div class="collapse show" id="collapse_ft_4">
                            <div id="newsletter">
                                <div id="message-newsletter"></div>
                                <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                    <div class="form-group">
                                        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                        <input type="submit" value="Submit" id="submit-newsletter">
                                    </div>
                                </form>
                            </div>
                            <div class="follow_us">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a href="{{$setting->fb}}" target="blank"><i class="ti-facebook"></i></a></li>
                                    <li><a href="{{$setting->twitter}}" target="blank"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="{{$setting->instagram}}" target="blank"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <ul id="footer-selector">
                            <li>
                                <div class="styled-select" id="lang-selector">
                                    <select>
                                        <option value="English" selected>English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul id="additional_links">
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                            <li><span>© 2018 Vanno</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <!-- Sign In Popup -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Sign In</h3>
        </div>
        <form>
            <div class="sign-in-wrapper">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <div class="divider"><span>Or</span></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                </div>
                <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
                <div class="text-center">
                    Don’t have an account? <a href="register.html">Sign up</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Popup -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- COMMON SCRIPTS -->

    <script src="{{asset('assets/js/common_scripts.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
    <script src="{{asset('assets/assets/validate.js')}}"></script>
</body>
</html>