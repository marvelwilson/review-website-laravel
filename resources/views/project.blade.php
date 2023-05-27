@extends('layouts.app')
@section('content')
<!--Inner Header Start-->
<section class="wf100 p100 inner-header why-ecova">
    <div class="container">
        <h1>Projects</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us </a></li>
            <li><a href="#">Projects</a></li>
        </ul>
    </div>
</section>
<!--Inner Header End-->
<!--Causes Start-->
<section class="wf100 p80 events">
    <div class="event-posts">
        <div class="container">
            <div class="row">
                @foreach($projects as $project)
                <div class="col-md-4 col-sm-6">
                    <!--campaign box start-->
                    <div class="ser-box">
                        <div class="ser-thumb">
                            <a href="{{route('projectdetails', ['id'=> $project->id])}}"><i class="fas fa-link"></i></a>
                            <?php foreach (array_slice(json_decode($project->image),  0,1) as $picture ) { ?>
                            <img src="{{asset('storage/'.str_replace('public/','', $picture))}}" alt="{{$project->name}}" style="height: 375px !important">

                            <?php } ?>
                        </div>
                        <div class="ser-txt">
                            <h5> <a href="{{route('projectdetails', ['id'=> $project->id])}}">{{$project->name}}</a> </h5>
                            <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                    <!--campaign box end-->
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