@extends('layouts.app')
@section('content')
<!--Inner Header Start-->
<section class="wf100 p100 inner-header why-ecova">
    <div class="container">
        <h1>Products</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us </a></li>
            <li><a href="#">Products</a></li>
        </ul>
    </div>
</section>
<!--Inner Header End-->
<!--Causes Start-->
<section class="wf100 p80 events">
    <div class="event-posts">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 col-sm-6">
                    <div class="event-post">

                        <div class="event-thumb">
                            <a href="{{route('productdetails', ['id'=> $product->id])}}"><i class="fas fa-link"></i></a>
                            <?php foreach (array_slice(json_decode($product->image),  0,1) as $picture ) { ?>

                            <img src="{{asset('storage/'.str_replace('public/','', $picture))}}" style="height: 300px" alt="{{$product->name}}">

                            <?php } ?>
                        </div>
                        <div class="event-txt">
                            <h6><a href="{{route('productdetails', ['id'=> $product->id])}}">{{$product->name}}</a></h6>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="gt-pagination">
                    <nav>
                        {{$products->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Causes End-->
@endsection