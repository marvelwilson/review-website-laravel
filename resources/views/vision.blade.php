@extends('layouts.app')
@section('content')
<!--Inner Header Start-->
<section class="wf100 p100 inner-header why-ecova">
    <div class="container">
        <h1>About Satlex</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us </a></li>
            <li><a href="#">Our Vision & Mission</a></li>
        </ul>
    </div>
</section>
<!--Inner Header End-->
<!--About Start-->
<section class="h3-about wf100 p80">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="h3-aboutxt">
                    <h1><span>OUR VISION</span></h1>
                    <p> To Become A Major Player In The Provision, Installation And First-Class After-Sale-Services Of Affordable, Reliable, Durable, And Sustainable World-Class Assortments Of Power-Solution-Products That Will Meet The Need Of Every Sector Of The Nigerian Economy In The First Instance, And Then Throughout The Continent Of Africa.</p>

                </div>
            </div>
            <div class="col-md-6"> <img src="{{asset('assets/images/h3about.png')}}" alt=""> </div>
        </div>
    </div>
</section>
<section class="wf100 about">
    <!--About Txt Video Start-->
    <div class="about-video-section wf100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-video-img"> <a href="#"><i class="fas fa-play"></i></a> <img src="{{asset('assets/images/aboutimg.jpg')}}" alt=""> </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h1><span>OUR MISSION</span></h1>
                        <p>Especially Against The Background That The Public Power / Electricity Supply In Nigeria (NEPA) Is Very Poor, Unreliable And Not Able To Satisfy Electricity Consumers: Our Mission Is To Provide Affordable, Reliable And Sustainable Alternative Power / Electricity Supply To Nigerians, Especially Through Renewable Energy Sources. We Achieve This Through The Sale, Supply And Installation Of Technologically Advanced And Top-Quality Power And Energy Products, Which We Back Up With First-Class After-Sale-Services, In Order To Keep Our Customers Satisfied. While Doing So, We Ensure That Our Employees Are Motivated In Terms Of Overall Work Reward, And Our Shareholders Get Adequate Reward In Terms Of Good Returns On Their Investments. We Ensure That We Are Socially Responsible And Environmentally Conscious In Such A Way That Every Stakeholder Is Affected Positively.</p>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About Txt Video End-->


    <!--Partner Logos Section Start-->
    <div class="partner-logos wf100">
        <div class="container">
            <div id="partner-logos" class="owl-carousel owl-theme">
                <div class="item"><img src="images/plogo1.png" alt=""></div>
                <div class="item"><img src="images/plogo2.png" alt=""></div>
                <div class="item"><img src="images/plogo3.png" alt=""></div>
                <div class="item"><img src="images/plogo4.png" alt=""></div>
                <div class="item"><img src="images/plogo5.png" alt=""></div>
                <div class="item"><img src="images/plogo1.png" alt=""></div>
                <div class="item"><img src="images/plogo2.png" alt=""></div>
                <div class="item"><img src="images/plogo3.png" alt=""></div>
                <div class="item"><img src="images/plogo4.png" alt=""></div>
                <div class="item"><img src="images/plogo5.png" alt=""></div>
            </div>
        </div>
    </div>
    <!--Partner Logos Section End-->
</section>
<!--About End-->
@endsection