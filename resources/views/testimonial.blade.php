@extends('layouts.app')
@section('content')
<!--Inner Header Start-->
<section class="wf100 p100 inner-header why-ecova">
    <div class="container">
        <h1>Testimonials</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us </a></li>
            <li><a href="#">Testimonials</a></li>
        </ul>
    </div>
</section>
<!--Inner Header End-->
<!--Causes Start-->
<section class="wf100 p80 events">
    <div class="event-posts">
        <div class="container">
            <div class="row">
                @foreach($testimonials as $testimonial)
                <div class="item col-md-4 col-sm-6">
                    <p>{{$testimonial->content}}</p>
                    <div class="tuser">
                        @if($testimonial->sex=='male')
                        <img src="assets/images/male.png" alt="">
                        @else
                        <img src="assets/images/female.png" alt="">
                        @endif<strong>{{$testimonial->name}}</strong> {{$testimonial->company}} </div>
                </div>
                @endforeach
                <div class="gt-pagination">
                    <nav>
                        {{$projects->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Causes End-->
@endsection