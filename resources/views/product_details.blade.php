@extends('layouts.app')
@section('content')
<!--Inner Header Start-->
<section class="wf100 p100 inner-header why-ecova">
    <div class="container">
        <h1>Product</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">{{$product->name}}</a></li>
        </ul>
    </div>
</section>
<!--Inner Header End-->
<section class="wf100 p80 shop">
    <div class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-pic">
                        <div class="pic1">
                            <div id="pic-slider" class="owl-carousel owl-theme">
                                <?php foreach (json_decode($product->image)as $picture) { ?>
                                <div class="pro-large"><img src="{{asset('storage/'.str_replace('public/','', $picture))}}" alt=""></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-text">
                        <h2>{{$product->name}}</h2>
                        <div class="pro-pricing">In-Stock </div>
                        <p>{{$product->desc}}</p>
                        <div class="add-2-cart">
                            <a href="{{route('product')}}" class="aboutus">Get Quotation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="online-shop wf100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Related Products</h2>
                </div>
            </div>
            <div class="row">
                <!--Pro Box Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="product-box">
                        <div class="pro-thumb"> <a href="#">Add To Cart</a> <img src="images/pro1.jpg" alt=""></div>
                        <div class="pro-txt">
                            <h6><a href="#">Happy Ninja Shirt</a></h6>
                            <p class="pro-price"><del>$25.00</del> $19.00</p>
                        </div>
                    </div>
                </div>
                <!--Pro Box End-->
                <!--Pro Box Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="product-box">
                        <div class="pro-thumb"> <a href="#">Add To Cart</a> <img src="images/pro2.jpg" alt=""></div>
                        <div class="pro-txt">
                            <h6><a href="#">Woo corlor shirt</a></h6>
                            <p class="pro-price"><del>$25.00</del> $19.00</p>
                        </div>
                    </div>
                </div>
                <!--Pro Box End-->
                <!--Pro Box Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="product-box">
                        <div class="pro-thumb"> <a href="#">Add To Cart</a> <img src="images/pro3.jpg" alt=""></div>
                        <div class="pro-txt">
                            <h6><a href="#">Premium Quality</a></h6>
                            <p class="pro-price"><del>$25.00</del> $19.00</p>
                        </div>
                    </div>
                </div>
                <!--Pro Box End-->
                <!--Pro Box Start-->
                <div class="col-md-3 col-sm-6">
                    <div class="product-box">
                        <div class="pro-thumb"> <a href="#">Add To Cart</a> <img src="images/pro4.jpg" alt=""></div>
                        <div class="pro-txt">
                            <h6><a href="#">Ninja Silhouette</a></h6>
                            <p class="pro-price"><del>$25.00</del> $19.00</p>
                        </div>
                    </div>
                </div>
                <!--Pro Box End-->
            </div>
        </div>
    </section>
</section>
<!--Blog End-->
@endsection