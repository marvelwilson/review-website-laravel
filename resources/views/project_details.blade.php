@extends('layouts.app')
@section('content')
<section class="wf100 p100 inner-header why-ecova">
    <div class="container">
        <h1>Project</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Project</a></li>
            <li><a href="#">{{$project->name}}</a></li>
        </ul>
    </div>
</section>
<!--Inner Header End-->
<!--Contact Start-->
<div class="gallery wf100 p80">
    <div class="container">
        <div class="row">
            <!--Image Box Start-->
            <?php foreach (json_decode($project->image)as $picture) { ?>
            <div class="col-md-4 col-sm-4">
                <div class="gallery-img">
                    <a href="{{asset('storage/'.str_replace('public/','', $picture))}}" data-rel="prettyPhoto[gallery1]"><i class="fas fa-search"></i></a>
                    <img src="{{asset('storage/'.str_replace('public/','', $picture))}}" alt="">
                </div>
            </div>
            <?php } ?>

            <!--Image Box End-->

        </div>
    </div>
</div>
<!--Contact End-->
@endsection