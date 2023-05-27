@extends('layouts.app')
@section('content')
<!--Inner Header Start-->
<section class="wf100 p100 inner-header why-ecova">
    <div class="container">
        <h1>Contact Us</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#"> Contact </a></li>
            <li><a href="#"> Contact One</a></li>
        </ul>
    </div>
</section>
<!--Inner Header End-->
<!--Contact Start-->
<section class="contact-page wf100 p80">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="contact-form mb60">
                    <h3>Feel Free to Contact us</h3>
                    <form id="addForm" method="post" action="{{route('sendMsg')}}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control hight-unset" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="login-btn add-btn">
                                    Send Message
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="google-map">
                    <div class="contact-map-info">
                        <address>
                            <ul>
                                <li>
                                    <strong class="add-title">Address:</strong>
                                    {{$setting->address}}
                                </li>
                                <li>
                                    <strong class="add-title">Contact:</strong>
                                    <p>{{$setting->phone}}</p>
                                </li>
                                <li>
                                    <strong class="add-title">For More Information:</strong>
                                    <p><strong>Email:</strong>{{$setting->email}}</p>
                                </li>
                            </ul>
                        </address>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.612262900489!2d5.604036814004318!3d6.314557395430054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d3b577a666ff%3A0xa38a3a0439c33394!2sSatlex+Nigeria+Limited!5e0!3m2!1sen!2sng!4v1530170136220" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact End-->
@endsection