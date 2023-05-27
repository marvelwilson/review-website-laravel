@extends('layouts.app')
@section('content')
<!--Inner Header Start-->
<section class="wf100 p100 inner-header why-ecova">
    <div class="container">
        <h1>Our Services</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
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
                    <p>Satlex is known for its excellent customer service response team. At Satlex, we believe that the total customer satisfaction is only achieved when a good quality product is supported by attentive and responsive customer care and after sales services whether you are an end user of one of our products or a channel partner we strive to ensure that you receive the best customer service experience in Nigeria.</p>
                    <p>We have well trained and competent engineers who are responsible for carrying out installations of our systems, under the highest levels of quality control and product standardization. With customer base that is spread across every aspect of Nigeria. Our (Alternative Power Solution) Products have been tested and proven to be very convenient, Efficient, Durable and Dependable.</p>
                </div>
            </div>
            <div class="col-md-6"> <img src="{{asset('assets/images/h3about.png')}}" alt=""> </div>
        </div>
    </div>
</section>
<section class="wf100 about">
    <div class="choose-ecova wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @foreach($services as $service)
                        <div class="col-4">
                            <div>
                                <h5> {{$service->name}}</h5>
                                <p> {{$service->desc}} </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

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